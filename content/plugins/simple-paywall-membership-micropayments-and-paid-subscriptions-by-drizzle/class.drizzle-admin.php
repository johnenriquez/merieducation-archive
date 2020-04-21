<?php
class Drizzle_Admin {
  const API_HOST = 'app.getdrizzle.com';
  const API_URL = 'https://app.getdrizzle.com/wp-api/v1';
  //const API_URL = 'http://localhost:8021/wp-api/v1';
  const API_PORT = 80;
  const NONCE = 'drizzle-update-key';

  private static $initiated = false;
  private static $notices   = array();

  public static function init() {
    if ( ! self::$initiated ) {
      self::init_hooks();
    }

    if ( isset( $_POST['action'] ) && $_POST['action'] == 'enter-key' ) {
      self::enter_api_key();
    }

    if ( isset( $_GET['action'] ) ) {
      if ( $_GET['action'] == 'delete-key' ) {
        if ( isset( $_GET['_wpnonce'] ) && wp_verify_nonce( $_GET['_wpnonce'], self::NONCE ) )
        self::deactivate_key( self::get_api_key() );
      }
    }
  }

  /**
   * Initializes WordPress hooks
   */
  private static function init_hooks() {
    self::$initiated = true;

    add_action( 'admin_init', array( 'Drizzle_Admin', 'admin_init' ) );
    add_action( 'admin_menu', array( 'Drizzle_Admin', 'admin_menu' ) );
    add_action( 'admin_enqueue_scripts', array( 'Drizzle_Admin', 'load_resources' ) );
  }

  public static function admin_init() {
    load_plugin_textdomain( 'drizzle' );

    add_action( 'save_post', array( 'Drizzle_Admin', 'save_post' ) );
  }

  public static function admin_menu() {
    self::load_menu();
  }

  public static function load_menu() {
    add_options_page( __('Simple paywall', 'paywall'), __('Simple paywall', 'paywall'), 'manage_options', 'drizzle-key-config', array( 'Drizzle_Admin', 'display_configuration_page' ) );
  }

  public static function load_resources() {
    global $hook_suffix;

    if ( in_array( $hook_suffix, array(
      'post.php',
      'post-new.php',
    ) ) ) {
      wp_register_script( 'drizzle_quicktags.js', plugin_dir_url( __FILE__ ) . '_inc/quicktags.js', array('jquery','quicktags'), DRIZZLE_VERSION );
      wp_enqueue_script( 'drizzle_quicktags.js' );
    }
  }

  private static function parse_shortcode_atts( $content, $shortcode ) {
    //Returns a sting consisting of all registered shortcodes.
    $pattern = get_shortcode_regex();

    //Checks the post content to see if any shortcodes are present.
    $shortcodes = preg_match_all( '/'. $pattern .'/s', $content, $matches );

    //Check to see which key our Attributes are sotred in.
    $shortcode_key = array_search( $shortcode, $matches[2] );

    //Create an new array of atts for our shortcode only.
    $shortcode_atts[] = $matches[3][$shortcode_key];

    //Ensure we don't have an empty strings
    $shortcode_atts = array_filter( $shortcode_atts );

    if ( ! empty( $shortcode_atts ) ) {
      //Pull out shortcode attributes based on the above key.
      $shortcode_atts = shortcode_parse_atts( implode( ',', $shortcode_atts ) );
    }

    $shortcode_atts[ "content" ] = $matches[5][$shortcode_key];

    return $shortcode_atts;
  }

  public static function save_post( $post_id ) {
    if ( wp_is_post_revision( $post_id ) ) {
      return;
    }

    $updated_post = get_post($post_id);
    if( !has_shortcode( $updated_post->post_content, 'paywall') ) {
      delete_post_meta( $post_id, '_drizzle_encrypted_content' );
      return;
    }

    $key = self::get_api_key();
    if (!$key) {
      return;
    }

    $shortcode_atts = self::parse_shortcode_atts( $updated_post->post_content, 'paywall' );
    if (!array_key_exists('content', $shortcode_atts)) {
      return;
    }

    $content = trim(trim($shortcode_atts[ 'content' ]), '\n');
    if (!$content) {
      return;
    }

    $query = Drizzle_Admin::build_query(array(
      'key' => $key, 'url' => get_permalink($updated_post),
      'title' => get_the_title($updated_post), 'content' => $content
    ));

    $response = self::http_post($query, 'create-wall');
    if ( empty( $response[1] ) ) {
      return;
    }

    $response = json_decode( $response[1] );
    if ( ! $response ) {
      return;
    }

    if ( $response->status == 'valid' && $response->encryptedContent) {
      update_post_meta( $post_id, '_drizzle_encrypted_content', $response->encryptedContent );
    }
  }
  private static function bail_on_activation( $message, $deactivate = true ) {
  ?>
<!doctype html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <style>
  * {
  text-align: center;
  margin: 0;
  padding: 0;
  font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
  }
  p {
  margin-top: 1em;
  font-size: 18px;
  }
  </style>
</head>
<body>
  <p><?php echo $message; ?></p>
</body>
</html>
<?php
    exit;
  }

  /**
   * Attached to activate_{ plugin_basename( __FILES__ ) } by register_activation_hook()
   * @static
   */
  public static function plugin_activation() {
    if ( version_compare( $GLOBALS['wp_version'], DRIZZLE__MINIMUM_WP_VERSION, '<' ) ) {
      load_plugin_textdomain( 'drizzle' );

      $message = '<strong>'.sprintf(esc_html__( 'Paywall (by Drizzle) %s requires WordPress %s or higher.' , 'drizzle'), DRIZZLE_VERSION, DRIZZLE__MINIMUM_WP_VERSION ).'</strong> '.sprintf(__('Please <a href="%1$s">upgrade WordPress</a> to a current version.', 'drizzle'), 'https://codex.wordpress.org/Upgrading_WordPress');

      Drizzle_Admin::bail_on_activation( $message );
    }
  }

  /**
   * Removes all connection options
   * @static
   */
  public static function plugin_deactivation( ) {
    return self::deactivate_key( self::get_api_key() );
  }

  public static function deactivate_key( $key ) {
    $response = self::http_post( Drizzle_Admin::build_query( array( 'key' => $key, 'blog' => get_option('home') ) ), 'deactivate' );

    if ( $response[1] != 'deactivated' )
      return 'failed';

    delete_option( 'drizzle_api_key' );
    return $response[1];
  }

  public static function get_api_key() {
    return get_option('drizzle_api_key');
  }

  public static function enter_api_key() {
    if ( function_exists('current_user_can') && !current_user_can('manage_options') )
      die(__('Cheatin&#8217; uh?', 'drizzle'));

    if ( !wp_verify_nonce( $_POST['_wpnonce'], self::NONCE ) ) {
      return false;
    }

    $new_key = esc_attr( $_POST['key'] );
    $old_key = Drizzle_Admin::get_api_key();

    if ( empty( $new_key ) ) {
      if ( !empty( $old_key ) ) {
        delete_option( 'drizzle_api_key' );
        self::$notices[] = 'new-key-empty';
      }
    }
    elseif ( $new_key != $old_key ) {
      self::save_key( $new_key );
    }

    return true;
  }

  public static function save_key( $api_key ) {
    $key_status = self::verify_key( $api_key );

    if ( $key_status == 'valid' ) {
      update_option( 'drizzle_api_key', $api_key );
      self::$notices['status'] = 'new-key-valid';
    } elseif ( in_array( $key_status, array( 'invalid', 'failed' ) ) )
      self::$notices['status'] = 'new-key-'.$key_status;
  }

  public static function check_key_status( $key ) {
    return Drizzle_Admin::http_post( Drizzle_Admin::build_query( array( 'key' => $key, 'blog' => get_option('home') ) ), 'verify-key' );
  }

  public static function verify_key( $key ) {
    $response = self::check_key_status( $key );

    if ( $response[1] != 'valid' && $response[1] != 'invalid' )
      return 'failed';

    return $response[1];
  }

  public static function view( $name, array $args = array() ) {
    foreach ( $args AS $key => $val ) {
      $$key = $val;
    }

    load_plugin_textdomain( 'drizzle' );

    $file = DRIZZLE__PLUGIN_DIR . 'views/'. $name . '.php';

    include( $file );
  }

  public static function display_configuration_page() {
    if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    $api_key      = self::get_api_key();
    $is_key_valid = $api_key && self::verify_key($api_key) == 'valid';

    Drizzle_Admin::view( 'config', compact( 'api_key', 'is_key_valid' ) );
  }

  public static function get_page_url( $page = 'config' ) {
    $args = array( 'page' => 'drizzle-key-config' );

    if ( $page == 'delete_key' )
      $args = array( 'page' => 'drizzle-key-config', 'view' => 'config', 'action' => 'delete-key', '_wpnonce' => wp_create_nonce( self::NONCE ) );

    $url = add_query_arg( $args, admin_url( 'options-general.php' ) );

    return $url;
  }

  /**
   * Essentially a copy of WP's build_query but one that doesn't expect pre-urlencoded values.
   *
   * @param array $args An array of key => value pairs
   * @return string A string ready for use as a URL query string.
   */
  public static function build_query( $args ) {
    return _http_build_query( $args, '', '&' );
  }

  /**
   * Log debugging info to the error log.
   *
   * Enabled when WP_DEBUG_LOG is enabled (and WP_DEBUG, since according to
   * core, "WP_DEBUG_DISPLAY and WP_DEBUG_LOG perform no function unless
   * WP_DEBUG is true), but can be disabled via the drizzle_debug_log filter.
   *
   * @param mixed $drizzle_debug The data to log.
   */
  public static function log( $drizzle_debug ) {
    if ( apply_filters( 'drizzle_debug_log', defined( 'WP_DEBUG' ) && WP_DEBUG && defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) ) {
      error_log( print_r( compact( 'drizzle_debug' ), true ) );
    }
  }

  /**
   * Make a POST request to the Drizzle API.
   *
   * @param string $request The body of the request.
   * @param string $path The path for the request.
   * @return array A two-member array consisting of the headers and the response body, both empty in the case of a failure.
   */
  public static function http_post( $request, $path ) {
    $drizzle_ua = sprintf( 'WordPress/%s | Paywall/%s', $GLOBALS['wp_version'], constant( 'DRIZZLE_VERSION' ) );

    $content_length = strlen( $request );

    //$api_key   = self::get_api_key();
    $host      = self::API_HOST;

    $http_host = self::API_URL;

    $http_args = array(
      'body' => $request,
      'headers' => array(
        'Content-Type' => 'application/x-www-form-urlencoded; charset=' . get_option( 'blog_charset' ),
        'Host' => $host,
        'User-Agent' => $drizzle_ua,
      ),
      'httpversion' => '1.0',
      'timeout' => 15
    );

    $drizzle_url = "{$http_host}/{$path}";

    // Check if SSL requests were disabled fewer than X hours ago.
    $ssl_disabled = get_option( '_drizzle_ssl_disabled' );

    if ( $ssl_disabled && $ssl_disabled < ( time() - 60 * 60 * 24 ) ) { // 24 hours
      $ssl_disabled = false;
      delete_option( '_drizzle_ssl_disabled' );
    }

    $ssl_failed = false;

    if ( !$ssl_disabled ) {
      $response = wp_remote_post( $drizzle_url, $http_args );

      Drizzle_Admin::log( compact( 'drizzle_url', 'http_args', 'response' ) );

      if ( is_wp_error( $response ) ) {
        $ssl_failed = true;
      }
    }

    if ( $ssl_disabled || $ssl_failed ) {
      $http_args['sslverify'] = false;
      $response = wp_remote_post( $drizzle_url, $http_args );

      Drizzle_Admin::log( compact( 'drizzle_url', 'http_args', 'response' ) );
    }

    if ( $ssl_failed ) {
      // The request failed when using SSL but succeeded without it. Disable SSL for future requests.
      update_option( '_drizzle_ssl_disabled', time() );
    }

    if ( is_wp_error( $response ) ) {
      return array('', '');
    }

    $simplified_response = array( $response['headers'], $response['body'] );

    return $simplified_response;
  }
}

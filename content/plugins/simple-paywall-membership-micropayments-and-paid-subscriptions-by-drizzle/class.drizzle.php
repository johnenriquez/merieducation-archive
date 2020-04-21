<?php
class Drizzle {
  const WIDGET_SCRIPT_URL = 'https://s3-us-west-1.amazonaws.com/zenmarket/for-widget.js';
  //const WIDGET_SCRIPT_URL = 'http://localhost:8070/static/widget.js';

  private static $initiated = false;

  public static function init() {
    if ( ! self::$initiated ) {
      self::init_hooks();
    }
  }

  /**
   * Initializes WordPress hooks
   */
  private static function init_hooks() {
    self::$initiated = true;

    add_shortcode( 'paywall', array( 'Drizzle', 'drizzle_shortcode' ) );
    add_action( 'wp_footer', array( 'Drizzle', 'add_script' ) );
  }

  public static function drizzle_shortcode($atts, $content = null) {
    global $post;

    $key = get_option('drizzle_api_key');
    $encrypted_content = get_post_meta( $post->ID, '_drizzle_encrypted_content', TRUE );
    if (!$key || !$encrypted_content) {
      return do_shortcode( $content );
    }

    $output  = '';
    $output .= '<div id="zenmarket--wrapper" style="display: none;">';
    $output .= '  <div id="zenmarket--hidden-content">';
    $output .=        $encrypted_content;
    $output .= '  </div>';
    $output .= '</div>';

    return $output;
  }

  public static function add_script() {
    $key = get_option('drizzle_api_key');
    $tag = "";

    if ($key) {
      $url = Drizzle::WIDGET_SCRIPT_URL;

      $tag .= "<script type=\"text/javascript\">";
      $tag .= "(function() {";
      $tag .= "  var script = document.createElement('script');";
      $tag .= "  script.src = '{$url}';";
      $tag .= "  script.async = true;";
      $tag .= "  var entry = document.getElementsByTagName('script')[0];";
      $tag .= "  entry.parentNode.insertBefore(script, entry);";
      $tag .= "})();";
      $tag .= "</script>";
    }

    echo $tag;
  }
}

<?php
/**
 * Template Name: Custom Page Layout
 *
 * @package meri2015
 *
 * Please note that this has front-end dependency on ACF!
 */

// full bleed
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed';
  return $classes;
}

if ( get_field( 'custom_page_layout', get_queried_object_id() ) ) {
  remove_action( 'genesis_loop', 'genesis_do_loop' );
  add_action( 'genesis_loop', 'custom_page_template_loop' );
}


function custom_page_template_loop() {

  while ( have_rows( 'custom_page_layout' ) ) : the_row(); ?>

    <?php /* ========= PARALLAX ========= */ if( get_row_layout() == 'parallax_divider' ): ?>

      <?php
        $parallax_image_array = get_sub_field( 'parallax_image' );
        $parallax_image_ID = $parallax_image_array[ 'ID' ];
        $parallax_image_url = je_gcis_id( $parallax_image_ID, 'full' );
      ?>

        <section class="parallax-container">
      <?php if( get_sub_field( 'parallax-is-linked' ) && get_sub_field( 'parallax-is-linked' ) != "no" ): ?>
        <?php
          $parallax_url = "/";
          if( get_sub_field( 'parallax_internal_link' ) ) {
            $parallax_url = get_sub_field( 'parallax_internal_link' );
          } elseif( get_sub_field( 'parallax_external_link' ) ) {
            $parallax_url = get_sub_field( 'parallax_external_link' );
          }
        ?>
        <a href="<?php echo $parallax_url; ?>">
      <?php endif; ?>
          <?php if ( get_sub_field( 'add_parallax_title' ) ): ?>
            <div class="parallax-title<?php if( get_sub_field( 'parallax-left-aligned' ) ) echo " left-aligned" ?><?php if( get_sub_field( 'parallax_lowered_title' ) ) echo " lowered" ?>">
              <h2><?php the_sub_field( 'parallax-title' ); ?></h2>
              <?php if( get_sub_field( 'parallax_subheadline' ) ): ?>
                <p><?php the_sub_field( 'parallax_subheadline' ); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; // if get_sub_field parallax-title?>
          <section class="page-mast parallax-mast" style="background-image: url( '<?php echo $parallax_image_url; ?>' );">
          </section>
      <?php if( get_sub_field( 'parallax-is-linked' ) != "no" ): ?></a><?php endif; ?>
        </section>
      <?php if( get_sub_field( 'enable_submenu' ) ): ?>
        <section class="sublevel-navigation">
          <p class="sublevel-navigation__instructions"><?php the_sub_field( 'submenu_title' ); ?></p>
          <?php if( have_rows( 'submenu_items' ) ): ?>
            <ul>
              <?php while( have_rows( 'submenu_items' ) ): the_row(); ?>
                <li><a<?php if( get_sub_field( 'is_current_page' ) ): ?> class="active"<?php endif; ?> href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_title' ); ?></a></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </section><!-- .sublevel-navigation -->
      <?php endif; ?>



    <?php /* ========= LEDE ========= */ elseif( get_row_layout() == 'lede_paragraph' ): ?>

      <section class="page-lede">
        <h2 class="page-lede-headline textbolding"><?php the_sub_field( 'lede_headline' ); ?></h2>
        <p class="page-lede-text"><?php the_sub_field( 'lede_description' ); ?></p>
      </section>



    <?php /* ========= GRID ========= */ elseif( get_row_layout() == 'grid' ): ?>

      <?php
        $grid_count = count( get_sub_field( 'grid_blocks' ) );
        if( have_rows( 'grid_blocks' ) ):
          $grid_count_class = "grid--" . $grid_count;
      ?>
        <section class="grid <?php echo $grid_count_class; ?> nl-grid <?php the_sub_field( 'class_addition' ); ?>">
        <?php
          while( have_rows( 'grid_blocks' ) ): the_row();
            $grid_block_image_array = get_sub_field( 'grid_block_image' );
            $grid_block_image_ID = $grid_block_image_array[ 'ID' ];
            $grid_block_image_url = je_gcis_id( $grid_block_image_ID, 'full' );
        ?>
          <div class="grid-cell grid-cell--padded">
            <img class="vector-icon <?php the_sub_field( 'class_addition' ); ?>" <?php the_sub_field( 'attribute_data' ); ?> src="<?php echo $grid_block_image_url; ?>">
            <h3 class="grid-headline"><?php the_sub_field( 'grid_block_title' ); ?></h3>
            <p class="grid-text"><?php the_sub_field( 'grid_block_description' ); ?></p>
          </div>
        <?php endwhile; // have_rows grid_blocks?>
        </section>
      <?php endif; // have_rows grid_blocks?>



    <?php /* ========= TESTIMONIAL BLOCK ========= */ elseif( get_row_layout() == 'testimonial_block' ): ?>

      <?php
        $callout_position = '';
        if( get_sub_field( 'testimonial_position' )  == "raised") $callout_position = 'testimonial--callout--raised';
        if( get_sub_field( 'testimonial_position' )  == "lowered") $callout_position = 'testimonial--callout--lowered';
      ?>

      <blockquote class="testimonial--callout <?php echo $callout_position; ?>"<?php if( get_sub_field( 'limit_testimonial_width' ) && get_sub_field( 'limit_testimonial_width' ) != 0 ): ?> style="margin-left: auto; margin-right: auto; max-width: <?php the_sub_field( 'limit_testimonial_width' ); ?>px;"<?php endif; ?>>
        <p class="testimonial-quote"><?php the_sub_field( 'testimonial_quote' ); ?></p>
        <footer class="testimonial-author"><?php the_sub_field( 'testimonial_author' ); ?></footer>
      </blockquote>



    <?php /* ========= CARDS ========= */ elseif( get_row_layout() == 'cards_section' ): ?>

      <section class="typical-program cards-section">
        <h2 class="typical-program-headline"><?php the_sub_field( 'cards_section_title' ); ?></h2>
        <?php
          $grid_count = count( get_sub_field( 'cards' ) );
          if( have_rows( 'cards' ) ):
            $card_count_class = "grid--" . $grid_count;
        ?>
          <div class="grid grid--gutters <?php echo $card_count_class; ?>">
            <?php while( have_rows( 'cards' ) ) : the_row(); ?>
              <div class="grid-cell card">
                <div class="typical-program-cell card-cell">
                  <h3 class="typical-program-subheadline"><?php the_sub_field( 'card_title' ); ?></h3>
                  <p class="typical-program-desc"><?php the_sub_field( 'card_description' ); ?></p>
                </div><!-- .card-cell -->
              </div><!--. card -->
            <?php endwhile; // end while have cards ?>
          </div><!-- .grid -->
        <?php endif; // end if have_rows cards ?>
      </section><!-- .cards-section -->



    <?php /* ========= CALLOUT ========= */ elseif( get_row_layout() == 'callout_module' ): ?>

      <section class="bonus-module isee-admissions-callout callout-module <?php the_sub_field( 'class_addition' ); ?>">
        <h3><?php the_sub_field( 'callout_title' ); ?></h3>
        <div class="callout-body">
          <p><?php the_sub_field( 'callout_body' ); ?></p>
        </div>
      </section>



    <?php /* ========= TABLES ========= */ elseif( get_row_layout() == 'table_section' ): ?>

      <section class="page-lede">
        <h2 class="page-lede-headline"><?php the_sub_field( 'tables_section_title' ); ?></h2>
      </section>

      <?php if( have_rows( 'tables' ) ): ?>
        <?php while( have_rows( 'tables' ) ) : the_row(); ?>
          <section class="test-info-tables">
            <section class="table-container">
              <?php $table = get_sub_field( 'table' ); ?>
              <table>
                <?php if( $table[ 'header' ] ): ?>
                  <thead>
                    <tr>
                      <?php foreach( $table[ 'header' ] as $th ): ?>
                        <td><?php echo $th[ 'c' ]; ?></td>
                      <?php endforeach; // foreach table[header] as th ?>
                    </tr>
                  </thead>
                <?php endif; // if table['header'] ?>
                <tbody>
                  <?php foreach( $table[ 'body' ] as $tr ): ?>
                  <tr>
                    <?php foreach( $tr as $td ): ?>
                    <td data-label=""><?php echo $td[ 'c' ]; ?></td>
                    <?php endforeach; // for each tr as td ?>
                  </tr>
                  <?php endforeach; // for each table['body'] as tr ?>
              </table>
            </section><!-- .table-container -->
          </section><!-- .test-info-tables -->
        <?php endwhile; // while have_rows tables ?>
      <?php endif; // if have_rows tables ?>



    <?php /* ========= INTER-PAGE NAV ========= */ elseif( get_row_layout() == 'inter-page_navigation' ): ?>

      <?php
        $titles_position = get_sub_field( 'nav_title_position' );
        $grid_count = count( get_sub_field( 'navigation_items' ) );
        if( have_rows( 'navigation_items' ) ) :
          $card_count_class = "grid--" . $grid_count;
      ?>
        <section class="grid <?php echo $card_count_class; ?> services-breakout-nav">
          <?php while( have_rows( 'navigation_items' ) ) : the_row(); ?>
            <div class="grid-cell">
              <a href="<?php the_sub_field( 'nav_link' ); ?>">
                <?php if( $titles_position == "above" || $titles_position == "both"  ): ?><h2 class="raised-title"><?php the_sub_field( 'nav_item_title' ); ?></h2><?php endif; ?>
                <div class="emblem">
                  <?php
                    $nav_item_image_array = get_sub_field( 'nav_item_image' );
                    $nav_item_image_ID = $nav_item_image_array[ 'ID' ];
                    $nav_item_image_url = je_gcis_id( $nav_item_image_ID, 'full' );
                  ?>
                  <img src="<?php echo $nav_item_image_url; ?>">
                  <?php if( $titles_position == "overlay" || $titles_position == "both"): ?><h2><?php the_sub_field( 'nav_item_overlay_title' ); ?></h2><?php endif; ?>
                </div>
                <?php the_sub_field( 'nav_item_caption' ); ?>
              </a>
            </div><!-- .grid-cell -->
          <?php endwhile; // while have_rows navigation_items?>
        </section><!-- .grid -->
      <?php endif; // have_rows navigation_items ?>



    <?php /* ========= INTER-PAGE NAV ========= */ elseif( get_row_layout() == 'landing_page_navigation' ): ?>

      <section class="landing-page-nav">
        <h2 class="landing-page-nav-headline"><?php the_sub_field( 'landing_page_navigation_title' ); ?></h2>
        <?php if( have_rows( 'landing_page_navigation_items' ) ): ?>
          <ul class="landing-page-nav-list nl-landing-page-nav-list">
            <?php while( have_rows( 'landing_page_navigation_items' ) ) : the_row(); ?>
              <li>
                <a href="<?php
                  if( get_sub_field( 'nav_item_link_type' ) == "internal" ) {
                    the_sub_field( 'nav_item_url_internal' );
                  } else {
                    the_sub_field( 'nav_item_url_external' );
                  }
                  ?>">
                  <h3><?php the_sub_field( 'nav_item_title' ); ?></h3>
                  <p><?php the_sub_field( 'nav_item_description' ); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </section>

    <?php /* ========= CUSTOM HTML ========= */ elseif( get_row_layout() == 'custom_html_section' ): ?>

    <section class="custom-html-group<?php if( get_sub_field( 'full_bleed' ) == true ) echo " full-bleed"; ?><?php if( get_sub_field( 'override_flex' ) == true ) echo " flex-override"; ?>">
      <?php
        if( have_rows( 'custom_html_sections' ) ): while( have_rows( 'custom_html_sections' ) ): the_row();
      ?>
        <div class="custom-html-block">
          <?php the_sub_field( 'custom_html_block' ); ?>
        </div>
      <?php endwhile; endif; ?>
    </section>

    <?php /* ========= END CUSTOM LAYOUTS */ endif;

  endwhile; // while have_rows

}

genesis();

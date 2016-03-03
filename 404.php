<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

   <?php do_action( 'himalayas_before_body_content' );

   $himalayas_layout = himalayas_layout_class(); ?>

   <div id="content" class="site-content">
      <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
         <div class="tg-container">

            <div id="primary">
               <div id="content-2">
                  <section class="error-404 not-found">
                     <div class="page-content">

                        <?php if ( ! dynamic_sidebar( 'himalayas_error_404_page_sidebar' ) ) : ?>
                           <header class="page-header">
                              <h1 class="page-title"><?php _e( 'Oops! Vous êtes perdu?' , 'himalayas' ); ?></h1>
                           </hea

                           <p><?php _e( 'Cette page n'existe pas.Revenir a la page d' accueil', 'himalayas' ); ?></p>

                           <div class="error-wrap">
                              <span class="num-404">
                                 <?php _e( '404', 'himalayas' ); ?>
                              </span>
                              <span class="error"><?php _e( 'error', 'himalayas' ); ?></span>
                           </div>
                           <?php get_search_form(); ?>
                        <?php endif; ?>
                     </div>
                  </section>
               </div>
            </div>

            <?php himalayas_sidebar_select(); ?>
         </div>
      </main>
   </div>

   <?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>
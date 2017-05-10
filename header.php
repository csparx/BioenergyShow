<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="logo-container">
        <a href="<?php echo home_url(); ?>"><img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/bioshow-logo-150x.png" /></a>
      </div>

  		<div class="nav-padding top-nav dark-bg main-header<?php if( is_home() ){ echo ' center-items'; } ?>">
        <span class="show-date"><?php echo get_option('show_date'); ?></span>
        <a href="<?php echo get_option('facebook_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png"></a>
        <a href="<?php echo get_option('twitter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.png"></a>
        <a href="<?php echo get_option('newsletter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/newsletter.png"></a>
        <a href="<?php echo get_option('rss_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></a>
        <!-- Need to insert search form -->
        <form id="top-search-bar" action="<?php echo get_home_url(); ?>/" method="get">
          <input id="top-nav-search" type="text" name="s" placeholder="Search..." value="<?php the_search_query(); ?>" />
          <input id="magnifying-glass" type="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/magnifying-glass.png" />

        </form>


      </div><!-- .top-nav .dark-bg -->

      <nav class="nav-main">

        <div class="nav-container">
          <a id="resp-menu" class="responsive-menu" href="#"> Menu ☰</a>
          <?php
          $args = array(
            'menu'              => 'Top Menu',
            'menu_class'        => 'menu',
            'container'         => '',
          );
          wp_nav_menu( $args );
          ?>
        </div>

      </nav>

      <script type="text/javascript">
        jQuery(function ($) {
          var touch 	= $('#resp-menu');
          var menu 	= $('.menu');

          $(touch).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
          });

          $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
          });

        });
      </script>

    </header>

    

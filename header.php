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

  		<div class="top-nav dark-bg<?php if( is_home() ){ echo ' center-items'; } ?>">
        <span class="show-date"><?php echo get_option('show_date'); ?></span>
        <a href="<?php echo get_option('facebook_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/includes/img/social/facebook.png"></a>
        <a href="<?php echo get_option('twitter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/includes/img/social/twitter.png"></a>
        <a href="<?php echo get_option('newsletter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/includes/img/social/newsletter.png"></a>
        <a href="<?php echo get_option('rss_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/includes/img/social/rss.png"></a>
        <!-- Need to insert search form -->
      </div><!-- .top-nav .dark-bg -->

      <div class="top-nav primary-bg<?php if( is_home() ){ echo ' center-items'; } ?>">
        <?php
        if ( has_nav_menu( 'top' ) ) :
          wp_nav_menu( array(
        		'theme_location'  => 'top',
        		'menu_id'         => 'top-menu',
        	) );
        endif;
        ?>
      </div>
    </header>

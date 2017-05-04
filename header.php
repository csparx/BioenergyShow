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
        <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/bioshow-logo-150x.png" />
      </div>

  		<div class="nav-padding top-nav dark-bg main-header<?php if( is_home() ){ echo ' center-items'; } ?>">
        <span class="show-date"><?php echo get_option('show_date'); ?></span>
        <a href="<?php echo get_option('facebook_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png"></a>
        <a href="<?php echo get_option('twitter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.png"></a>
        <a href="<?php echo get_option('newsletter_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/newsletter.png"></a>
        <a href="<?php echo get_option('rss_link'); ?>"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png"></a>
        <!-- Need to insert search form -->
        <input id="top-nav-search" placeholder="Search..." />
        <img id="magnifying-glass" src="<?php echo get_template_directory_uri();?>/assets/img/magnifying-glass.png">

      </div><!-- .top-nav .dark-bg -->

      <nav class="nav-main">
        <div class="nav-container">
        <a id="resp-menu" class="responsive-menu" href="#"> Menu ☰</a>
        <ul class="menu">
          <li><a class="homer" href="#"> Home</a></li>
          <li><a href="#"> Register</a></li>
          <li><a href="#"> About</a></li>
          <li><a href="<?php echo get_home_url(); ?>/category/blog/"> Blog</a></li>
          <li><a href="#"> Exhibitor Sponsors</a></li>
          <li><a href="#"> Attendee Info</a>
            <ul class="sub-menu">
              <li><a href="#"> Hotel Info</a></li>
              <li><a href="#"> Speakers</a></li>
              <li><a href="#"> Agenda</a></li>
              <li><a href="#"> Program</a></li>
            </ul>
          </li>
          <li><a href="#"> Exhibitor Info</a>
            <ul class="sub-menu">
              <li><a href="#"> Schedule (PDF)</a></li>
              <li><a href="#"> Brochure (PDF)</a></li>
              <li><a href="#"> Promotional Media</a></li>
            </ul>
          </li>
          <li><a href="#"> 2010-2014</a>
            <ul class="sub-menu">
              <li><a href="#"> BIO 2014</a>
                <ul>
                  <li><a href="#"> News</a></li>
                  <li><a href="#"> Speakers</a></li>
                  <li><a href="#"> Schedule</a></li>
                  <li><a href="#"> Video Chronicles</a></li>
                  <li><a href="#"> Live Broadcasts</a></li>
                </ul>
              </li>
              <li><a href="#"> BIO 2012</a>
                <ul>
                  <li><a href="#"> News</a></li>
                  <li><a href="#"> Gallery</a></li>
                  <li><a href="#"> Live Broadcasts</a></li>
                </ul>
              </li>
              <li><a href="#"> BIO 2010</a>
                <ul>
                  <li><a href="#"> Gallery</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"> Contact</a></li>
        </ul>
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















      <?php /*
      <div id="cnsTopnav" class="main-nav primary-bg<?php if( is_home() ){ echo ' center-items'; } ?>">
        <input type="checkbox" id="checkbox1" />
        <label for="checkbox1">
        <?php
        if ( has_nav_menu( 'top' ) ) :
          wp_nav_menu( array(
        		'theme_location'  => 'top',
        		'menu_id'         => 'top-menu',
        	) );
        endif;

        ?>
        <span class="cns-toggle">☰</span>
        </label>
      </div>
      */ ?>


    </header>

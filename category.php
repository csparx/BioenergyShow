<?php
/**
 * The template for displaying category pages
 */

get_header();
?>
<?php if ( have_posts() ) : ?>
<div id="banner-load">
  <h1 class="page-title">
    <?php the_archive_title(); ?>
  </h1>
</div>
<?php endif; ?>


<div class="page-container">
  <?php custom_breadcrumbs(); ?>
  <div class="fullwidth-content">
    <?php
    if ( have_posts() ) :

      /* Start the Loop */
      while ( have_posts() ) : the_post();

      the_title( '<h3 class="entry-title">', '</h3>' );

      endwhile;

      the_posts_pagination();

    else :

      // get_template_part( 'template-parts/post/content', 'none' );

    endif;
    ?>
  </div>
</div>
<?php
get_footer();
?>

<!--New images on load -->
<script type="text/javascript">
  jQuery(function ($) {
    //Add your images, we'll set the path in the next step
    var images = ['banner-1.jpg', 'banner-2.jpg', 'banner-3.jpg', 'banner-4.jpg', 'banner-5.jpg', 'banner-6.jpg', 'banner-7.jpg', 'banner-8.jpg', 'banner-9.jpg'];

    // Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.
    $('<img class="fade-in full-banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner-load');
  });
</script>

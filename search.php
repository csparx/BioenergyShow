<?php
/**
 * The template for displaying search results pages
 *
 */

get_header(); ?>

<div id="banner-load">
<?php if ( have_posts() ) : ?>

  <h1 class="page-title">
    <?php printf( __( 'Search Results for: %s', 'bioenergyshow' ), '<span>' . get_search_query() . '</span>' ); ?>
  </h1>

<?php else : ?>
  <h1 class="page-title">
    <?php _e( 'Nothing Found', 'bioenergyshow' ); ?>
  </h1>
<?php endif; ?>
</div>

<?php custom_breadcrumbs(); ?>
<div class="page-container">
  <?php
  if ( have_posts() ) :
  ?>

    <div class="blog-container">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">
      <div class="blog-thumb">
        <?php
        if ( has_post_thumbnail() ) {
          echo get_the_post_thumbnail( $post_id, 'thumbnail' );
        } else{
        ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/filler-150x.png" />
        <?php
        }
        ?>
      </div>
      <div class="blog-excerpt">
        <a class="blog-link" href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>
        <?php the_excerpt();?>

      </div>
    </div>

    <div style="clear:both;"></div>
    <hr class="blog-hr"/>

    <?php
    endwhile;

    the_posts_pagination();
    ?>
    </div>

  <?php
  else :

    // get_template_part( 'template-parts/post/content', 'none' );

  endif;

  get_sidebar();

  ?>
</div>
<div style="clear:both;"></div>

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

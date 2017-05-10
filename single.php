<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>
<div id="banner-load">
  <h1 class="page-title">
    <?php the_title(); ?>
  </h1>
</div>

<div class="page-container">
  <?php custom_breadcrumbs(); ?>
  <div class="page-content">
    <?php the_content(); ?>
  </div>

<?php
endwhile; // End of the loop.
get_sidebar();
?>
<div style="clear:both;"></div>

</div>
<?php
get_footer();
?>


<!--New images on load -->
<script type="text/javascript">
  createHeader();
</script>

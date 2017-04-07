<script type="text/javascript">
  jQuery(function ($) {
    $('.sponsors-carousel').flexslider({
      animation: "slide",
      animationLoop: false,
      slideshowSpeed: 5000,
      controlNav: false,
      customDirectionNav: $(".custom-navigation a"),
      itemWidth: 210,
      itemMargin: 5,
      move: 1,
    });
  });
</script>

<div class="flex sponsor-container">

  <h1 class="center-text sponsor-title">Sponsors</h1>
  <hr class="white-line" />
  <div class="flex">
    <div class="custom-navigation">
      <a href="#" class="flex-prev white-arrow">&#x3c;</a>
    </div>
    <div class="sponsors-carousel">

      <ul class="slides">
        <?php
        global $post;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('gold'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <li>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="gold-sponsor sponsor-level">GOLD</span>';
            ?>
          </li>
        <?php
        endforeach;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('silver'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <li>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="silver-sponsor sponsor-level">SILVER</span>';
            ?>
          </li>
        <?php
        endforeach;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('bronze'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <li>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="bronze-sponsor sponsor-level">BRONZE</span>';
            ?>
          </li>
        <?php
        endforeach;
        ?>
      </ul>
    </div>

    <div class="custom-navigation">
      <a href="#" class="flex-next white-arrow">&#x3e;</a>
    </div>
  </div>


  <a class="white-btn" href="#">View All</a>

</div>



<?php
/**
* To keep for future
*/
/*
global $post;

$args = array(
  'posts_per_page'  => 9999,
  'post_type'       => 'cns_sponsor',
  'tax_query'       => array(
    array(
      'taxonomy'    => 'cns_sponsor_level',
      'field'       => 'slug',
      'terms'       => array('gold','silver','bronze'),
    ),
  ),
);
$myposts = get_posts($args);
$count = count($myposts);
foreach( $myposts as $post ) : setup_postdata( $post );
?>
  <li>
    <?php echo get_the_post_thumbnail( $post_id );
    $term_array = wp_get_post_terms( $post->ID, 'cns_sponsor_level', array('fields' => 'all'));
    $term = $term_array[0]->name;
    switch($term){
      case "Gold":
        echo '<span class="gold-sponsor sponsor-level">GOLD</span>';
        break;
      case "Silver":
        echo '<span class="silver-sponsor sponsor-level">SILVER</span>';
        break;
      case "Bronze":
        echo '<span class="bronze-sponsor sponsor-level">BRONZE</span>';
        break;
      default:
        echo "";
    }
    ?>
  </li>
<?php
endforeach;
wp_reset_postdata();
?>
*/
?>

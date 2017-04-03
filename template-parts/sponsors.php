<script type="text/javascript">
  jQuery(function ($) {
    $('.sponsors-carousel').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 210,
      itemMargin: 5
    });
  });
</script>

<div class="flex sponsor-container">

  <h1 class="center-text sponsor-title">Sponsors</h1>
  <hr class="white-line" />

  <div class="sponsors-carousel">
    <ul class="slides">
      <?php
      global $post;
      $args = array(
        'posts_per_page'  => 9999,
        'category_name'   => array('gold','silver','bronze'),
        'order_by'        => 'rand',
        'post_type'       => 'cr3ativsponsor'
      );
      $myposts = get_posts($args);
      $count = count($myposts);
      foreach( $myposts as $post ) : setup_postdata( $post );
      ?>
        <li>
          <?php echo get_the_post_thumbnail( $post_id ); ?>
        </li>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>
    </ul>
  </div>
</div>


<!-- Place somewhere in the <body> of your page
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="slide1.jpg" />
    </li>
    <li>
      <img src="slide2.jpg" />
    </li>
    <li>
      <img src="slide3.jpg" />
    </li>
    <li>
      <img src="slide4.jpg" />
    </li>

  </ul>
</div>
-->

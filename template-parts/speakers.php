<script type="text/javascript">
  jQuery(function ($) {
    $('.speakers-carousel').flexslider({
      animation: "slide",
      animationLoop : false,
      slideshowSpeed: 5000,
      controlNav: false,
      customDirectionNav: $(".speaker-navigation a"),
    });
  });
</script>

<div class="flex speaker-container">

  <h1 class="center-text speaker-title">Speakers</h1>
  <hr class="green-line" />
  <div class="flex">
    <div class="speaker-navigation">
      <a href="#" class="flex-prev black-arrow">&#x3c;</a>
    </div>
    <div class="speakers-carousel">

      <ul class="slides">
        <?php
        global $post;
        $args = array(
          'posts_per_page'  => 9999,
          'order_by'        => 'rand',
          'post_type'       => 'cns_speaker',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_speaker_year',
              'field'       => 'slug',
              'terms'       => array('2016'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <li>
            <?php
            echo get_the_post_thumbnail( $post_id );
            echo the_title('<p class="speaker-name">', '</p>');
            echo the_content();
            ?>
          </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
      </ul>
    </div>

    <div class="speaker-navigation">
      <a href="#" class="flex-next black-arrow">&#x3e;</a>
    </div>
  </div>


  <a class="green-btn" href="#">View All</a>

</div>

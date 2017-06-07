<div class="flex wrap-true">
  <div class="one-half">
    <a href="<?php home_url(); ?>/about-the-conference-expo/"><h1 class="center-text cat-title">About Conference & Expo</h1></a>
    <hr class="green-line" />
    <img class="about-pic" src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" />
    <div class="grey-bg about">
      <p>
        We are pleased to announce that the fifth Wood Bioenergy Conference & Expo will be held Wednesday-Thursday, April 11-12, 2018, once again in the Grand Ballroom North of the Omni Hotel at CNN Center in Atlanta, Georgia, USA.
      </p>
      <p>
        Wood Bioenergy Conference & Expo again immediately precedes the Panel & Engineered Lumber International Conference & Expo (PELICE), which will be held April 13-14, 2018, also in the Grand Ballroom North. Both events are supported by Wood Bioenergy and Panel World magazines, and Georgia
      </p>
      <a class="green-btn about-btn" href="<?php home_url(); ?>/about-the-conference-expo/">Learn More</a>
    </div>
  </div>
  <div class="one-half">
    <a href="<?php home_url(); ?>/category/blog/"><h1 class="center-text cat-title">Latest News</h1></a>
    <hr class="green-line" />
      <?php
      global $post;
      $args = array(
        'posts_per_page'  => 2,
        'category_name'   => array('bio-2018','bio-2016')
      );
      $myposts = get_posts($args);
      $count = count($myposts);
      foreach( $myposts as $post ) : setup_postdata( $post );
      ?>
        <div class="latest-div">

          <div class="latest-thumb">
            <?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?>
          </div>

          <div class="latest-excerpt">
            <a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>

          </div>

        </div>
        <?php
        if (--$count <= 0) {
          break;
        }
        ?>
        <hr class="lightgrey-line" />
      <?php
      endforeach;
      wp_reset_postdata();
      ?>
  </div>
</div>

<?php
/**
* Homepage slider
*/
?>
<script type="text/javascript">
// Can also be used with $(document).ready()
jQuery(function ($) {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav: false
  });
});
</script>
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" />
    </li>
  </ul>
  <div class="center-absolute">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioshow-logo.png" />
    <span id="slider-date">April 11-12, 2018</span>
    <span id="slider-location">Omni Hotel at CNN Center in Atlanta, GA</span>
  </div>

</div>

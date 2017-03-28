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
  <img src="" />
</div>

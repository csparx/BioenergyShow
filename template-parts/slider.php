<?php
/**
* Homepage slider
*/
?>
<div class="home-slider">

  <div class="center-absolute" id="logodiv">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioshow-logo.png" />
      <span id="slider-date">April 11-12, 2018</span>
      <span id="slider-location">Omni Hotel at CNN Center in Atlanta, GA</span>
  </div>

  <div class="flexslider">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" />
    </div>
  </div>



</div>





<script type="text/javascript">
// Can also be used with $(document).ready()
jQuery(function ($) {
  $('.flexslider').slick({
    infinite: true,
    fade: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 7000,
  });

});
</script>

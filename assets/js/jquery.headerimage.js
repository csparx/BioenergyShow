
jQuery(function ($) {
  //Add your images, we'll set the path in the next step
  var images = ['banner-1.jpg', 'banner-2.jpg', 'banner-3.jpg', 'banner-4.jpg', 'banner-5.jpg', 'banner-6.jpg', 'banner-7.jpg', 'banner-8.jpg', 'banner-9.jpg'];

  // Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.
  $('<img class="fade-in full-banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner-load');
});

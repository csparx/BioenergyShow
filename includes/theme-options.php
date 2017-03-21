<?php
add_action('admin_menu', 'cns_add_theme_options');

function cns_add_theme_options(){
  add_theme_page( 'Theme Options', 'Theme Options', 'administrator', 'bio-theme-options', 'cns_theme_options');
}

function cns_theme_options(){

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if( isset($_POST['show_date']) ){
      update_option( 'show_date', $_POST['show_date'] );
    }
    if( isset($_POST['facebook_link']) ){
      update_option( 'facebook_link', $_POST['facebook_link'] );
    }
    if( isset($_POST['twitter_link']) ){
      update_option( 'twitter_link', $_POST['twitter_link'] );
    }
    if( isset($_POST['newsletter_link']) ){
      update_option( 'newsletter_link', $_POST['newsletter_link'] );
    }
    if( isset($_POST['rss_link']) ){
      update_option( 'rss_link', $_POST['rss_link'] );
    }
    ?>

    <div class="updated"><p><strong><?php _e('Settings saved.', 'menu-test' ); ?></strong></p></div>

  <?php
  }
  ?>

  <div class="wrap">
  <h2>Theme Options</h2>

  <form method="post" action="">
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Show Date</th>
        <td><input type="text" name="show_date" value="<?php echo get_option('show_date'); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Facebook Link</th>
        <td><input type="text" name="facebook_link" value="<?php echo get_option('facebook_link'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Twitter Link</th>
        <td><input type="text" name="twitter_link" value="<?php echo get_option('twitter_link'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Newsletter Link</th>
        <td><input type="text" name="newsletter_link" value="<?php echo get_option('newsletter_link'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">RSS Link</th>
        <td><input type="text" name="rss_link" value="<?php echo get_option('rss_link'); ?>" /></td>
        </tr>
    </table>

    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
  </form>
  </div>
  <?php } ?>

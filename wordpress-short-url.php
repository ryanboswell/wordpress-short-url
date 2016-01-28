<?php
 /**
  * Plugin Name: Custom Short URL
  * Plugin URI: https://github.com/ryanboswell/wordpress-short-url/
  * Description: Provides a simple management page for setting a custom short URL to use when generating shortlinks
  * Version: 2.0
  * Author: Ryan Boswell / MidnightLabs
  * Author URI: http://ryanboswell.com
  * Plugin URI: http://ryanboswell.com
  */

  /**
   * Initializes the WordPress Custom Short URL plugin
   */
  function wordpress_short_url_load() {
		require_once dirname( __FILE__ ) . '/inc/class-short-url.php';
    MidnightLabs\Short_URL::get_instance();
  }
  add_action( 'after_setup_theme', 'wordpress_short_url_load' );

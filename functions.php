<?php
function mythemeone_script_enqueue () {
  //('handle', abspath to file, dependencies array, 'versionNum','media param')
  wp_enqueue_style('customstyle', get_template_directory_uri().'/css/mythemeone.css', array(), '1.0.0', 'all');
  //('handle', abspath to file, dependencies array, 'versionNum', true for js in footer)
  wp_enqueue_script('customjs', get_template_directory_uri().'/js/mythemeone.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mythemeone_script_enqueue');

function mythemeone_setup() {
  //adds menus support and registers menus together
  register_nav_menus(array('primary' => __('Primary Header Navigation'),
                           'secondary' => __('Footer Navigation')));

  /*
  These calls were made on video3 to add nav menus but the WP docs show
  the more elegant form used above.
  Adds menu support to the admin page
  add_theme_support('menus');
  (slug for menu, description)
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');*/
}
//('when to trigger action', 'function triggered')
add_action('init', 'mythemeone_setup');

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

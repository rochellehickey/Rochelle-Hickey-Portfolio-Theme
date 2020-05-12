<?php

// Add Stylesheets
function portfolio_scripts() {
  // enqueue Google fonts
  wp_enqueue_style('portfolio_google_fonts', 'https://fonts.googleapis.com/css?family=Halant:wght@500;700|Noto+Sans+KR|Sacramento&display=swap', false);
  // enqueue stylesheet css
  wp_enqueue_style('portfolio_styles', get_stylesheet_uri());
  // enqueue Fontawesome icons
  wp_enqueue_style('portfolio_icons', 'images/icons/fontawesome-free-5.10.2-web/css/all.css');
  // enqueue Navigation JS file
  wp_enqueue_script( 'rochelleportfoliotwentytwenty-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
  // enqueue Accessibility for Key Board Users
  wp_enqueue_script( 'rochelleportfoliotwentytwenty-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
}
add_action('wp_enqueue_scripts', 'portfolio_scripts');

// WordPress handling Title Tags
if (!function_exists('portfolio_setup')) :
  function portfolio_setup() {
    add_theme_support('Rochelle Hickey Front End Developer');

  }
endif;
add_action('after_setup_theme', 'portfolio_setup');

// Register Menus
function register_portfolio_menus() {
  register_nav_menus(
    array(
      'primary' => ('Primary Menu'),
      'footer' => ('Footer Menu')
    )
  );
}
add_action('init', 'register_portfolio_menus');


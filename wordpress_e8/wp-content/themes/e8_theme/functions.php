<?php
// Tema-stöd för miniatyrbilder och menyer
function my_theme_setup()
{
  add_theme_support('post-thumbnails'); // För att kunna välja utvald bild till post/page
  add_theme_support('menus'); // För att kunna skapa menyer under Appearance -> Menus
}
add_action('after_setup_theme', 'my_theme_setup');

// Registrera menyer
function register_my_menus()
{
  register_nav_menus(array(
    'primary' => 'Huvudmeny',
  ));
}
add_action('init', 'register_my_menus');

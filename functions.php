<?php
// Filter för att ändra titeln (testa med apply_filters i temat)
add_filter('custom_post_title', function ($title) {
  return 'Vad tycker du om artikeln ✨ ' . $title . ' ✨?';
});

// Action för att skriva ut något före inläggsinnehållet (testa med do_action i temat)
add_action('before_post_content', function () {
  echo '<p>Lägg till actionkrokar!</p>';
});

// Funktion för att lägga till något i footern
function add_footer_hook_()
{
  echo '<p>Lägg till actionkrok i footer!</p>';
}
add_action('wp_footer', 'add_footer_hook_');

// Ladda huvudtemats CSS
function load_parent_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_parent_styles');

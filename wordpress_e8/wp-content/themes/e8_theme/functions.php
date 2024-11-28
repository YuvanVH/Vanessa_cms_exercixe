<?php function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
    )
  );
}
add_action('after_setup_theme', 'register_my_menus');
?>

<?php function theme_customizer_settings($wp_customize)
{
  $wp_customize->add_setting('header_background_image');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_background_image', array(
    'label' => 'Bakgrundsbild för header',
    'section' => 'title_tagline',
    'settings' => 'header_background_image',
  )));
}
add_action('customize_register', 'theme_customizer_settings');

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); // WordPress-funktion för att ladda CSS, JS och plugins 
  ?>
</head>

<body <?php body_class(); ?>>
  <header class="hero" style="background-image: url('<?php echo get_theme_mod('header_background_image', get_template_directory_uri() . '/images/default-bg.jpg'); ?>');">
    <div class="overlay">
      <div class="container">
        <nav>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container_class' => 'main-menu-header-container'
          ));
          ?>
        </nav>
        <div class="hero-content">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="slogan"><?php echo get_bloginfo('description'); ?></p>
        </div>
      </div>
    </div>
  </header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); // WordPress-funktion för att ladda CSS, JS o plugins
  ?>
</head>

<body <?php body_class(); ?>>
  <header class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="overlay">
      <div class="container">
        <div class="main-menu-header-container">
          <a class="logo-header" href="<?php echo home_url(); ?>">
            <?php
            if (has_custom_logo()) {
              the_custom_logo(); // Visar den anpassade loggan
            } else {
              // Om ingen logga har laddats upp, visa text
              echo '<img class="logo-header" src="' . get_template_directory_uri() . '/images/website-logo.png" alt="Logo image">';
            }
            ?>
          </a>

          <!-- Denna kod laddar upp menu från wp -->
          <nav class="main-menu">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary', // Huvudmeny
              'menu_class' => 'menu', // Menyns CSS-klass
            ));
            ?>
          </nav>
        </div>
        <!-- titel och slogan -->
        <div class="hero-content">
          <h1>-<?php echo is_front_page() ? get_bloginfo('name') : wp_title('', false); ?> -</h1>
        </div>
        <?php
        if (get_post_meta(get_the_ID(), 'slogan', true)) {
          echo '<p class="slogan">' . esc_html(get_post_meta(get_the_ID(), 'slogan', true)) . '</p>';
        }
        ?>
      </div>
  </header>

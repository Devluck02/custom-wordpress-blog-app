<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand inline-block py-0" href="<?php echo home_url(); ?>"><img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""><?php bloginfo('name'); ?></a>
    <!-- mobile nav button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <nav class="collapse navbar-collapse justify-content-md-end" id="navbarTogglerDemo01">
        <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => 'ul',
                    'container_class'=> 'navbar-nav me-auto mb-2 mb-lg-0',
                    'menu_class'     => 'navbar-nav ml-auto',
                ) );
            ?>
    </nav>
  </div>
</nav>
    </header>

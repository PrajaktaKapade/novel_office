<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        <!-- Logo -->
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Novel Office Logo" loading="lazy" />
        </div>

        <!-- Mobile toggle -->
        <div class="menu-toggle" id="mobile-menu">&#9776;</div>

        <!-- Navigation -->
        <nav class="main-navigation" id="main-nav">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'nav-menu',
                    'container' => false
                ));
            ?>
        </nav>
    </div>
</header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php else : ?>
            <h1><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </div>
</header>

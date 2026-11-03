<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inhoud">
        <a class="logo" href="<?php echo home_url( '/' ); ?>">
            <?php if ( file_exists( get_template_directory() . '/images/logo.png' ) ) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
            <?php else : ?>
                <?php bloginfo( 'name' ); ?>
            <?php endif; ?>
        </a>

        <button class="menu-knop" aria-label="Menu openen">&#9776;</button>

        <nav class="hoofdmenu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'hoofdmenu',
                'container'      => false,
            ) );
            ?>
        </nav>
    </div>
</header>

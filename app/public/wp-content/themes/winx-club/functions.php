<?php
/*
 * functions.php - Winx Club thema
 * Hier staat alle functionaliteit van het thema (menu's, widgets, styles en scripts).
 * Dit bestand toont zelf niks, het registreert alleen dingen.
 */

// Thema instellen: features aanzetten en menu's registreren
function winx_setup() {
    add_theme_support( 'title-tag' );           // automatische <title> tag
    add_theme_support( 'post-thumbnails' );     // uitgelichte afbeeldingen
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'automatic-feed-links' );

    // Menu locaties, deze zie je onder Weergave > Menu's
    register_nav_menus( array(
        'hoofdmenu'   => 'Hoofdmenu (header)',
        'footermenu'  => 'Footermenu',
    ) );
}
add_action( 'after_setup_theme', 'winx_setup' );


// Widget gebied in de footer, deze zie je onder Weergave > Widgets
function winx_widgets() {
    register_sidebar( array(
        'name'          => 'Footer widgets',
        'id'            => 'footer-widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'winx_widgets' );


// CSS bestanden inladen
function winx_styles() {
    // Google Font voor de koppen
    wp_enqueue_style( 'winx-font', 'https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Nunito:wght@400;700&display=swap' );

    // style.css in de root van het thema
    wp_enqueue_style( 'winx-style', get_stylesheet_uri(), array( 'winx-font' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'winx_styles' );


// JS bestanden inladen (true = in de footer laden)
function winx_scripts() {
    $pad = get_template_directory_uri();

    wp_enqueue_script( 'winx-main', $pad . '/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'winx_scripts' );


// Action: extra tekstje onderaan elke pagina via wp_footer()
function winx_footer_tekst() {
    echo '<p class="magie-tekst">Gemaakt met een beetje feeënmagie &#10024;</p>';
}
add_action( 'wp_footer', 'winx_footer_tekst' );

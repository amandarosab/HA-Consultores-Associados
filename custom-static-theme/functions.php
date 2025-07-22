<?php
/**
 * Theme functions and definitions
 */

function custom_static_theme_setup() {
    load_theme_textdomain( 'custom-static-theme', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'custom-static-theme' ),
        )
    );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'custom_static_theme_setup' );

function custom_static_theme_scripts() {
    $theme_uri = get_template_directory_uri();

    // Styles
    wp_enqueue_style( 'main-styles', $theme_uri . '/css/main-styles.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'component-styles', $theme_uri . '/css/component-styles.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'nav-button-wordpress', $theme_uri . '/css/nav-button-wordpress.css', array(), '1.0', 'all' );

    // Fonts and other css
    wp_enqueue_style( 'fonts', $theme_uri . '/css/fonts.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'interactive-elements', $theme_uri . '/css/interactive-elements.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'responsive-images', $theme_uri . '/css/responsive_images.css', array(), '1.0', 'all' );

    // Inline css (if needed) - you can register them as files instead
    // wp_add_inline_style( 'main-styles', file_get_contents( get_template_directory() . '/assets/css/akismet-widget-style-inline-css.css' ) );

    // Scripts
    wp_enqueue_script( 'emoji-detection', $theme_uri . '/js/emoji-detection.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'gtm-loader', $theme_uri . '/js/gtm-loader.js', array(), '1.0', true );
    wp_enqueue_script( 'custom-footer', $theme_uri . '/js/custom-footer.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'otwrapper', $theme_uri . '/js/otwrapper.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_static_theme_scripts' );
function helio_theme_assets() {
    /* style.css do tema – mantém */
    wp_enqueue_style( 'helio-style', get_stylesheet_uri(), [], '1.0' );

    /* main-styles.css – agora carregado por último */
    wp_enqueue_style(
        'helio-main',
        get_template_directory_uri() . '/css/main-styles.css',
        [ 'helio-style' ],
        '1.0'
    );

    wp_enqueue_style(
      'helio-custom',
      get_stylesheet_directory_uri() . '/css/wp-custom.css',
      ['helio-main' ],   // carrega **depois** dos 2
      filemtime( get_stylesheet_directory() . '/css/wp-custom.css' )
  );
}
add_action( 'wp_enqueue_scripts', 'helio_theme_assets', 999 );
?>

<?php

//* Register widget areas
add_action( 'widgets_init', 'bbs_register_widget_areas' );
function bbs_register_widget_areas() {

    genesis_register_sidebar( array(
        'id'            => 'front-page-1',
        'name'          => 'Front Page 1',
        'description'   => 'This is the first widget area on the front page that spans across the entire screen.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'front-page-2',
        'name'          => 'Front Page 2',
        'description'   => 'This is the second widget area on the front page.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'front-page-3',
        'name'          => 'Front Page 3',
        'description'   => 'This is the third widget area on the front page that has an image behind it.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'front-page-4',
        'name'          => 'Front Page 4',
        'description'   => 'This is the fourth widget area on the front page.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'front-page-5',
        'name'          => 'Front Page 5',
        'description'   => 'This is the fifth widget area on the front page that has an image behind it.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'before-header',
        'name'          => 'Before Header',
        'description'   => 'This is the widget before the header on every page. It spans the full width of the screen.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'after-footer',
        'name'          => 'After Footer',
        'description'   => 'This is the widget area after the footer on every page.'
    ));

    genesis_register_sidebar( array(
        'id'            => 'page-index',
        'name'          => 'Index Page',
        'description'   => 'This is the widget area on the "index" page template. It\'s perfect for a portfolio or an index of your categories.'
    ));

    // Register enews-popup widget area
    genesis_register_sidebar(
    array(
        'id'          => 'enews-popup',
        'name'        => __( 'eNews Popup', 'my-theme-text-domain' ),
        'description' => __( 'This opt-in form will appear inside a popup', 'my-theme-text-domain' ),
    )
    );

    // Create a custom [enews_popup] shortcode which displays enews-popup widget area
    add_shortcode( 'enews_popup', 'func_enews_popup' );
    function func_enews_popup() {

    ob_start();
        genesis_widget_area( 'enews-popup' );
    $enews_popup = ob_get_clean();

    return $enews_popup;

}

}

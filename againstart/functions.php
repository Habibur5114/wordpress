<?php

register_nav_menus(array(

'theme location' => 'Header Menu',
'Footer location' => 'Footer Menu'
));

add_theme_support('title-tag');

add_theme_support('post-thumbnails');


function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'footer Sidebar', 'textdomain' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );


 
        register_sidebar( array(
            'name'          => __( 'footer Sidebar', 'textdomain' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );


 
            register_sidebar( array(
                'name'          => __( 'footer Sidebar', 'textdomain' ),
                'id'            => 'footer-3',
                'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
                'before_widget' => '<li id="%1$s" class="widget %2$s">',
                'after_widget'  => '</li>',
                'before_title'  => '<h2 class="widgettitle">',
                'after_title'   => '</h2>',
            ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


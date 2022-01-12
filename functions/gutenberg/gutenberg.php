<?php

// Custom Guttnberg

function gilang_gutenberg_default_color(){
    add_theme_support( 
        'editor-color-palette', 
        array(
            array(
                'name'  => esc_attr__( 'white', 'gilang' ),
                'slug'  => 'white',
                'color' => '#ffffff',
            ),
            array(
                'name'  => esc_attr__( 'secondary', 'gilang' ),
                'slug'  => 'secondary',
                'color' => '#404248',
            ),
            array(
                'name'  => esc_attr__( 'black', 'gilang' ),
                'slug'  => 'black',
                'color' => '#000000',
            ),
        ) 
    );
}
add_action( 'after_setup_theme', 'gilang_gutenberg_default_color' );

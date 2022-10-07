<?php
/**
 * Custom Gutenberg functions
 */

function crefila_gutenberg_default_colors()
{
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000000'
            ),
            array(
                'name' => 'Pink',
                'slug' => 'pink',
                'color' => '#ff4444'
            )
        )
    );

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24
            )
        )
    );
}
add_action( 'init', 'crefila_gutenberg_default_colors' );

function create_block_crefila_blocks_init() {
	register_block_type( get_template_directory() . '/build/blocks/footer' );
	register_block_type( get_template_directory() . '/build/blocks/card' );
}
add_action( 'init', 'create_block_crefila_blocks_init' );

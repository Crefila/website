<?php 

/**
 * Enqueue scripts and styles.
 */
function crefila_scripts() {
	// wp_enqueue_style( 'crefila-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'crefila-style', get_template_directory_uri().'/css/main.css', array(), _S_VERSION );
	wp_style_add_data( 'crefila-style', 'rtl', 'replace' );
	
	wp_enqueue_style( 'icomoon-style', get_template_directory_uri().'/fonts/icomoon/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'helvetica-style', get_template_directory_uri().'/fonts/Helvetica-Font/style.css', array(), _S_VERSION );


	wp_enqueue_script( 'crefila-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crefila_scripts' );
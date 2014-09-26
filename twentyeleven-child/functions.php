<?php

if ( ! function_exists( 'twentyeleven_posted_on' ) ) {

function twentyeleven_posted_on() {

	printf( __( '<span class="sep">发表于 </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s, %2$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),

		esc_url( get_permalink() ),

		esc_attr( get_the_time() ),

		esc_attr( get_the_date( 'c' ) ),

		esc_html( get_the_date() ),

		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),

		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),

		get_the_author()

	);

	}
}

// REMOVE TWENTY ELEVEN DEFAULT HEADER IMAGES
function wptips_remove_header_images() {
    unregister_default_headers( array('wheel','trolley','willow','hanoi','shore','lanterns','chessboard','pine-cone')
    );
	//'wheel','shore','trolley','pine-cone','chessboard','lanterns','willow','hanoi'
}
add_action( 'after_setup_theme', 'wptips_remove_header_images', 11 );// 源代码//function add_my_script() {//    wp_register_script('my_script', home_url() . '/wp-content/themes/mythemename/js/my_script.js', array( 'jquery' ));//    wp_enqueue_script('my_script');//}  //add_action( 'wp_enqueue_scripts', 'add_my_script' );//添加浮动的menu bar的js文件/*function add_my_script() {    wp_register_script('my_stickymenu', get_stylesheet_directory_uri() . '/js/my_stickymenu.js', array( 'jquery' ), '1.0');	// 在 child theme 里面要用 get_stylesheet_directory_uri(), 在template里面用get_template_directory_uri()     wp_enqueue_script('my_stickymenu');}  add_action( 'wp_enqueue_scripts', 'add_my_script' ); *//*add_action( 'wp_enqueue_scripts', 'enqueue_jquery_pin' );function enqueue_jquery_pin() {    wp_deregister_script( 'jquery' );    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');	wp_enqueue_script('jquery');		wp_enqueue_script( 'jquery-pin',  get_stylesheet_directory_uri() . '/js/jquery.pin.js', array( 'jquery' ), '1.0.0', true );	wp_enqueue_script( 'jquery-pin-init',  get_stylesheet_directory_uri() . '/js/jquery.pin.init.js', array( 'jquery-pin' ), '1.0.0', true ); } */function my_scripts_method() {    wp_deregister_script( 'jquery' );    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');	wp_enqueue_script('jquery');	//	wp_enqueue_script( 'my_sticky_navbar', get_stylesheet_directory_uri() . '/js/my_sticky_navbar.js', array('jquery'));	 }     add_action('wp_enqueue_scripts', 'my_scripts_method');


function my_scripts_method() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'my_sticky_navbar', get_stylesheet_directory_uri() . '/js/my_sticky_navbar.js', array('jquery'));

}

add_action('wp_enqueue_scripts', 'my_scripts_method');

?>
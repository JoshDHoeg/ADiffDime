<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('animation', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), '1.0.0', 'all');
	wp_enqueue_style('index', get_template_directory_uri() . '/css/index.css', array(), '1.0.0', 'all');
	wp_enqueue_style('interview', get_template_directory_uri() . '/css/interview.css', array(), '1.0.0', 'all');
	wp_enqueue_style('booklet', get_template_directory_uri() . '/css/booklet.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
	wp_enqueue_script('box-transition', get_template_directory_uri() . '/js/box-transition.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('Content', 'Content Header Navigation');
	register_nav_menu('Shop', 'Shop Header Navigation');
	register_nav_menu('Services', 'Services Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'awesome_theme_setup');


function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Custom Header Widget Area',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );


/*
	==========================================
	 Theme support function
	==========================================
*/

/*logo this is the custom logo that you can edit in the wordpress backend*/
/*the atttributes are customizable and self explanitory*/
function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 150,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );



add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));


/* ------- question start Shortcode --------*/
function question_shortcode() {
return '<div class="interview_question interview_box zoomInRight wow animated">';
}
add_shortcode( 'q_start', 'question_shortcode' );

/* ------- question end Shortcode --------*/
function question_end_shortcode() {
return '</div>';
}
add_shortcode( 'q_end', 'question_end_shortcode' );

/* ------- answer start Shortcode --------*/
function answer_shortcode() {
return '<div class="interview_answer interview_box zoomInLeft wow animated">';
}
add_shortcode( 'a_start', 'answer_shortcode' );

/* ------- answer end Shortcode --------*/
function answer_end_shortcode() {
return '</div><br/>';
}
add_shortcode( 'a_end', 'answer_end_shortcode' );



function box_page_break_shortcode( $atts ){
	$a = shortcode_atts( array(
	        'foo' => '0',
	        'bar' => 'something else',
	    ), $atts );

	    return "</div><div class='detail_footer'><button type='button' class='close-btn' onclick='window.location.href='/''>Close</button></div></div></section><section class='right-side' id='{$a['foo']}'><div class='container col-xs-12 detail_wrapper shadow zoomIn wow animated'><a  class='exitbtn right' href='/'><div class='close-btn'></div><div class='close-btn'></div></a><div class='detail_content'>";
	// return '</section><section id="" class="right-side">';
}
add_shortcode('box_page','box_page_break_shortcode');

/* ------- Line Break Shortcode --------*/
function line_break_shortcode() {
return '<br />';
}

add_shortcode( 'br', 'line_break_shortcode' );

<?php
function enqueue_styles_child_theme() {

	$parent_style = 'master-template-woo-style';
	$child_style  = 'master-template-woo-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
                );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', '4.1' );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '4.2', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

// Shortcode Slider
function slider_func() {
    $string = '<div class="container">';
    $string .= '<div class="owl-carousel owl-slider">';

    $string .= '<div class="item">';
    $string .= '<p>Hola 01</p>';
    $string .= '</div>';

    $string .= '<div class="item">';
    $string .= '<p>Hola 02</p>';
    $string .= '</div>';

    $string .= '<div class="item">';
    $string .= '<p>Hola 03</p>';
    $string .= '</div>';

    $string .= '</div>';
    $string .= '</div>';
    return $string;
}
add_shortcode( 'slidertext', 'slider_func' );
<?php
add_action('wp_enqueue_scripts', function () {
	// CSS Import
	wp_enqueue_style('main', get_template_directory_uri() . 'style.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('baguette', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('classic', get_template_directory_uri() . '/assets/css/classic.css');
	wp_enqueue_style('classic', get_template_directory_uri() . '/assets/css/classic.date.css');
	wp_enqueue_style('classic', get_template_directory_uri() . '/assets/css/classic.time.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('superslides', get_template_directory_uri() . '/assets/css/superslide.css');


	//JS Import
	wp_enqueue_script('baguette', get_template_directory_uri() . '/assets/js/baguetteBox.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/js/contact-form-script.js');
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js');
	wp_enqueue_script('form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js');
	wp_enqueue_script('loded', get_template_directory_uri() . '/assets/js/image-loded.min.js');
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js');
	wp_enqueue_script('jquery-map', get_template_directory_uri() . '/assets/js/jquery.mapify.js');
	wp_enqueue_script('jquery-superslides', get_template_directory_uri() . '/assets/js/jquery.superslides.min.js');
	wp_enqueue_script('legacy', get_template_directory_uri() . '/assets/js/legacy.js');
	wp_enqueue_script('picker-date', get_template_directory_uri() . '/assets/js/picker.date.js');
	wp_enqueue_script('picker', get_template_directory_uri() . '/assets/js/picker.js');
	wp_enqueue_script('picker-time', get_template_directory_uri() . '/assets/js/picker.time.js');
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js');
	
});
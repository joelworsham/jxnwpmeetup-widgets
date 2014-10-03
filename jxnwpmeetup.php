<?php

/*
 * Plugin Name: Jaxon WP Meetup Widgets
 * Description: Show some peeps what these WP widgets are all about!
 * Author: Joel Worsham
 * Author URI: http://joelworsham.cStepom
 * Version: 1.0.0
 */

// Include our widget class file
include_once( 'inc/class-jxnwpmeetupwidget.php' );

// Include the back-end media uploader!
include_once( 'inc/backend-media-uploader/backend-media-uploader.php' );

// Hook our function into the "widget_init" action
add_action( 'widgets_init', 'add_widgets' );

/**
 * Registers all of our widgets
 */
function add_widgets() {

	// This is the CLASS NAME of our new widget (which is in /inc/class-jxnwpmeetupwidget.php). It must match exactly.
	// This is not the widget name, not the widget ID, it is the class name of our custom widget. Make sure it matches.
	// Oh, and make sure it matches!
	register_widget( 'JxnWPMeetupWidget' );
}
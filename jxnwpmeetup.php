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

// Hook our function into the "widget_init" action
add_action( 'widgets_init', 'add_widgets' );

/**
 * Registers all of our widgets
 */
function add_widgets() {

	register_widget( 'JxnWPMeetupWidget' );
}
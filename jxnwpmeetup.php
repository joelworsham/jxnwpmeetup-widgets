<?php
/*
 * Plugin Name: Jaxon WP Meetup Widgets
 * Description: Show some peeps what these WP widgets are all about!
 * Author: Joel Worsham
 * Author URI: http://joelworsham.com
 * Version: 1.0.0
 */

class JxnWPMeetup {

	public function __construct() {

		include_once( 'inc/class-jxnwpmeetupwidget.php' );

		add_action( 'widgets_init', array( $this, 'add_widgets' ) );
	}

	public function add_widgets() {

		register_widget( 'JxnWPMeetupWidget' );
	}
}

new JxnWPMeetup();
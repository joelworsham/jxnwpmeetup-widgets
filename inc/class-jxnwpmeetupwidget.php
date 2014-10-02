<?php

/**
 * Class JxnWPMeetupWidget.
 *
 * An awesome class that creates an incredible widget for use on the WordPress widgets page.
 */
class JxnWPMeetupWidget extends WP_Widget {

	/**
	 * The main construct function. Launches on instantiation.
	 */
	public function __construct() {

		// Construct this widget based off of the parent
		parent::__construct(
			'jxnwpmeetup_widget',
			__( 'Jaxon WP Meetup Widget', 'jxnwpmeetup_textdomain' ),
			array(
				'description' => __( 'This widget will change your life', 'jxnwpmeetup_textdomain' ),
			)
		);
	}

	/**
	 * Fires when displaying the widget on the front-end.
	 *
	 * @param array $args The current widget args.
	 * @param array $instance The current widget instance.
	 */
	public function widget( $args, $instance ) {

	}

	/**
	 * Fires on the backend, inside of the widget. Used for customizing the current widget's options.
	 *
	 * @param array $instance The current widget instance.
	 *
	 * @return string|void Generally nothing.
	 */
	public function form( $instance ) {

	}

	/**
	 * Fires when hitting the save button. Used to sanitize widget options on save.
	 *
	 * @param array $new_instance The post-updated instance.
	 * @param array $old_instance The pre-updated instance.
	 *
	 * @return array The new, sanitized instance.
	 */
	public function update( $new_instance, $old_instance ) {

	}
}

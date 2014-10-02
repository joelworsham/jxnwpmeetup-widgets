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

		// Echo out anything before the widget
		echo $args['before_widget'];

		// Echo out the title (if it's set)
		if ( ! empty( $instance['title'] ) ) {

			echo $args['before_title'];
			echo apply_filters( 'widget_title', $instance['title'] );
			echo $args['after_title'];
		}

		// Get other options
		$checkbox  = isset( $instance['checkbox'] ) ? true : false;

		// Echo out the other options

		// Static text
		echo '<p>Hello!</p>';

		// The checkbox
		echo '<p>' . ( $checkbox ? 'The checkbox is checked!' : 'The checkbox is not checked!' ) . '</p>';

		// Echo out anything after the widget
		echo $args['after_widget'];
	}

	/**
	 * Fires on the backend, inside of the widget. Used for customizing the current widget's options.
	 *
	 * @param array $instance The current widget instance.
	 *
	 * @return string|void Generally nothing.
	 */
	public function form( $instance ) {

		// Get options
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$checkbox  = isset( $instance['checkbox'] ) ? 'checked' : '';

		// Output the HTML
		?>
		<!-- The widget title -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" class="widefat"
			       id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>"/>
		</p>

		<!-- A checkbox -->
		<p>
			<label for="<?php echo $this->get_field_id( 'checkbox' ); ?>">Checkbox</label>
			<input type="checkbox" name="<?php echo $this->get_field_name( 'checkbox' ); ?>"
			       id="<?php echo $this->get_field_id( 'checkbox' ); ?>" value="1" <?php echo $checkbox; ?> />
		</p>
	<?php
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

		// Get our new options and sanitize them as needed
		$instance              = array();
		$instance['title']     = ! empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : null;
		// Don't need to save checkbox. If it doesn't exist, it should be erased anyways!

		// Return our sanitized options
		return $instance;
	}
}

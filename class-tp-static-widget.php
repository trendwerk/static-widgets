<?php
/**
 * Plugin Name: Static widgets
 * Description: Allow widgets to be called statically in templates.
 *
 * Plugin URI: https://github.com/trendwerk/static-widgets
 * 
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 * 
 * Version: 1.0.0
 */

/**
 * Call a widget statically
 * 
 * @param string $class The class name of the widget
 */

class TP_Static_Widget {
	function __construct( $class, $args = array(), $instance = array() ) {
		if( ! class_exists( $class ) )
			return;

		$widget = new $class;

		$defaults = array(
			'before_widget' => '<div class="widget ' . $widget->widget_options['classname'] . '">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		);
		$args = wp_parse_args( $args, $defaults );

		$widget->widget( $args, $instance );
	}
}

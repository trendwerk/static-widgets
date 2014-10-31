Static widgets
==============

Allow widgets to be called statically in templates. Made for WordPress.

### API

```
new TP_Static_Widget( $class, $args = array(), $instance = array() );
```

**$class**
The PHP class of the widget.

**$args**
Additional arguments, see defaults below.

**$instance**
Optional widget settings.

### Example

```
new TP_Static_Widget( 'WP_Widget_Categories' );
```

### Defaults

```
$defaults = array(
	'before_widget' => '<div class="widget ' . $widget->widget_options['classname'] . '">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
);
```

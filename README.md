Static widgets
==============

Allow widgets to be called statically in templates. Made for WordPress.

### Installation
If you're using Composer to manage WordPress, add this plugin to your project's dependencies. Run:
```sh
composer require trendwerk/static-widgets 1.0.0
```

Or manually add it to your `composer.json`:
```json
"require": {
	"trendwerk/static-widgets": "1.0.0"
},
```

### API

```php
new TP_Static_Widget( $class, $args = array(), $instance = array() );
```

**$class**
The PHP class of the widget.

**$args**
Additional arguments, see defaults below.

**$instance**
Optional widget settings.

### Example

```php
new TP_Static_Widget( 'WP_Widget_Categories' );
```

### Defaults

```php
$defaults = array(
	'before_widget' => '<div class="widget ' . $widget->widget_options['classname'] . '">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
);
```

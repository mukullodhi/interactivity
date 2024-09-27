<?php

wp_interactivity_state(
	'create-block',
	array(
		'counter' => 0,
	)
);

$atts = array(
	'name'          => 'Nagpur',
	'isClosed'      => true,
	'isHighlighted' => true,
	'fruits'        => array(
		'Oranges',
		'apple',
		'banana',
	),
)


?>

<div data-wp-interactive="create-block" <?php echo wp_interactivity_data_wp_context( $atts ); ?>>
	Hello
	<strong data-wp-text="context.name"></strong>

	<div>
		<button data-wp-on--click="actions.toggle">Click me</button>
		<div data-wp-bind--hidden="context.isClosed" >You clicked!</div>
	</div>

	<div>
		<button data-wp-on--click="actions.highlight">Click me to highlight</button>
		<div data-wp-class--highlight="context.isHighlighted" >Text that toggles the background color</div>
	</div>

	<ul>
		<template data-wp-each="context.fruits">
			<li data-wp-text="context.item"></li>
		</template>
	</ul>

	<button data-wp-on--click="actions.updateCounter">Update counter</button>

</div>

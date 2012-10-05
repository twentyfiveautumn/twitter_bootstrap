<?php
/**
 * twitter_bootstrap plugin settings
 */

// set default value
if (!isset($vars['entity']->display_header)) {
	$vars['entity']->display_header = 'no';
}

echo '<div>';
echo elgg_echo('twitter_bootstrap:displayheaderlogo');
echo ' ';
echo elgg_view('input/select', array(
	'name' => 'params[display_header_logo]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->display_header_logo,
));
echo '</div>';
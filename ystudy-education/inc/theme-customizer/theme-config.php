<?php


Kirki::add_config('my_theme_config', array(
	'capability' => 'edit_theme_options',
	'option_type' => 'theme_mod',
));

new \Kirki\Panel(
	'ystudy_education_panel_id',
	[
		'priority'    => 1,
		'title'       => esc_html__('Theme Options', 'ystudy-education'),
		'description' => esc_html__('Theme Settings.', 'ystudy-education'),
	]
);

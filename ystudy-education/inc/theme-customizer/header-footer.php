<?php

new \Kirki\Section(
	'ystudy_education_header',
	[
		'title'       => esc_html__('Header Settings', 'ystudy-education'),
		'description' => esc_html__('Customize Header Options.', 'ystudy-education'),
		'panel'       => 'ystudy_education_panel_id',
		'priority'    => 160,
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'show_header_search',
		'label'       => esc_html__('Show Header Search?', 'ystudy-education'),
		'section'     => 'ystudy_education_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__('Enable', 'ystudy-education'),
			'off' => esc_html__('Disable', 'ystudy-education'),
		],
		'priority' => 3,
	]
);



new \Kirki\Section(
	'ystudy_education_footer',
	[
		'title'       => esc_html__( 'Footer Settings', 'ystudy-education' ),
		'description' => esc_html__( 'Customize Footer Options.', 'ystudy-education' ),
		'panel'       => 'ystudy_education_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'ystudy_education_pages',
		'label'    => esc_html__( 'Footer Page List', 'ystudy-education' ),
		'section'  => 'ystudy_education_footer',
		'priority' => 2,
		'default'  => [
			[
				'link_text'   => esc_html__( 'About Us', 'ystudy-education' ),
				'link_url'    => '#',
				'link_target' => '_self',
				'checkbox'    => false,
			],
		],
		'fields'   => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link Text', 'ystudy-education' ),
				'description' => esc_html__( 'Description', 'ystudy-education' ),
				'default'     => '',
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL', 'ystudy-education' ),
				'description' => esc_html__( 'Description', 'ystudy-education' ),
				'default'     => '',
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'ystudy-education' ),
				'description' => esc_html__( 'Description', 'ystudy-education' ),
				'default'     => '_self',
				'choices'     => [
					'_blank' => esc_html__( 'New Window', 'ystudy-education' ),
					'_self'  => esc_html__( 'Same Frame', 'ystudy-education' ),
				],
			],
		],
	]
);

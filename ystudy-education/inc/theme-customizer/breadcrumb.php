<?php

/* BreadCrumbs */
new \Kirki\Section(
	'ystudy_education_page_breadcrumb',
	[
		'title'       => esc_html__( 'Breadcrumbs', 'ystudy-education' ),
		'description' => esc_html__( 'Breadcrumbs Settings.', 'ystudy-education' ),
		'panel'       => 'ystudy_education_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'ystudy_education_page_bc',
		'label'       => esc_html__( 'Enable page breadcrumb', 'ystudy-education' ),
		'section'     => 'ystudy_education_page_breadcrumb',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'ystudy_education_archive_bc',
		'label'       => esc_html__( 'Enable Archive breadcrumb', 'ystudy-education' ),
		'section'     => 'ystudy_education_page_breadcrumb',
		'default'     => true,
	]
);

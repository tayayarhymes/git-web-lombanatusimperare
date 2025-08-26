<?php

new \Kirki\Section(
	'ystudy_education_theme',
	[
		'title'       => esc_html__('Theme Settings', 'ystudy-education'),
		'description' => esc_html__('Customize Global Options.', 'ystudy-education'),
		'panel'       => 'ystudy_education_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Color(
    [
        'settings'    => 'ystudy_education_primary_color',
        'label'       => esc_html__('Primary Color', 'ystudy-education'),
        'section'     => 'ystudy_education_theme',
        'default'     => '#890c25', // Default color
        'priority'    => 1,
        'transport'   => 'auto',
        'choices'     => [
            'alpha' => true, // Allow opacity adjustments if needed
        ],
        'output'      => [
            [
                'element'  => ':root', // Use :root to define a CSS variable
                'property' => '--ystudy-education-primary', // Set CSS variable
                'value'    => 'color', // This will allow the color to be applied from the input
            ],
            [
                'element'  => '.ystudy-education-primary', // Target specific elements
                'property' => 'color',
            ],
        ],
    ]
);

new \Kirki\Field\Custom(
    [
        'settings' => 'separator',
        'section'  => 'ystudy_education_theme',
        'default'  => '<hr />', // HTML code for the horizontal line
        'priority' => 3.5, // Adjust priority to position the line between color and typography
    ]
);


// Add a color picker for heading colors
new \Kirki\Field\Color(
    [
        'settings'    => 'ystudy_education_secondary_color',
        'label'       => esc_html__('Secondary Color', 'ystudy-education'),
        'section'     => 'ystudy_education_theme',
        'default'     => '#150005', // Default heading color
        'priority'    => 2,
        'transport'   => 'auto',
        'output'      => [
            [
                'element'  => ':root', // Use :root to define a CSS variable
                'property' => '--ystudy-education-secondary', // Set CSS variable
                'value'    => 'color', // This will allow the color to be applied from the input
            ],
            [
                'element'  => '.ystudy-education-secondary', // Target specific elements
                'property' => 'color',
            ],
        ],
    ]
);

// Add a color picker for heading colors
new \Kirki\Field\Color(
    [
        'settings'    => 'ystudy_education_heading_color',
        'label'       => esc_html__('Heading Color', 'ystudy-education'),
        'section'     => 'ystudy_education_theme',
        'default'     => '#00001b', // Default heading color
        'priority'    => 2,
        'transport'   => 'auto',
        'output'      => [
            [
                'element'  => 'body, h1, h2, h3, h4, h5, h6', // Target all heading elements
                'property' => 'color',
            ],
            [
                'element'  => ':root', // Use :root to define a CSS variable
                'property' => '--ystudy-education-heading', // Set CSS variable
                'value'    => 'color', // This will allow the color to be applied from the input
            ],
        ],
    ]
);

// Add a color picker for paragraph color
new \Kirki\Field\Color(
    [
        'settings'    => 'ystudy_education_paragraph_color',
        'label'       => esc_html__('Paragraph Color', 'ystudy-education'),
        'section'     => 'ystudy_education_theme',
        'default'     => '#00001b', // Default paragraph color
        'priority'    => 3,
        'transport'   => 'auto',
        'output'      => [
            [
                'element'  => 'body p,body .ystudy-education-blog-single p,.blog-article-info p', // Target paragraph elements
                'property' => 'color', // Add !important to the property
            ],
        ],
    ]
);



new \Kirki\Field\Typography(
	[
		'settings'    => 'ystudy_education_typography',
		'label'       => esc_html__('Theme Typography', 'ystudy-education'),
		'section'     => 'ystudy_education_theme',
		'default'     => [
			'font-family'    => 'Poppins',
			'variant'        => '400',
			'font-size'      => '16px',
			'line-height'    => '28px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
		],
		'priority'    => 4, // Adjust priority as needed
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body', // You can target other elements as well
			],
		],
	]
);


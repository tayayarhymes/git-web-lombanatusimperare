<?php
/* Pro Version Section */
new \Kirki\Section(
    'ystudy_education_pro_version',
    [
        'title'       => esc_html__( 'Upgrade To Pro Version', 'ystudy-education' ),
        'description' => esc_html__( 'Unlock premium features by upgrading to the Pro version.', 'ystudy-education' ),
        'panel'       => 'ystudy_education_panel_id',
        'priority'    => 160,
    ]
);

/* Custom Pro Promo Text and Button */
new \Kirki\Field\Custom(
    [
        'settings' => 'ystudy_education_pro_promo',
        'section'  => 'ystudy_education_pro_version',
        'priority' => 10,
        'default'  => '
            <div style="margin-top:15px; font-size:15px; line-height:1.6;">
                <p><strong>' . esc_html__( 'Want more customization options and premium templates?', 'ystudy-education' ) . '</strong></p>
                <p>' . esc_html__( 'Upgrade to Educve Pro and unlock full LMS features, woocommerce ready, premium demo import, advanced controls, and more!', 'ystudy-education' ) . '</p>
                <a href="https://yetiwp.com/product/educve-pro/" target="_blank" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#0073aa; color:#fff; text-decoration:none; border-radius:3px;">' . esc_html__( 'Buy Educve Pro 🚀', 'ystudy-education' ) . '</a>
            </div>
        ',
    ]
);

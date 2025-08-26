<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package YStudy Education
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ystudy_education_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1') && ! is_active_sidebar('sidebar-2')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'ystudy_education_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ystudy_education_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'ystudy_education_pingback_header');


function ystudy_education_search_form( $form ) {
    $form = '
    <form action="' . esc_url( home_url( '/' ) ) . '" method="get" class="td_header_search">
        <input type="text" class="td_header_search_input" value="' . esc_attr( get_search_query() ) . '" name="s" id="search" placeholder="' . esc_attr__( 'Search For Anything', 'ystudy-education' ) . '">
        <button class="td_header_search_btn td_center" type="submit">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M16.4716 17.5303C16.7645 17.8232 17.2394 17.8232 17.5323 17.5303C17.8252 17.2374 17.8252 16.7626 17.5323 16.4697L16.4716 17.5303ZM13.2716 14.3303L16.4716 17.5303L17.5323 16.4697L14.3323 13.2697L13.2716 14.3303ZM16.152 8.2C16.152 3.80934 12.5926 0.25 8.20195 0.25V1.75C11.7642 1.75 14.652 4.63776 14.652 8.2H16.152ZM8.20195 0.25C3.81129 0.25 0.251953 3.80934 0.251953 8.2H1.75195C1.75195 4.63776 4.63972 1.75 8.20195 1.75V0.25ZM0.251953 8.2C0.251953 12.5907 3.81129 16.15 8.20195 16.15V14.65C4.63972 14.65 1.75195 11.7622 1.75195 8.2H0.251953ZM8.20195 16.15C12.5926 16.15 16.152 12.5907 16.152 8.2H14.652C14.652 11.7622 11.7642 14.65 8.20195 14.65V16.15Z" fill="#00001B"/>
            </svg>
        </button>
    </form>
    ';
    return $form;
}
add_filter( 'get_search_form', 'ystudy_education_search_form' );

// Dashboard Notice for Educve Education Theme
function educve_education_display_dashboard_notice() {
    ?>
    <div class="notice notice-info is-dismissible" style="font-size:16px; padding:25px;">
        <strong>
            <?php 
            printf( esc_html__( 'Hey %s 👋 You’re using the free version of Educve!', 'ystudy-education' ), esc_html( get_bloginfo( 'name' ) ) ); 
            ?>
        </strong>
        <h3 style="margin:15px 0 10px;">
           <?php esc_html_e( 'Upgrade to the Educve Pro theme 🚀 and unlock all the features of your educational website.', 'ystudy-education' ); ?>
        </h3>
        <p style="font-size:16px; margin:0 0 10px;">
            <?php esc_html_e( 'Get access to 8 premium homepages, a complete LMS system, WooCommerce integration, one-click demo import, advanced customization options, and everything you need to build a professional educational or eLearning platform.', 'ystudy-education' ); ?>
        </p>
        <p style="font-size:16px; color: #ef644c; font-weight: bold;">
            <?php esc_html_e( 'Ideal for schools, colleges, universities, and online learning websites — Launch your website in a click!', 'ystudy-education' ); ?>
        </p>
        <p style="margin:0;">
            <a href="<?php echo esc_url( 'https://yetiwp.com/product/educve-pro/' ); ?>" class="button button-primary" style="padding:4px 18px; font-size:15px;" target="_blank">
                <?php esc_html_e( 'Buy Educve Pro', 'ystudy-education' ); ?>
            </a>
            <a href="<?php echo esc_url( 'https://educve-pro.yetiwp.com/' ); ?>" class="button button-secondary" style="padding:4px 18px; font-size:15px;" target="_blank">
                <?php esc_html_e( 'View Pro Demo', 'ystudy-education' ); ?>
            </a>
            <a href="<?php echo esc_url( 'https://yetiwp.com/themedoc/ystudy-education/' ); ?>" class="button button-secondary" style="padding:4px 18px; font-size:15px;" target="_blank">
                <?php esc_html_e( 'Free Version Setup Guide', 'ystudy-education' ); ?>
            </a>
        </p>
    </div>
    <?php
}
add_action( 'admin_notices', 'educve_education_display_dashboard_notice' );

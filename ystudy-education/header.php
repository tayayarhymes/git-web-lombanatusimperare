<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YStudy Education
 */

$show_header_search = get_theme_mod('show_header_search', 'on');
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ystudy-education'); ?></a>

		<div class="top-header">
    		<div class="container">
        		<ul class="top-menu">
            		<li><a href="https://www.google.com/maps/search/University+of+Cambridge+campuses/@52.205356,0.1036408,16z?entry=ttu&g_ep=EgoyMDI1MDgyNC4wIKXMDSoASAFQAw%3D%3D">Lokasi</a></li>
            		<li><a href="https://www.instagram.com/cambridgeuniversity/?hl=en">Kontak</a></li>
            		<li><a href="https://natusimperare.my.id/#sponsor">Sponsor</a></li>
            		<li><a href="https://natusimperare.my.id/?page_id=1308&preview=true">Sejarah</a></li>
            		<li><a href="https://natusimperare.my.id/wakaf/">Wakaf</a></li>
        		</ul>
    		</div>
		</div>

		<header class="ystudy-education-header site-header">
			<?php if (get_header_image()) : ?>
				<div class="header-image">
					<img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>">
				</div>
			<?php endif; ?>
			<div class="container">
				<div class="d-none d-lg-block">
					<div class="row align-items-center justify-between">
						<div class="col-lg-3">
							<div class="ystudy-education-logo site-branding">
								<?php if (function_exists('the_custom_logo')) {
									the_custom_logo();
								} ?>
									<div class="normal-text">
										<a class="site-title" href="<?php echo esc_url(home_url('/')); ?>">
										<?php echo esc_html(get_bloginfo('name')); ?>
										</a>
										<?php $ystudy_education_title_description = get_bloginfo('description', 'display'); ?>
										<p class="site-description"><?php echo esc_html($ystudy_education_title_description); ?></p>
									</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="ystudy-education-header__main-inside">
								<nav class="ystudy-education-header__nav">
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'        => 'main-menu',
									));
									?>
								</nav>

								<div class="header-button">
									<?php if (true == get_theme_mod('show_header_search', 'on')) : ?>
										<a href="javascript:void(0)" class="td_circle_btn">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.8" d="M16.4716 17.5303C16.7645 17.8232 17.2394 17.8232 17.5323 17.5303C17.8252 17.2374 17.8252 16.7626 17.5323 16.4697L16.4716 17.5303ZM13.2716 14.3303L16.4716 17.5303L17.5323 16.4697L14.3323 13.2697L13.2716 14.3303ZM16.152 8.2C16.152 3.80934 12.5926 0.25 8.20195 0.25V1.75C11.7642 1.75 14.652 4.63776 14.652 8.2H16.152ZM8.20195 0.25C3.81129 0.25 0.251953 3.80934 0.251953 8.2H1.75195C1.75195 4.63776 4.63972 1.75 8.20195 1.75V0.25ZM0.251953 8.2C0.251953 12.5907 3.81129 16.15 8.20195 16.15V14.65C4.63972 14.65 1.75195 11.7622 1.75195 8.2H0.251953ZM8.20195 16.15C12.5926 16.15 16.152 12.5907 16.152 8.2H14.652C14.652 11.7622 11.7642 14.65 8.20195 14.65V16.15Z" fill="#00001B"></path>
											</svg>
										</a>
										<div class="td_header_search_wrap">
											<?php get_search_form(); ?>
										</div>
									<?php endif; ?>
								</div>	
								
							</div>
										
						</div>
					</div>
				</div>

				<nav class="mobile-menu d-block d-lg-none">
					<div class="mobile-header">
						<div class="header-logo ystudy-education-logo">
							<?php if (function_exists('the_custom_logo') && has_custom_logo()) {
								the_custom_logo();
							} else { ?>
								<div class="normal-text">
									<a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
									<?php $ystudy_education_title_description = get_bloginfo('description', 'display'); ?>
									<p class="site-description"><?php echo esc_html($ystudy_education_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?></p>
								</div>
							<?php } ?>
						</div>
						<button
							type="button"
							class="header__hamburger-2 d-lg-none offcanvas-open-btn"
							data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasWithBothOptions"
							aria-controls="offcanvasWithBothOptions">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>

					<div class="mobile-menu-popup offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
						<div class="offcanvas-header">
							<h3><?php esc_html_e('Mobile Menu', 'ystudy-education');?></h3>
							<button class="offcanvas__close-btn offcanvas-close-btn" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e('Close', 'ystudy-education'); ?>">
								<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="mobile-menu-section">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'mobile-menu',
									'menu_class'        => 'menu-list',
								));
								?>
							</div>
						</div>
					</div>
				</nav>
			</div>

		</header>

		<div id="primary" class="ystudy-education-section-main">
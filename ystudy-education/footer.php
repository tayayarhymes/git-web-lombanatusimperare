<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YStudy Education
 */

// Default values for repeater_setting theme mod.
$defaults = [
	[
		'link_text' => esc_html__('About Us', 'ystudy-education'),
		'link_url' => '#',
		'link_target' => '_self',
	],
];
// Retrieve the repeater field settings
$ystudy_education_pages = get_theme_mod('ystudy_education_pages', $defaults);

?>
</div>

<footer class="ystudy-footer">
	<div class="container">
		<?php if (is_active_sidebar('ystudy-education-footer-1')) : ?>
		<div class="ystudy-footer-main">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<?php dynamic_sidebar('ystudy-education-footer-1'); ?>
				</div>

				<?php if (is_active_sidebar('ystudy-education-footer-2')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('ystudy-education-footer-2'); ?>
					</div>
				<?php endif; ?>
				
				<?php if (is_active_sidebar('ystudy-education-footer-3')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('ystudy-education-footer-3'); ?>
					</div>
				<?php endif; ?>
				
				<?php if (is_active_sidebar('ystudy-education-footer-4')) : ?>
					<div class="col-lg-3 col-md-6 col-12">
						<?php dynamic_sidebar('ystudy-education-footer-4'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<div class="ystudy-footer-copyright">
		<div class="container">
			<div class="row gy-2">
				<div class="col-md-6">
					<div class="copyright-text">
					<p class="copyright-detail">
						<?php 
						esc_html_e('&copy;', 'ystudy-education'); 
						?> 
						<?php echo esc_html(date_i18n(__('Y', 'ystudy-education'))); ?>
						<a class="ystudy-education-footer__url" href="<?php echo esc_url(home_url('/')); ?>">
							<?php echo esc_html(get_bloginfo('name')); ?>
						</a> .
					
						<?php esc_html_e('Theme Provided By', 'Athaya Cahya Subangga'); ?> 
						<a href="<?php echo esc_url('https://youtube.com/@ujangacengs?si=2bbFSrds73TUF75Z'); ?>" target="_blank" rel="noopener noreferrer">
							<?php esc_html_e('Athaya Cahya (ujangacengs)', 'ystudy-education'); ?>
						</a>
					</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copyright-list">
						<ul class="footer-menu-list">
							<?php foreach ($ystudy_education_pages as $ystudy_education_page) : ?>
								<li><a href="<?php echo esc_url($ystudy_education_page['link_url']); ?>" target="<?php echo esc_attr($ystudy_education_page['link_target']); ?>"><?php echo esc_html($ystudy_education_page['link_text']); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- End Page -->

<?php wp_footer(); ?>

</body>

</html>
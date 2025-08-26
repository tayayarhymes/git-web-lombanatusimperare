<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package YStudy Education
 */

get_header();
?>

<section class="breadcrumb ystudy-bg-cover breadcrumb__single">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="breadcrumb__info">
					<div class="row">
						<div class="col-12">
							<h2><?php the_title(); ?></h2>
							<ul>
								<li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','ystudy-education');?></a></li>
								<li><?php the_title(); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ystudy-education-blog-single">
	<div class="container">
		<div class="row">
			<div class="<?php if (is_active_sidebar('sidebar')) : ?> col-lg-8 col-md-8 <?php else : ?> col-12 <?php endif; ?>">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('theme-parts/content', 'single');

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ystudy-education') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ystudy-education') . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
			<?php if (is_active_sidebar('sidebar')) : ?>
				<div class="col-lg-4 col-md-4 col-12 ystudy-education-main-area__sidebar">
					<div class="ystudy-education-sidebar ystudy-education-sidebar__single">
						<aside id="ystudy-education-secondary-sidebar" class="widget-area">
							<?php dynamic_sidebar('sidebar'); ?>
						</aside>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();

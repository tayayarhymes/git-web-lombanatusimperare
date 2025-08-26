<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package YStudy Education
 */

get_header();

?>

	<section class="breadcrumb ystudy-bg-cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="breadcrumb__info">
						<h2>
                            <?php if ( have_posts() ) : ?>
                                <?php printf( esc_html__( 'Search Results for: %s', 'ystudy-education' ), get_search_query() ); ?>
                            <?php else : ?>
                                <?php esc_html_e( 'Nothing Found', 'ystudy-education' ); ?>
                            <?php endif; ?>
                        </h2>
                        <?php if (! have_posts() ) : ?>
                        <p class="ystudy-breadcrumb__text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ystudy-education' ); ?></p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="ystudy-education-search-page search-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
					<div class="row ystudy-education-masonry">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part('theme-parts/content', 'search');

						endwhile;
						?>
					</div>
				<?php else : ?>
					<?php get_template_part('theme-parts/content', 'none'); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="pagination-main">
					<?php if (function_exists("ystudy_education_pagination")) {
						ystudy_education_pagination();
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

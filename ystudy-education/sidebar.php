<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YStudy Education
 */

if (! is_active_sidebar('sidebar')) {
	return;
}
?>

<aside id="ystudy-education-primary-sidebar" class="widget-area">
	<?php dynamic_sidebar('sidebar'); ?>
</aside>
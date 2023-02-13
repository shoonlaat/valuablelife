<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vlife
 */

get_header();

?>
<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb js-top clearfix">
	<?php the_breadcrumb(); ?>
</div>

<div class="content">
	<h2><?php the_title(); ?></h2>
	<?php
	while (have_posts()) : the_post();
		the_content('');
	endwhile;
	?>
</div>
<!-- ./ single-page -->


<?php
get_footer();

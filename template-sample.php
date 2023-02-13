<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */
/*
 Template Name:sample-template
 */
get_header();
?>
<div class="content js-top about-page">
	<div class="inner">
		<div class="page-ttl">
			<span class="eng-ttl"><?php the_field('eng_title'); ?></span>
			<span class="jp-ttl"><?php the_field('jp_title'); ?></span>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Text Area</h3>
			<?php the_field('text_area'); ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Range</h3>
			<p>Searching for houses within a <?php the_field('range'); ?>km radius.</p>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Number</h3>
			<p><?php the_field('number'); ?></p>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Email</h3>
			<p><?php the_field('email'); ?></p>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">URL</h3>
			<a href="<?php the_field('url'); ?>">Go to w3school.</a>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Password</h3>
			<p><?php the_field('password'); ?></p>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Image URL</h3>
			<p><?php if (get_field('image')) : ?>
					<img src="<?php the_field('image'); ?>" />
				<?php endif; ?>
			</p>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Image Array</h3>
			<?php
			$image = get_field('imagearray');
			if (!empty($image)) : ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Image ID</h3>
			<?php
			$image = get_field('imageid');
			$size = 'large'; // (thumbnail, medium, large, full or custom size)
			if ($image) {
				echo wp_get_attachment_image($image, $size);
			}
			?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">File Array</h3>
			<?php
			$file = get_field('filearray');
			if ($file) : ?>
				<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
			<?php endif; ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">File ID</h3>
			<?php
			$file = get_field('fileid');
			if ($file) :
				$url = wp_get_attachment_url($file); ?>
				<a href="<?php echo esc_html($url); ?>">Download File</a>
			<?php endif; ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">File URL</h3>
			<?php if (get_field('fileurl')) : ?>
				<a href="<?php the_field('fileurl'); ?>">Download File</a>
			<?php endif; ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">oembed</h3>
			<div class="embed-container">
				<?php the_field('oembed'); ?>
			</div>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Select Value</h3>
			<?php
			$colors = get_field('select');

			// Create a comma-separated list from selected values.
			if ($colors) : ?>
				<p>Color: <?php echo implode(', ', $colors); ?></p>
			<?php endif; ?>
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Select Label</h3>
							<?php
				$field = get_field_object( 'selectlabel' );
				$value = $field['value'];
				$label = $field['choices'][ $value ];
				?>
				<p>Color: <span class="color-<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></span></p>
		
		</div>
		<div class="sample-blk">
			<h3 class="ttl">Checkbox Value</h3>
			<p>value: <?php the_field('checkbox'); ?></p>
		</div>
	</div>
</div>

<?php
get_footer();

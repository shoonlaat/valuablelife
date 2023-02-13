<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
  $txt_box2_ttl = get_field('txt_box2_ttl');
	$txt_box2_txt1 = get_field('txt_box2_txt');
	$txt_box2_txt2 = get_field('txt_box2_txt2');
	$txt_box2_txt3 = get_field('txt_box2_txt3');
?>

<div class="txt-box2">
	<h3 class="box-ttl"><?php echo $txt_box2_ttl; ?></h3>
	<div class="txtbox-txt">
		<p><?php echo $txt_box2_txt1; ?> </p>
		<p><?php echo $txt_box2_txt2; ?> </p>
		<p><?php echo $txt_box2_txt3; ?> </p>
	</div>
</div>
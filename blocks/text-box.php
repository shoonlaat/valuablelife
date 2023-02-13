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
$txtbox_ttl = get_field('txtbox_ttl')?: 'タイトル';
$txtbox_txt = get_field('txtbox_txt')?: 'テキストが入ります';

?>
<div class="txt-box">
	<h3 class="box-ttl"><?php echo $txtbox_ttl; ?></h3>
	<div class="txtbox-txt"><?php echo $txtbox_txt; ?> </div>
</div>

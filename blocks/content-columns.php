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
$ttl = get_field('title')?: 'テキストが入ります';
$block_column_img = get_field('image');
$block_column_txt = get_field('text')?: 'テキストが入ります';

?>

<div class="content about-page-content contents-columns-part">
    <h2 class="underline">
    <?php echo $ttl; ?>
    </h2>
    <div class="content-column">
      <div class="content-txt">
        <p><?php echo $block_column_txt; ?></p>
        <p><?php echo $block_column_txt; ?></p>
      </div>
      <div class="content-img">
       <img src="<?php echo $block_column_img; ?> " alt="content-img" loading="lazy">     
      </div>
    </div>

  </div>
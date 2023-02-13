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
$eng_txt = get_field('eng-txt');
$jp_txt = get_field('jp-txt');
$aside_ttl = get_field('aside-ttl');
$gradient_txt= get_field('gradient-txt');

?>

<div class="gradient-blk right-blk">
    <div class="bg-blk">
      <div class="blk-title">
        <span class="eng-txt"><?php echo $eng_txt; ?></span>
        <span class="jp-txt"><?php echo $jp_txt; ?></span>
      </div>
    </div>
      <div class="blk-content">
        <div class="blk-content-ttl">
				<span><?php echo $aside_ttl ?></span>
				<p class="blk-txt"><?php echo $gradient_txt?></p>
          <!-- <span>医療福祉業界において、<br>価値ある人材に価値ある人生を</span>
          <p class="blk-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
        </div>
      </div>
  </div>
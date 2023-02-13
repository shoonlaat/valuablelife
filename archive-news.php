<?php

/**
 * The template for displaying Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */

get_header();
?>
<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb w-980 clearfix js-top">
  <?php the_breadcrumb(); ?>
</div>

<div class="content w-980">
  <div class="inner">
    <ul class="news-list">
      <?php query_posts('posts_per_page=2&post_type=news&order=DESC&paged=' . $paged); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><span><?php echo get_the_date('Y.m.d'); ?></span>
            <a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?>
            </a>
          </li>

        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
</div>
<?php the_posts_pagination(); ?>
<?php
get_footer();

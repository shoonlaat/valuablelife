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

get_header();
?>
<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb js-top clearfix">
  <?php the_breadcrumb(); ?>
</div>

<!-- =============== content ============== -->
<div class="content">
  <div class="page-ttl">
    <span class="eng-ttl"><?php the_field('eng_title'); ?></span>
    <span class="jp-ttl"><?php the_field('jp_title'); ?></span>
  </div>
  <?php while (have_posts()) : the_post(); ?>
  <?php if (has_post_thumbnail()) {
  ?>
    <div class="about-img">
     <?php the_post_thumbnail(); ?>
    </div>

  <?php
  }
  ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>
<!-- ./ content-area -->

<?php
get_footer();

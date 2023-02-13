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
 Template Name:About-template
 */
get_header();
?>

<!-- ===============  Breadcrumb ============== -->
<div class="content js-top about-page">
<div class="page-ttl">
    <span class="eng-ttl"><?php the_field('eng_title'); ?></span>
    <span class="jp-ttl"><?php the_field('jp_title'); ?></span>
  </div>
  <?php if (has_post_thumbnail()) {
  ?>
    <div class="about-img">
     <?php the_post_thumbnail(); ?>
    </div>

  <?php
  }
  ?>


  <div class="breadcrumb clearfix">
    <?php the_breadcrumb(); ?>
  </div>
  <div class="about-page-content">
    <div class="underline">
      一度きりの人生を、価値ある人生に。
    </div>
    <div class="content-column">
      <div class="content-txt">
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
      <div class="content-img">
        <img src="<?php echo get_template_directory_uri() ?>./assets/img/shared/about_img.jpg" width="500" height="381" loading="lazy" alt="about-img">
      </div>
    </div>

  </div>
  <div class="gradient-blk right-blk">
    <div class="bg-blk">
      <div class="blk-title">
        <span class="eng-txt">MISSION</span>
        <span class="jp-txt">ミッション</span>
      </div>
    </div>
      <div class="blk-content">
        <div class="blk-content-ttl">
          <span>医療福祉業界において、<br>価値ある人材に価値ある人生を</span>
          <p class="blk-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
  </div>
  <div class="gradient-blk left-blk">
    <div class="bg-blk">
      <div class="blk-title">
        <span class="eng-txt">Vision</span>
        <span class="jp-txt">ビジョン</span>
      </div>
    </div>
      <div class="blk-content">
        <div class="blk-content-ttl">
          <span>医療福祉業界において、<br>価値ある人材に価値ある人生を</span>
          <p class="blk-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
  </div>
  <div class="gradient-blk right-blk">
    <div class="bg-blk">
      <div class="blk-title">
        <span class="eng-txt">VALUE</span>
        <span class="jp-txt">価値</span>
      </div>
    </div>
      <div class="blk-content">
        <div class="blk-content-ttl">
          <span>医療福祉業界において、<br>価値ある人材に価値ある人生を</span>
          <p class="blk-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
  </div>
</div>
<?php
get_footer();

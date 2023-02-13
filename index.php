<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife
 */

get_header();
?>

<!-- ===============  main visual ============== -->
<div class="mainvisual">

  <!-- ./ mainvisual-inner -->
</div>
<!-- ./main visual -->

<!-- =============== content ============== -->
<div class="content">
  <div class="loader js-loader">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="<?php echo get_template_directory_uri() ?>./assets/img/shared/img_load_logo.png" width="255" height="140" loading="lazy" alt="一度きりの人生を、価値ある人生に。">
      </div>
      <p class="txt">
        <span>一</span>
        <span>度</span>
        <span>き</span>
        <span>り</span>
        <span>の</span>
        <span class="text-color">人</span>
        <span class="text-color">生</span>
        <span>を</span>
        <span>、</span><br class="s-sp">
        <span>価</span>
        <span>値</span>
        <span>あ</span>
        <span>る</span>
        <span class="text-color">人</span>
        <span class="text-color">生</span>
        <span>に</span>
        <span>。</span>
      </p>
    </div>
  </div>
  <!--loader-->
  <div class="sec-mv js-top">
    <div class="img-blk">
      <div class="img-01 mv-img" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="1200"></div>
      <div class="img-02 mv-img" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="1200"></div>
      <div class="img-03 mv-img" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="1200"></div>
    </div>
    <h1 class="mv-txt" data-aos="fade-up" data-aos-delay="7500" data-aos-duration="1500">
      全ての人が安心して<br>
      <span>医療・介護・保育</span>を<br>
      受けられる社会へ<br>
    </h1>
    <div class="mv-serious-txt" data-aos="fade-up" data-aos-delay="7500" data-aos-duration="1500" data-aos-anchor-placement="top">
      <p>
        Everyone can rest assured Medical care, nursing care,
        and childcare to a society that accepts
      </p>
    </div>
  </div>
  <!--sec-mv-->
  <section class="sec-about" data-aos="fade-up">
    <div class="about-inner">
      <h2 class="sec-ttl">
        <span>About us</span>
        私たちについて
      </h2>
      <h3 class="sub-ttl">
        価値ある人生、一度きりの人生<br>
        相手の立場になって深く考える
      </h3>
      <div class="about-txt">
        私たちについての見出し対しての本文サブコピーが入る想定私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての見出し対しての本文私たちについての私たちについての見出し対しての本文
      </div>
      <a href="#" class="btn01">
        <span class="about-arrow"></span>
        私たちについてへ
      </a>
    </div>
  </section>
  <!--sec-about-->
  <section class="sec-news" data-aos="fade-up">
    <div class="inner">
      <div class="sec-news-content">
        <h2 class="sec-ttl">
          <span>NEWS</span>
          お知らせ
        </h2>
        <ul class="news-list">
          <?php query_posts('posts_per_page=3&post_type=news&order=DESC&paged=' . $paged); ?>
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
      <a href="<?php echo site_url(); ?>/news/" class="btn01">
        <span class="about-arrow"></span>
        お知らせ一覧へ
      </a>
    </div>

  </section>
  <!--sec-news-->
  <section class="sec-contact" data-aos="fade-up">
    <h2 class="sec-ttl">
      <span>CONTACT</span>
      お問い合わせ
    </h2>
    <p class="contact-txt">
      VALUABLE LIFEへの各種お問い合わせは<br class="s-sp">こちらからお願いします。
    </p>
    <div class="contact-btn-blk">
      <a href="#" class="btn02 btn-antimate">
        <span class="btn-line">採用ご担当者様はこちらから</span>
        <span class="contact-arrow"></span>
      </a>
      <a href="#" class="btn02 btn-antimate">
        <span class="btn-line">求職者様お問い合わせ</span>
        <span class="contact-arrow"></span>
      </a>
    </div>
  </section>
  <!--sec-contact-->

  <!--#include FILE="include/parts-breadcrumb.html"-->

</div>
<?php
get_footer();

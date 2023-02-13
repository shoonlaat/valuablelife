<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vlife
 */

?>

<!-- =============== footer ============== -->
<footer class="footer" data-aos="fade-up">
	<?php if ( !(is_page('contact')) ) { ?>
	<div>
		<h2 class="sec-ttl"><span>公式SNSアカウント</span></h2>
		<p class="latest-txt">VALUABLE LIFEからの最新情報を<br class="s-sp">発信しております。</p>
		<ul class="info-list">
			<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/img/icon/icon_twitter.png" loading="lazy" width="37" height="30"
						alt="twitter"></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/img/icon/icon_facebook.png" loading="lazy" width="34" height="33"
						alt="facebook"></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/img/icon/icon_line.png" loading="lazy" width="36" height="36" alt="line"></a>
			</li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/img/icon/icon_instagram.png" loading="lazy" width="54" height="54"
						alt="instagram"></a></li>
		</ul>
	</div>
	<?php } ?>
	<div class="footer-content" data-aos="fade-up">
		<div class="footer-inner">
			<div class="footer-logo">
				<a href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/img/shared/img_logo.png" width="320" height="60" loading="lazy"
						alt="みんな違ってみんい"></a>
			</div>
			<ul class="footer-nav">
				<li><a href="#">私たちについて</a></li>
				<li><a href="#">事業内容</a></li>
				<li><a href="#">トップメッセージ</a></li>
				<li><a href="#">会社概要</a></li>
				<li><a href="#">採用情報</a></li>
				<li><a href="#">お知らせ</a></li>
			</ul>
			<div class="btn-blk">
				<a href="#" class="recruit-btn footer-btn btn-antimate">
					<span class="btn-line">採用ご担当者様お問い合わせ</span>
					<span class="footer-arrow"></span>
				</a>
				<a href="#" class="inquiries-btn footer-btn btn-antimate">
					<span class="btn-line">求職者様お問い合わせ</span>
					<span class="footer-arrow"></span>
				</a>
			</div>
			<div class="copy-right">
				Copyright © VALUABLE LIFE Co., Ltd.<br class="s-sp"> All Rights Reserved.
			</div>
		</div>
	</div>
</footer>
<!-- ./footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- js -->
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/aos.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/share.js"></script>
<script>
    AOS.init({
      easing: 'ease',
      duration: 1000,
      once: true,
    });
  </script>
</body>
</html>

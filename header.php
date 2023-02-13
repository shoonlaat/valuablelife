<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vlife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="<?php echo get_the_permalink(); ?>" />
	<?php /* OGP settings ---------------------------------- */ ?>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo get_the_permalink(); ?>">
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="<?php print get_template_directory_uri(); ?>/assets/img/shared/ogp.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<!-- favicon, touch-icon -->
	<link rel="shortcut icon" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print get_template_directory_uri(); ?>/assets/img/shared/apple-touch-icon.png">
	<!-- css -->
	<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/share.css">
	<?php wp_head(); ?>
</head>

<body>
	<!-- ===============  header ============== -->
	<header class="header">
		<div class="header-content">
			<div class="logo">
				<a href="<?php echo get_bloginfo('url'); ?>">
					<img src="<?php echo get_template_directory_uri() ?>./assets/img/shared/img_logo.png" width="302" height="56" loading="lazy" alt="みんな違ってみんい">
				</a>
			</div>
			<div class="hamburger js-hamburger s-sp">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="right-blk js-slide">
				<nav class="nav js-nav">
					<ul class="nav-list">
						<li>
							<a href="<?php echo site_url(); ?>/about/">私たちについて</a>
						</li>
						<li>
							<a href="#">事業内容</a>
						</li>
						<li>
							<a href="#">トップメッセージ</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/company/">会社概要</a>
						</li>
						<li>
							<a href="#">採用情報</a>
						</li>
						<li>
							<a href="<?php echo site_url(); ?>/news/">お知らせ</a>
						</li>
					</ul>
				</nav>
				<div class="btn-blk">
					<a href="<?php echo site_url(); ?>/contact/" class="recruit-btn top-btn btn-antimate">
						<span class="btn-line">採用ご担当者様お問い合わせ</span>
						<span class="btn-arrow"></span>
					</a>
					<a href="<?php echo site_url(); ?>/contact/" class="inquiries-btn top-btn btn-antimate">
						<span class="btn-line">求職者様お問い合わせ</span>
						<span class="btn-arrow"></span>
					</a>
				</div>
			</div>
		</div>
	</header>
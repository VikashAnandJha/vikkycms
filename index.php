<?php include './inc/db.php';

$siteInfoRow=mysqli_fetch_array(mysqli_query($conn,"select * from website_metadata where id='1'")); 


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script data-cfasync="false" id="ao_optimized_gfonts_config">
		WebFontConfig = {
			google: {
				families: ["Mulish:ital,0,400,0,500,0,600,0,700,0,800,0,900,1,400,1,600,1,700,1,800,1,900"]
			},
			classes: false,
			events: false,
			timeout: 1500
		};
	</script>
	 <link rel="icon" href="./uploads/images/<?php echo $siteInfoRow['favicon']; ?>" type="image/gif" sizes="16x16">

	<link media="all" href="css/main.css" rel="stylesheet" />
	<link media="only screen and (max-width: 768px)" href="css/main2.css" rel="stylesheet" />
	<title><?php echo $siteInfoRow['title'] ;?></title>
	<meta name="title" content="<?php echo $siteInfoRow['title'] ;?>">
<meta name="description" content="<?php echo $siteInfoRow['description'] ;?>">
<meta name="keywords" content="<?php echo $siteInfoRow['keywords'] ;?>">

<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
	<link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />
	<link href='https://ajax.googleapis.com' rel='preconnect' />
	<link href='https://fonts.googleapis.com' rel='preconnect' />




	<style id='woocommerce-layout-inline-css'>
		.infinite-scroll .woocommerce-pagination {
			display: none;
		}
	</style>


	<style id='woocommerce-inline-inline-css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>






	<script src='js/jquery.js'></script>



	<style id="ruki-custom-css-vars">
		:root {
			--custom-header-background: #ffffff;
			--custom-logo-width: 200px;
			--custom-logo-width-mobile: 100px;
			--related-posts-background: #c06c84;
			--related-posts-title-color: #ffffff;
			--special-widget-background: #355c7d;
			--special-widget-title-color: #ffffff;
			--special-widget-font-color: #ffffff;
			--special-widget-link-color: #ffffff;
			--special-widget-meta-color: #ffffff;
			--special-widget-meta-link-color: #ffffff;
			--special-widget-button-color: #f8b195;
			--special-widget-line-color: #45464b;
			--special-widget-first-count-color: #94979e;
			--footer-bottom-background: #f5f5f5;
		}
	</style>


	<style id="ruki-custom-slug-css">
		article ul.post-categories li .cat-link-3,
		.hero-entry ul.post-categories li .cat-link-3,
		.list-style-list-first-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail:first-child ul.post-categories li .cat-link-3,
		.list-style-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail ul.post-categories li .cat-link-3,
		.tag-link-3 {
			background: #6c5b7b !important;
		}

		article ul.post-categories li .cat-link-5,
		.hero-entry ul.post-categories li .cat-link-5,
		.list-style-list-first-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail:first-child ul.post-categories li .cat-link-5,
		.list-style-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail ul.post-categories li .cat-link-5,
		.tag-link-5 {
			background: #f8b195 !important;
		}

		article ul.post-categories li .cat-link-4,
		.hero-entry ul.post-categories li .cat-link-4,
		.list-style-list-first-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail:first-child ul.post-categories li .cat-link-4,
		.list-style-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail ul.post-categories li .cat-link-4,
		.tag-link-4 {
			background: #c06c84 !important;
		}

		article ul.post-categories li .cat-link-6,
		.hero-entry ul.post-categories li .cat-link-6,
		.list-style-list-first-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail:first-child ul.post-categories li .cat-link-6,
		.list-style-grid.has-post-thumbnails li.widget-entry.has-post-thumbnail ul.post-categories li .cat-link-6,
		.tag-link-6 {
			background: #94979e !important;
		}
	</style>

	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style id="wp-custom-css">
		.home:not(.demo7) .in-loop-widget.demo7-only {
			display: none;
		}

		.home:not(.demo4) .in-loop-widget.demo4-only {
			display: none;
		}

		.home.demo4 .in-loop-widget:not(.demo4-only) {
			display: none;
		}

		.home.demo7 .in-loop-widget:not(.demo7-only) {
			display: none;
		}

		.home.demo1 .in-loop-widget.widget_mc4wp_form_widget {
			display: none;
		}

		.home.demo7 .in-loop-widget.demo7-only,
		.home.demo1 .in-loop-widget,
		.home.demo2 .in-loop-widget.demo7-hidden,
		.home.demo3 .in-loop-widget.demo7-hidden {
			margin-bottom: 0;
		}

		.widget-in-loop .bannerad {
			width: 300px;
		}

		.home.demo8 .in-loop-widget {
			display: none;
		}

		.home.demo3 .in-loop-widget.ruki-special-widget {
			display: none
		}

		.home.demo5 .ruki-post-block-wrapper:not([style*="background"]).prev-has-background {
			padding-top: 0;
		}

		@media screen and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
			.custom-logo {
				image-rendering: -webkit-optimize-contrast;
			}
		}
	</style>
	<script data-cfasync="false" id="ao_optimized_gfonts_webfontloader">
		(function() {
			var wf = document.createElement('script');
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
</head>

<body class="post-template-default single single-post postid-215 single-format-standard wp-custom-logo theme-ruki has-related-posts has-related-posts-background woocommerce-no-js has-sticky-nav has-sticky-nav-mobile has-custom-header has-post-nav has-comments">

	<!-- fade the body when slide menu is active -->
	<div class="body-fade"></div>


	<?php include 'inc/header.php'; ?>
	<!-- .site-header -->



	<div class="splash" style="background-color: #fff7f3;">
		<div class="splash-overlay" style="align-items: center;">
			<div class="logo-wrapper" style="align-items: center; display:block">
			<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt=" logo" class="logo" style="width: 200px;"></div>
			<h2><span>A <strong>Complete</strong> UPSC Exam Preparation Portal</span></h2>
			<p class="author">Made for & By Civil services aspirants</p>
		</div>


		
	</div>



	<div class="wrap">
<style>
	.flex-grid .flex-box {
		padding: 10px;
	}
	</style>
<main id="main" class="site-main">
	<div class="footer-widget-area footer-columns flex-grid cols-3 container"  >
		<div class="flex-box footer-column footer-column-1">
			<section id="ruki_posts_widget-3" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
				<h3 class="widget-title">User Favourites</h3>
				<ol class="list-style-list has-post-thumbnails show-post-count recent-posts">

					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=547">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841.jpg 1600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="548" data-permalink="http://www.3forty.media/ruki/?attachment_id=548" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841.jpg" data-orig-size="1600,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;Cute wild giant panda cartoon illustration&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;Rawpixel Ltd.&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;Print&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Print" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1024x1024.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841.jpg 1600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="548" data-permalink="http://www.3forty.media/ruki/?attachment_id=548" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841.jpg" data-orig-size="1600,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;Cute wild giant panda cartoon illustration&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;Rawpixel Ltd.&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;Print&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Print" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/62841-1024x1024.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=547" rel="bookmark" class="entry-title-link">However distant she request behaved see nothing</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>



									<li class="entry-date">

										<time datetime="2020-06-11">


											1 year ago

										</time>

									</li>




								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=543">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4.jpg 1600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="544" data-permalink="http://www.3forty.media/ruki/?attachment_id=544" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4.jpg" data-orig-size="1600,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-character-4" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1024x1024.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4.jpg 1600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="544" data-permalink="http://www.3forty.media/ruki/?attachment_id=544" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4.jpg" data-orig-size="1600,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-character-4" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-character-4-1024x1024.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=543" rel="bookmark" class="entry-title-link">Continuing melancholy especially so to me</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>



									<li class="entry-date">

										<time datetime="2020-06-11">


											1 year ago

										</time>

									</li>




								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=540">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="541" data-permalink="http://www.3forty.media/ruki/?attachment_id=541" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2.jpg" data-orig-size="1600,2263" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="japan-scene2" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-212x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-724x1024.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-600x600.jpg 600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="541" data-permalink="http://www.3forty.media/ruki/?attachment_id=541" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2.jpg" data-orig-size="1600,2263" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="japan-scene2" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-212x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japan-scene2-724x1024.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=540" rel="bookmark" class="entry-title-link">However distant she request behaved see nothing</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>



									<li class="entry-date">

										<time datetime="2020-06-11">


											1 year ago

										</time>

									</li>




								</ul>

							</div>


						</div>

					</li>

				</ol>
			</section>
		</div>
		<div class="flex-box footer-column footer-column-2">
			<section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
				<h3 class="widget-title">Popular</h3>
				<ol class="list-style-list has-comment-count show-post-count popular-posts">

					<li class="widget-entry">


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=215" rel="bookmark" class="entry-title-link">An delighted offending curiosity my is dashwoods</a>

							<div class="entry-meta after-title">

								<ul>




									<li class="entry-date">

										<time datetime="2020-06-08">


											1 year ago

										</time>

									</li>



									<li class="entry-comment-count">3 <span>Comments</span></li>



								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry">


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=157" rel="bookmark" class="entry-title-link">Comparison age not pianoforte increasing delightful now</a>

							<div class="entry-meta after-title">

								<ul>




									<li class="entry-date">

										<time datetime="2020-06-08">


											1 year ago

										</time>

									</li>



									<li class="entry-comment-count">2 <span>Comments</span></li>



								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry">


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=212" rel="bookmark" class="entry-title-link">Indulgence unreserved is the alteration appearance my an astonished</a>

							<div class="entry-meta after-title">

								<ul>




									<li class="entry-date">

										<time datetime="2020-06-11">


											1 year ago

										</time>

									</li>



									<li class="entry-comment-count">2 <span>Comments</span></li>



								</ul>

							</div>


						</div>

					</li>

				</ol>
			</section>
		</div>
		<div class="flex-box footer-column footer-column-3">
			<section id="ruki_posts_widget-5" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
				<h3 class="widget-title">Short Reads</h3>
				<ul class="list-style-list has-post-thumbnails has-read-time popular-posts">

					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=170">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="171" data-permalink="http://www.3forty.media/ruki/?attachment_id=171" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa.jpg" data-orig-size="2000,1334" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="spa" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-300x200.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-1024x683.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-600x600.jpg 600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="171" data-permalink="http://www.3forty.media/ruki/?attachment_id=171" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa.jpg" data-orig-size="2000,1334" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="spa" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-300x200.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/spa-1024x683.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=170" rel="bookmark" class="entry-title-link">Bed sincerity yet therefore forfeited his certainty neglected questions</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span><i>by</i> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>





									<li class="entry-read-time">2 <span>min</span></li>


								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=185">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="186" data-permalink="http://www.3forty.media/ruki/?attachment_id=186" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover.jpg" data-orig-size="1600,2345" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="japanese-cover" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-205x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-699x1024.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-600x600.jpg 600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="186" data-permalink="http://www.3forty.media/ruki/?attachment_id=186" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover.jpg" data-orig-size="1600,2345" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="japanese-cover" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-205x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/japanese-cover-699x1024.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=185" rel="bookmark" class="entry-title-link">Style begin mr heard by in music tried do</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span><i>by</i> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>





									<li class="entry-read-time">2 <span>min</span></li>


								</ul>

							</div>


						</div>

					</li>



					<li class="widget-entry has-post-thumbnail">


						<div class="post-thumbnail">
							<a href="http://www.3forty.media/ruki/?p=188">
								<noscript><img width="150" height="150" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="291" data-permalink="http://www.3forty.media/ruki/?attachment_id=291" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled.jpg" data-orig-size="2560,1707" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="3540186" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-300x200.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-1024x683.jpg" /></noscript><img width="150" height="150" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20150%20150%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-150x150.jpg" class="lazyload attachment-thumbnail size-thumbnail wp-post-image" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-600x600.jpg 600w" data-sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="291" data-permalink="http://www.3forty.media/ruki/?attachment_id=291" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-scaled.jpg" data-orig-size="2560,1707" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="3540186" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-300x200.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/3540186-1024x683.jpg" /> </a>
						</div>


						<div class="entry-header">


							<a href="http://www.3forty.media/ruki/?p=188" rel="bookmark" class="entry-title-link">Uneasy no settle whence nature narrow in afraid</a>

							<div class="entry-meta after-title">

								<ul>



									<li class="entry-author-meta"><span class="screen-reader-text">Posted</span><i>by</i> <a href="http://www.3forty.media/ruki/?author=1">Will Lewis</a></li>





									<li class="entry-read-time">2 <span>min</span></li>


								</ul>

							</div>


						</div>

					</li>

				</ul>
			</section>
		</div>
	</div><!-- .widget-area -->
</main>
	</div>


	<?php include 'inc/footer.php'; ?>


	<script>
		(function() {
			function maybePrefixUrlField() {
				if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
					this.value = "http://" + this.value;
				}
			}

			var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
			if (urlFields) {
				for (var j = 0; j < urlFields.length; j++) {
					urlFields[j].addEventListener('blur', maybePrefixUrlField);
				}
			}
		})();
	</script><noscript>
		<style>
			.lazyload {
				display: none;
			}
		</style>
	</noscript>
	<script data-noptimize="1">
		window.lazySizesConfig = window.lazySizesConfig || {};
		window.lazySizesConfig.loadMode = 1;
	</script>
	<script async data-noptimize="1" src='js/lazysizes.min.js?ao_version=2.7.7'></script>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>


	<script>
		var wc_add_to_cart_params = {
			"ajax_url": "\/ruki\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/ruki\/?wc-ajax=%%endpoint%%",
			"i18n_view_cart": "View cart",
			"cart_url": "http:\/\/www.3forty.media\/ruki\/?page_id=593",
			"is_cart": "",
			"cart_redirect_after_add": "no"
		};
	</script>


	<script>
		var woocommerce_params = {
			"ajax_url": "\/ruki\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/ruki\/?wc-ajax=%%endpoint%%"
		};
	</script>

	<script>
		var wc_cart_fragments_params = {
			"ajax_url": "\/ruki\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/ruki\/?wc-ajax=%%endpoint%%",
			"cart_hash_key": "wc_cart_hash_80115998dec50202218bf5cf02a16205",
			"fragment_name": "wc_fragments_80115998dec50202218bf5cf02a16205",
			"request_timeout": "5000"
		};
	</script>

	<script>
		jQuery('body').bind('wc_fragments_refreshed', function() {
			var jetpackLazyImagesLoadEvent;
			try {
				jetpackLazyImagesLoadEvent = new Event('jetpack-lazy-images-load', {
					bubbles: true,
					cancelable: true
				});
			} catch (e) {
				jetpackLazyImagesLoadEvent = document.createEvent('Event')
				jetpackLazyImagesLoadEvent.initEvent('jetpack-lazy-images-load', true, true);
			}
			jQuery('body').get(0).dispatchEvent(jetpackLazyImagesLoadEvent);
		});
	</script>


	<script>
		var jetpackCarouselStrings = {
			"widths": [370, 700, 1000, 1200, 1400, 2000],
			"is_logged_in": "",
			"lang": "en",
			"ajaxurl": "http:\/\/www.3forty.media\/ruki\/wp-admin\/admin-ajax.php",
			"nonce": "6bbbc87093",
			"display_exif": "1",
			"display_comments": "1",
			"display_geo": "1",
			"single_image_gallery": "1",
			"single_image_gallery_media_file": "",
			"background_color": "black",
			"comment": "Comment",
			"post_comment": "Post Comment",
			"write_comment": "Write a Comment...",
			"loading_comments": "Loading Comments...",
			"download_original": "View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>",
			"no_comment_text": "Please be sure to submit some text with your comment.",
			"no_comment_email": "Please provide an email address to comment.",
			"no_comment_author": "Please provide your name to comment.",
			"comment_post_error": "Sorry, but there was an error posting your comment. Please try again later.",
			"comment_approved": "Your comment was approved.",
			"comment_unapproved": "Your comment is in moderation.",
			"camera": "Camera",
			"aperture": "Aperture",
			"shutter_speed": "Shutter Speed",
			"focal_length": "Focal Length",
			"copyright": "Copyright",
			"comment_registration": "0",
			"require_name_email": "1",
			"login_url": "http:\/\/www.3forty.media\/ruki\/wp-login.php?redirect_to=http%3A%2F%2Fwww.3forty.media%2Fruki%2F%3Fp%3D215",
			"blog_id": "1",
			"meta_data": ["camera", "aperture", "shutter_speed", "focal_length", "copyright"],
			"local_comments_commenting_as": "<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>"
		};
	</script>



	<script defer src="js/main2.js"></script>
</body>

</html>
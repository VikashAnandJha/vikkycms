<?php include './inc/db.php';

$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));


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
	<title><?php echo $siteInfoRow['title']; ?></title>
	<meta name="title" content="<?php echo $siteInfoRow['title']; ?>">
	<meta name="description" content="<?php echo $siteInfoRow['description']; ?>">
	<meta name="keywords" content="<?php echo $siteInfoRow['keywords']; ?>">

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
				<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt=" logo" class="logo" style="width: 200px;">
			</div>
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
			<div class="footer-widget-area footer-columns flex-grid cols-3 container">
				<div class="flex-box footer-column footer-column-1">
					<section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
						<h3 class="widget-title">Latest Posts</h3>
						<ol class="list-style-list has-comment-count show-post-count popular-posts">

							<?php

							$postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' order by id desc limit 5");




							while ($postrow = mysqli_fetch_array($postq)) {
								$cid = $postrow['cat_id'];
								$prow=$postrow;
								$cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
								$cat_url = $cat_row['url'];
							?>
								<li class="widget-entry">


									<div class="entry-header">


										<a href="<?php echo $cat_url; ?>/<?php echo $prow['url']; ?>" rel="bookmark" class="entry-title-link">
											<?php echo $prow['title']; ?></a>



									</div>

								</li>
							<?php } ?>

						</ol>
					</section>
				</div>
				<div class="flex-box footer-column footer-column-2">
					<section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
						<h3 class="widget-title">Popular</h3>
						<ol class="list-style-list has-comment-count show-post-count popular-posts">

							<?php

							$postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' order by views desc limit 5");




							while ($postrow = mysqli_fetch_array($postq)) {
								$cid = $postrow['cat_id'];
								$prow=$postrow;
								$cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
								$cat_url = $cat_row['url'];
							?>
								<li class="widget-entry">


									<div class="entry-header">


										<a href="<?php echo $cat_url; ?>/<?php echo $prow['url']; ?>" rel="bookmark" class="entry-title-link">
											<?php echo $prow['title']; ?></a>



									</div>

								</li>
							<?php } ?>

						</ol>
					</section>
				</div>
				<div class="flex-box footer-column footer-column-3">
					<section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
						<h3 class="widget-title">Featured</h3>
						<ul class="list-style-list has-comment-count show-post-count popular-posts">

						<?php
		 
         $postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' and cat_id='2' order by id desc limit 5");

          
       

         while ($postrow = mysqli_fetch_array($postq)) {
             $cid=$postrow['cat_id'];
			 $prow=$postrow;
            $cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
            $cat_url = $cat_row['url'];
          ?>
             <li class="widget-entry">


                 <div class="entry-header">


                     <a href="<?php echo $cat_url ;?>/<?php echo $prow['url'] ;?>" rel="bookmark" class="entry-title-link">
                     <?php echo $prow['title'] ;?></a>

                     

                 </div>

             </li>
<?php } ?>

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
	 
 
 



	<script defer src="js/main2.js"></script>
</body>

</html>
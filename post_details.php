<?php include './inc/db.php';
$post_id = $_GET['post_id'];
$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));
$prow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id' or url='$post_id'"));


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/<?php echo basename(__DIR__); ?>/">
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
    <meta name="title" content="<?php echo $prow['title']; ?>">
    <meta name="description" content="<?php echo $desc = substr($prow['content'], 0, 25); ?>">
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

<body class="post-template-default single single-post postid-161 single-format-standard wp-custom-logo theme-ruki has-related-posts has-related-posts-background woocommerce-js has-sticky-nav has-sticky-nav-mobile has-custom-header has-post-nav has-comments has-sidebar">
    <!-- fade the body when slide menu is active -->
    <div class="body-fade"></div>


    <?php include 'inc/header.php'; ?>
    <!-- .site-header -->
    <style>
        .splash {
            background: #ffffff;
            /* background-image: linear-gradient(to right top, #f67280, #e97083, #dc6f84, #ce6d85, #c06c84); */
            text-align: center;
            color: #94979e;
            padding: 10px 30px 30px 30px;
            line-height: 1.5;
            /* position: relative; */
        }
    </style>







    <div class="wrap">

        <main id="main" class="site-main">
            <div id="primary" class="content-area flex-grid the-post" data-thumbnail="hero">



                <article id="post-161" class="flex-box single-post card has-post-share has-meta-after-title has-meta-before-title has-excerpt disabled-post-video default post-161 post type-post status-publish format-standard has-post-thumbnail hentry category-art-design tag-art tag-creative tag-gutenberg tag-health tag-music tag-travel">




                    <div class="post-thumbnail">


                       
                            <img width="1600" height="680" src="./uploads/images/<?php echo $prow['featured_image']; ?>" 
                            data-src="./uploads/images/<?php echo $prow['featured_image']; ?>"
                             class="attachment-ruki-hero-image size-ruki-hero-image wp-post-image lazyloaded" alt="" 
                             data-attachment-id="26" data-permalink="http://www.3forty.media/ruki/?attachment_id=26" 
                               data-orig-size="2000,1334" data-comments-opened="1"
                                 
                                 data-image-description="">
                    </div><!-- .post-thumbnail -->


                    <header class="entry-header">

                    <?php
                        $aid = $prow['author'];
                        $cid = $prow['cat_id'];
                        if ($aid == '-1') $aid = 1;


                        $arow = mysqli_fetch_array(mysqli_query($conn, "select * from authors where id='$aid'"));
                        $author_name = $arow['name'];
                        $cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
                        $cat_name = $cat_row['name'];




                        ?>
                        <div class="entry-meta before-title">

                            <ul class="author-category-meta">


                                <li class="category-prepend">

                                    <span class="screen-reader-text">Posted</span>
                                    <i>in</i>

                                </li>

                                <li class="category-list">
                                    <ul class="post-categories">
                                        <li class="cat-slug-art-design cat-id-2">
                                            <a href="http://www.3forty.media/ruki/?cat=2" class="cat-link-2"><?php echo $cat_name; ?></a></li>
                                    </ul>
                                </li>


                            </ul>

                        </div>
                        

                        <h1 class="entry-title"><span><?php echo $prow['title']; ?></span></h1>
                        <div class="entry-meta after-title">

                            <ul>



                                <li class="entry-author-meta">

                                    <span class="screen-reader-text">Posted by</span><i>by</i>
                                    <a href="?posts.php?author=<?php echo $arow['id']; ?>"><?php echo $author_name; ?></a>

                                </li>



                                <li class="entry-date" style="display: none;">


                                    <time datetime="2020-06-08">


                                        published on: <?php echo $prow['created_at']; ?>

                                    </time>


                                </li>



                                <li class="entry-date-updated">


                                    <span>Published:</span> <?php echo $prow['last_edit']; ?>

                                </li>




                                <li class="entry-comment-count" style="display: none;">


                                    <a href="#comments">


                                        2 <span>Comments</span>


                                    </a>


                                </li>



                            </ul>

                        </div>

                    </header><!-- .entry-header -->


                    <div class="entry-content"><p>
                    <?php echo $prow['content']; ?>
                    </p>
                     
                      
                      
                    </div>

 
                </article><!-- #post-## -->


                <footer class="hentry-footer has-share-content has-post-tags card">


                    <!-- share -->
                    <div class="share bottom">
                        <ul class="social-icons icon-background brand">
                            <li class="share-text">share</li>
                            <li class="social-icon twitter"><a rel="nofollow" href="https://twitter.com/share?url=http://www.3forty.media/ruki/?p=161&amp;text=Suspicion%20do%20departure%20at%20extremely%20he%20believing&amp;via=#" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li class="social-icon facebook"><a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=http://www.3forty.media/ruki/?p=161" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li class="social-icon pinterest"><a rel="nofollow" href="https://pinterest.com/pin/create/button/?url=http://www.3forty.media/ruki/?p=161&amp;media=http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-3.jpg&amp;description=Suspicion+do+departure+at+extremely+he+believing" target="_blank"><i class="icon-pinterest"></i></a></li>
                            <li class="social-icon linkedin"><a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.3forty.media/ruki/?p=161&amp;title=Suspicion+do+departure+at+extremely+he+believing" target="_blank"><i class="icon-linkedin"></i></a></li>
                            <li class="social-icon vkontakte"><a rel="nofollow" href="https://vk.com/share.php?url=http://www.3forty.media/ruki/?p=161&amp;title=Suspicion%20do%20departure%20at%20extremely%20he%20believing" target="_blank"><i class="icon-vkontakte"></i></a></li>
                            <li class="social-icon odnoklassniki"><a rel="nofollow" href="https://connect.ok.ru/dk?cmd=WidgetSharePreview&amp;st.cmd=WidgetSharePreview&amp;st.shareUrl=http://www.3forty.media/ruki/?p=161" target="_blank"><i class="icon-odnoklassniki"></i></a></li>
                            <!-- mobile only apps -->
                            <li class="social-icon whatsapp mobile-only"><a rel="nofollow" href="whatsapp://send?text=http://www.3forty.media/ruki/?p=161" data-action="share/whatsapp/share" target="_blank"><i class="icon-whatsapp"></i></a></li>
                            <li class="social-icon telegram mobile-only"><a rel="nofollow" href="'https://telegram.me/share/url?url=http://www.3forty.media/ruki/?p=161&amp;text=Suspicion%20do%20departure%20at%20extremely%20he%20believing" target="_blank"><i class="icon-telegram"></i></a></li>
                        </ul>
                    </div>
                    <div class="entry-meta post-tags">
                        <ul>
                            <li><a href="http://www.3forty.media/ruki/?tag=art" aria-label="art">art</a></li>
                            <li><a href="http://www.3forty.media/ruki/?tag=creative" aria-label="creative">creative</a></li>
                            <li><a href="http://www.3forty.media/ruki/?tag=gutenberg" aria-label="gutenberg">gutenberg</a></li>
                            <li><a href="http://www.3forty.media/ruki/?tag=health" aria-label="health">health</a></li>
                            <li><a href="http://www.3forty.media/ruki/?tag=music" aria-label="music">music</a></li>
                            <li><a href="http://www.3forty.media/ruki/?tag=travel" aria-label="travel">travel</a></li>
                        </ul>
                    </div>
                </footer>

             

                <div id="post-navigation" class="content-area post-navigation flex-grid cols-3 has-prev-post has-next-post square-aspect-ratio">
                    <h2 class="screen-reader-text">Post navigation</h2>

                    <article class="flex-box previous-article has-post-thumbnail">

                        <div class="post-thumbnail">
                            <a href="http://www.3forty.media/ruki/?p=159"><noscript><img width="600" height="600" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg" class="attachment-ruki-square-image size-ruki-square-image wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi.jpg 1737w" sizes="(max-width: 600px) 100vw, 600px" data-attachment-id="30" data-permalink="http://www.3forty.media/ruki/?attachment_id=30" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi.jpg" data-orig-size="1737,1737" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-sushi" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1024x1024.jpg" /></noscript><img width="600" height="600" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg" data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg" class="attachment-ruki-square-image size-ruki-square-image wp-post-image ls-is-cached lazyloaded" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi.jpg 1737w" data-sizes="(max-width: 600px) 100vw, 600px" data-attachment-id="30" data-permalink="http://www.3forty.media/ruki/?attachment_id=30" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi.jpg" data-orig-size="1737,1737" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-sushi" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1024x1024.jpg" sizes="(max-width: 600px) 100vw, 600px" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-sushi.jpg 1737w"></a>
                        </div>
                        <header class="entry-header">
                            <div class="entry-meta before-title prev-next-pill">
                                <span>previous post</span>
                            </div>
                            <h3 class="entry-title"><a href="http://www.3forty.media/ruki/?p=159">Astonished and acceptance men two discretion</a></h3>
                        </header>
                    </article>

                    <article class="flex-box next-article has-post-thumbnail">

                        <div class="post-thumbnail">
                            <a href="http://www.3forty.media/ruki/?p=163"><noscript><img width="600" height="600" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg" class="attachment-ruki-square-image size-ruki-square-image wp-post-image" alt="" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2.jpg 1600w" sizes="(max-width: 600px) 100vw, 600px" data-attachment-id="148" data-permalink="http://www.3forty.media/ruki/?attachment_id=148" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2.jpg" data-orig-size="1600,1599" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-donut-2" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1024x1024.jpg" /></noscript><img width="600" height="600" src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg" data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg" class="attachment-ruki-square-image size-ruki-square-image wp-post-image ls-is-cached lazyloaded" alt="" data-srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2.jpg 1600w" data-sizes="(max-width: 600px) 100vw, 600px" data-attachment-id="148" data-permalink="http://www.3forty.media/ruki/?attachment_id=148" data-orig-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2.jpg" data-orig-size="1600,1599" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="kawaii-donut-2" data-image-description="" data-medium-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-300x300.jpg" data-large-file="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1024x1024.jpg" sizes="(max-width: 600px) 100vw, 600px" srcset="http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-600x600.jpg 600w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-300x300.jpg 300w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-100x100.jpg 100w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1024x1024.jpg 1024w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-150x150.jpg 150w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-768x768.jpg 768w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1536x1536.jpg 1536w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2-1250x1250.jpg 1250w, http://www.3forty.media/ruki/wp-content/uploads/2020/06/kawaii-donut-2.jpg 1600w"></a>
                        </div>
                        <header class="entry-header">
                            <div class="entry-meta before-title prev-next-pill">
                                <span>next post</span>
                            </div>
                            <h3 class="entry-title"><a href="http://www.3forty.media/ruki/?p=163">Everything travelling set how law literature</a></h3>
                        </header>
                    </article>
                </div>


               

 


            </div><!-- #primary -->
        </main><!-- #main -->

        <?php include 'inc/blog_sidebar.php'; ?>
    </div>




    <?php include 'inc/footer.php'; ?>








    <script defer src="js/main2.js"></script>
</body>

</html>
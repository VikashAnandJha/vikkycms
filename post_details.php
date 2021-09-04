<?php include './inc/db.php';
$post_id = $_GET['post_id'];
$cat_id = $_GET['cat_id'];
$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));
$prow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id' or url='$post_id'"));
  $post_id=$prow['id'];

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
    <title>Post<?php echo $post_id; ?>Cat<?php echo $cat_id; ?>/<?php echo $siteInfoRow['title']; ?></title>
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




                    <div class="post-thumbnail" style="display: <?php if(!$prow['featured_image'])echo 'none'; ?>;">


                       
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
                        $post_id = $prow['id'];
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
                                            <a href="category/<?php echo $cat_row['url']; ?>" class="cat-link-2"><?php echo $cat_name; ?></a></li>
                                    </ul>
                                </li>


                            </ul>

                        </div>
                        

                        <h1 class="entry-title"><span><?php echo $prow['title']; ?></span></h1>
                        <div class="entry-meta after-title">

                            <ul>



                                <li class="entry-author-meta">

                                    <span class="screen-reader-text">Posted by</span><i>by</i>
                                    <a href="author/<?php echo $arow['username']; ?>"><?php echo $author_name; ?></a>

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
                            <li class="social-icon twitter"><a rel="nofollow" href="https://twitter.com/share?url=<?php echo $actual_link; ?>&amp;text=<?php echo $prow['title']; ?>&amp;via=#" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li class="social-icon facebook"><a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                           <!-- mobile only apps -->
                            <li class="social-icon whatsapp mobile-only"><a rel="nofollow" href="whatsapp://send?text=<?php echo $actual_link; ?>" data-action="share/whatsapp/share" target="_blank"><i class="icon-whatsapp"></i></a></li>
                            <li class="social-icon telegram mobile-only"><a rel="nofollow" href="'https://telegram.me/share/url?url=<?php echo $actual_link; ?>&amp;text=<?php echo $prow['title']; ?>" target="_blank"><i class="icon-telegram"></i></a></li>
                        </ul>
                    </div>
                    
                </footer>

             

                <div id="post-navigation" class="content-area post-navigation flex-grid cols-3 has-prev-post has-next-post square-aspect-ratio">
                    <h2 class="screen-reader-text">Post navigation</h2>

                    <?php
		  
         $postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' and id<$post_id limit 1");
   while ($postrow = mysqli_fetch_array($postq)) {
    $prow=$postrow;
             $cid=$postrow['cat_id'];
            $cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
            $cat_url = $cat_row['url'];
           
          ?>
                    <article class="flex-box next-article has-post-thumbnail">

                         
                        <header class="entry-header">
                            <div class="entry-meta before-title prev-next-pill">
                                <span>prev post</span>
                            </div>
                            <h3 class="entry-title"><a href="<?php echo $cat_url ;?>/<?php echo $prow['url'] ;?>"><?php echo $prow['title'] ;?></a></h3>
                        </header>
                    </article>


                </div>

                <?php } ?>
                    <?php
		 
        // $next_post=$post_id+1;
         $postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' and id>$post_id limit 1");
   while ($postrow = mysqli_fetch_array($postq)) {
    $prow=$postrow;
             $cid=$postrow['cat_id'];
            $cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
            $cat_url = $cat_row['url'];
          ?>
                    <article class="flex-box next-article has-post-thumbnail">

                         
                        <header class="entry-header">
                            <div class="entry-meta before-title prev-next-pill">
                                <span>next post</span>
                            </div>
                            <h3 class="entry-title"><a href="<?php echo $cat_url ;?>/<?php echo $prow['url'] ;?>"><?php echo $prow['title'] ;?></a></h3>
                        </header>
                    </article>


                </div>

                <?php } ?>


               

 


            </div><!-- #primary -->
        </main><!-- #main -->

        <?php include 'inc/blog_sidebar.php'; ?>
    </div>




    <?php include 'inc/footer.php'; ?>








    <script defer src="js/main2.js"></script>
    <?php 
  $date = date('Y-m-d');
$ip=$_SERVER['REMOTE_ADDR'];
   $post_id;
  $viewed=mysqli_num_rows(mysqli_query($conn,"select id from pageviews where data_id='$post_id' and type='POST' and view_ip='$ip' and viewed_on='$date' "));
  if($viewed==0)
  {
   

    mysqli_query($conn,"update posts set views=views+1 where id='$post_id'");

    mysqli_query($conn,"insert into pageviews(data_id,type,viewed_on,view_ip) values('$post_id','POST','$date','$ip')");

  }
 //echo mysqli_error($conn)
    




?>
</body>

</html>
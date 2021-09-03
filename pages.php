<?php include './inc/db.php';
$page_id=$_GET['page_id'];
$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));
$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from pages where id='$page_id' or url='$page_id'"));


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/<?php echo basename(__DIR__) ; ?>/">
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
    <meta name="title" content="<?php echo $pRow['title']; ?>">
    <meta name="description" content="<?php  echo $desc = substr($pRow['content'], 0, 25);?>">
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




    <!-- site search -->
    <div class="site-search">
        <span class="toggle-search"><i class="icon-cancel"></i></span>


        <form role="search" method="get" class="search-form" action="http://www.3forty.media/ruki/">
            <label for="search-form-612f401230bde">
                <span class="screen-reader-text">Search for:</span>
            </label>
            <input type="search" id="search-form-612f401230bde" class="search-field" placeholder="Search and press Enter" value="" name="s" />
            <button type="submit" class="search-submit"><i class="icon-search"></i><span class="screen-reader-text">Search</span></button>
        </form>
        <div class="widget widget_tag_cloud">
            <h2 class="widgettitle">Categories</h2>
            <div class="tagcloud"><a href="http://www.3forty.media/ruki/?cat=2" class="tag-cloud-link tag-link-2 tag-link-position-1" style="font-size: 22pt;" aria-label="Art &amp; Design (10 items)">Art &amp; Design<span class="tag-link-count"> (10)</span></a>
                <a href="http://www.3forty.media/ruki/?cat=3" class="tag-cloud-link tag-link-3 tag-link-position-2" style="font-size: 19.846153846154pt;" aria-label="Beauty (9 items)">Beauty<span class="tag-link-count"> (9)</span></a>
                <a href="http://www.3forty.media/ruki/?cat=5" class="tag-cloud-link tag-link-5 tag-link-position-3" style="font-size: 11.769230769231pt;" aria-label="Fashion (6 items)">Fashion<span class="tag-link-count"> (6)</span></a>
                <a href="http://www.3forty.media/ruki/?cat=4" class="tag-cloud-link tag-link-4 tag-link-position-4" style="font-size: 8pt;" aria-label="Lifestyle (5 items)">Lifestyle<span class="tag-link-count"> (5)</span></a>
                <a href="http://www.3forty.media/ruki/?cat=6" class="tag-cloud-link tag-link-6 tag-link-position-5" style="font-size: 11.769230769231pt;" aria-label="Travel (6 items)">Travel<span class="tag-link-count"> (6)</span></a>
            </div>
        </div>
    </div>






    <div class="splash" style="background-color: #fff7f3;">
        <div class="splash-overlay" style="align-items: center;">
            <h2><?php echo $pRow['title']; ?></span></h2>

        </div>



    </div>

    <aside class="mobile-navigation slide-menu sidebar" aria-label="Blog Sidebar">
        <span class="close-menu"><i class="icon-cancel"></i></span>
        <div class="logo-wrapper"><a class="custom-logo-link" href="http://www.3forty.media/ruki/" rel="home"><noscript><img src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/ruki-sidebar-logo.png" alt="Ruki" class="custom-logo" style="max-width: 50%" /></noscript><img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="http://www.3forty.media/ruki/wp-content/uploads/2020/06/ruki-sidebar-logo.png" alt="Ruki" class="lazyload custom-logo" style="max-width: 50%" /></a></div>
        <nav class="primary-nav-sidebar-wrapper">
            <ul id="primary-nav-sidebar" class="primary-nav-sidebar">

                <li class="ruki-subscribe menu-item menu-item-type-post_type menu-item-object-page menu-item-1025"><a href="http://www.3forty.media/ruki/?page_id=1022">Subscribe</a><span class="expand"></span></li>
            </ul>
        </nav>
        <section id="search-2" class="widget-odd widget-first widget-1 widget widget_search">

            <form role="search" method="get" class="search-form" action="http://www.3forty.media/ruki/">
                <label for="search-form-612f5870c92a7">
                    <span class="screen-reader-text">Search for:</span>
                </label>
                <input type="search" id="search-form-612f5870c92a7" class="search-field" placeholder="Search and press Enter" value="" name="s" />
                <button type="submit" class="search-submit"><i class="icon-search"></i><span class="screen-reader-text">Search</span></button>
            </form>
        </section>
        <section id="ruki_social_widget-6" class="widget-even widget-last widget-2 widget ruki_social_widget">
            <ul class="social-icons text-icon brand">
                <li class="social-icon twitter"><a href="#" class="twitter" target="_blank"><span><i class="icon-twitter"></i></span>twitter</a></li>
                <li class="social-icon facebook"><a href="#" class="facebook" target="_blank"><span><i class="icon-facebook"></i></span>facebook</a></li>
                <li class="social-icon instagram"><a href="#" class="instagram" target="_blank"><span><i class="icon-instagram"></i></span>instagram</a></li>
                <li class="social-icon tiktok"><a href="#" class="tiktok" target="_blank"><span><i class="icon-tiktok"></i></span>TikTok</a></li>
                <li class="social-icon odnoklassniki"><a href="#" class="odnoklassniki" target="_blank"><span><i class="icon-odnoklassniki"></i></span>odnoklassniki</a></li>
            </ul>
        </section>
    </aside>

    <div class="wrap">

        <main id="main" class="site-main">
            <div id="primary" class="content-area flex-grid the-post" data-thumbnail="hero">



                <article id="post-22" class="flex-box single-post card has-post-share has-meta-after-title has-meta-before-title has-excerpt disabled-post-video default post-22 post type-post status-publish format-standard has-post-thumbnail hentry category-art-design tag-art tag-creative tag-gutenberg tag-health tag-music tag-travel">

 
                <div class="entry-content">
<?php echo $pRow['content']; ?>
                </div>
                   
                </article><!-- #post-## -->


              


            </div><!-- #primary -->
        </main><!-- #main -->
    </div>


    <?php include 'inc/footer.php'; ?>








    <script defer src="js/main2.js"></script>
</body>

</html>
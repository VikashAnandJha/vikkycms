<?php include './inc/db.php';
$post_id = $_GET['post_id'];
$cat_id = $_GET['cat_id'];
$title=""; $show="post";

$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));



$prow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id' or url='$post_id'"));
  $post_id=$prow['id'];

  $title= $prow['title']; 

  if($cat_id=="category"){
      $show="category";
      
  $title=$cat_id;
  }
   

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
    <title><?php echo $title; ?> - <?php echo $siteInfoRow['site_name']; ?></title>
    <meta name="title" content="<?php echo $prow['title']; ?>">
    <meta name="description" content="<?php echo $desc = substr($prow['content'], 0, 35); ?>">
    <meta name="keywords" content="<?php echo $siteInfoRow['keywords']; ?>">

    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />
    <link href='https://ajax.googleapis.com' rel='preconnect' />
    <link href='https://fonts.googleapis.com' rel='preconnect' />


<?php include 'inc/styles.php' ;?>
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


                       
                            <img   src="./uploads/images/<?php echo $prow['featured_image']; ?>" 
                            data-src="./uploads/images/<?php echo $prow['featured_image']; ?>"
                             class="attachment-ruki-hero-image size-ruki-hero-image wp-post-image lazyloaded" alt="" 
                           
                                  >
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
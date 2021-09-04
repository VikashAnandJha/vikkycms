<?php include './inc/db.php';
$cat_id = $_GET['cat_id'];

$query=$_GET['query'];
$author=$_GET['author'];
$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));


$crow = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cat_id' or url='$cat_id'"));
$cat_id = $crow['id'];

$cat_row = $crow;

$title=$crow['name'];
if($query)$title="Searching:".$query;

if($author)$title="Author:".$author;


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo $siteInfoRow['base_url']; ?>/">
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
    <meta name="title" content="<?php echo $title; ?>">
    <meta name="description" content="browse items in <?php echo $crow['name']; ?>">
    <meta name="keywords" content="<?php echo $siteInfoRow['keywords']; ?>">

    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />
    <link href='https://ajax.googleapis.com' rel='preconnect' />
    <link href='https://fonts.googleapis.com' rel='preconnect' />




    <?php include 'inc/styles.php'; ?>
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





    <?php
    
   $q= "select * from posts where status='PUBLISHED' and cat_id='$cat_id' order by id desc ";

   if($query)
   $q= "select * from posts where status='PUBLISHED' and title like '%$query%' order by id desc ";

   if($author){
    $arow = mysqli_fetch_array(mysqli_query($conn, "select * from authors where id='$author' or username='$author'"));
    $aid= $arow['id'];
    if($aid=='1' || $aid=='-1' || $aid=='0')
    $aid=-1;
      $q= "select * from posts where status='PUBLISHED' and author='$aid'  order by id desc ";

   }
  

    

    $postq = mysqli_query($conn, $q);
    $count = mysqli_num_rows($postq);

    ?>

    <div class="wrap">

    <main id="main" class="site-main">
          

            <header class="container page-header">

                <div class="page-subtitle"><?php echo $count; ?> Posts </div>

                <h1 class="page-title"><?php echo $title; ?></h1>

            </header>

            <div id="primary" class="content-area  the-post" data-thumbnail="hero">

                <div id="masonry-container" class="masonry-container" >





                    <section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">

                        <ol class="list-style-list has-comment-count show-post-count popular-posts">




                            <?php



                            while ($postrow = mysqli_fetch_array($postq)) {
                                $cid = $postrow['cat_id'];
                                $prow = $postrow;
                                $cat_row = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cid'"));
                                $cat_url = $cat_row['url'];

                                $aid = $postrow['author'];
                                $cid = $postrow['cat_id'];
                                $post_id = $postrow['id'];
                                if ($aid == '-1') $aid = 1;
        
        
                                $arow = mysqli_fetch_array(mysqli_query($conn, "select * from authors where id='$aid'"));
                                $author_name = $arow['name'];

                            ?>
                                <li class="widget-entry">


                                    <div class="entry-header">


                                        <a href="<?php echo $cat_url; ?>/<?php echo $prow['url']; ?>" rel="bookmark" class="entry-title-link">
                                            <?php echo $prow['title']; ?></a>
                                            <div class="entry-meta after-title">

<ul>



    <li class="entry-author-meta">

        <span class="screen-reader-text">Posted by</span><i>by</i>
        <a href="search.php?author=<?php echo $arow['username']; ?>"><?php echo $author_name; ?></a>

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



                                    </div>

                                </li>
                            <?php } ?>




                        </ol>
                    </section>



                </div>

            </div><!-- #primary -->
        </main>

        <?php include 'inc/blog_sidebar.php'; ?>
    </div>




    <?php include 'inc/footer.php'; ?>








    <script defer src="js/main2.js"></script>

</body>

</html>
<aside class="aside-sidebar sidebar" aria-label="Blog Sidebar">
    <div class="aside-sticky-container">
    <section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
            <h3 class="widget-title">Most Read</h3>
            <ol class="list-style-list has-comment-count show-post-count popular-posts">

            


            <?php
		 
         $postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' order by views desc limit 5");

          
       

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


 

            </ol>
        </section>
        <section id="ruki_posts_widget-4" class="widget-odd widget-last widget-first widget-1 widget ruki_posts_widget">
            <h3 class="widget-title">Recent Post</h3>
            <ol class="list-style-list has-comment-count show-post-count popular-posts">

            
            <?php
		 
         $postq = mysqli_query($conn, "select * from posts where status='PUBLISHED' order by id desc limit 5");

          
       

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


            </ol>
        </section>
       

       
    </div>

</aside>
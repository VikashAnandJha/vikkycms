<div class="box box-info">
                                        <div class="box-header with-border p-t-1">
                                            <h3 class="box-title text-black">Posts</h3>
                                            <div class="pull-right"> <a href="create.php?type=post" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>New Post</a> </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <style>
                                            .badge-light{
                                                color: black;
                                            }
                                        </style>
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>PostID</th>
                                                            <th>title</th>
                                                            <th>Category</th>
                                                            <th>Todayviews</th>
                                                            <th>Totalviews</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $pq="select * from posts";

                                                        if($type=='AUTHOR')$pq=$pq. "  where author='$uid' ";

                                                        $pq=$pq. "  order by id desc";
                                                        $aq = mysqli_query($conn,$pq );
                                                        $date = date('Y-m-d');

                                                        while ($arow = mysqli_fetch_array($aq)) {
                                                            $cat_id=$arow['cat_id'];
                                                            $catrow=mysqli_fetch_array(mysqli_query($conn,"select * from categories where id='$cat_id'"));

                                                             if($cat_id==0) $cat_name="UNCATEGORIZED";
                                                             else
                                                             $cat_name=$catrow['name'];
                                                             $post_id = $arow['id'];
                                                             $todayViews=mysqli_num_rows(mysqli_query($conn,"select * from pageviews where data_id='$post_id' and type='POST' and viewed_on='$date'"));

                                                        ?>
                                                            <tr>
                                                                <td><a href="posts.php?post_id=<?php echo $arow['id']; ?>&show=edit"><?php echo $arow['id']; ?></a></td>
                                                                <td><?php echo $arow['title']; ?></td>
                                                                <td><?php echo $cat_name; ?></td>
                                                                <td><?php echo $todayViews; ?></td>
                                                                <td><?php echo $arow['views']; ?></td>
                                                                <td><span class="badge bg-<?php if($arow['status']=="PUBLISHED") 
                                                                echo "green";if($arow['status']=="HIDDEN") echo "red";if($arow['status']=="DRAFT") echo "aqua"; ?>">
                                                                <?php echo $arow['status']; ?></span></td>

                                                            </tr>

                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.box-body -->
                                        <!-- /.box-footer -->
                                    </div>
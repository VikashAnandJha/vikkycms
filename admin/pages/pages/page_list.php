<div class="box box-info">
                                        <div class="box-header with-border p-t-1">
                                            <h3 class="box-title text-black">Pages Management</h3>
                                            <div class="pull-right"> <a href="create.php?type=page" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add new Page</a> </div>
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
                                                            <th>PageID</th>
                                                            <th>title</th>
                                                            <th>views</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $aq = mysqli_query($conn, "select * from pages order by id desc");
 

                                                        while ($arow = mysqli_fetch_array($aq)) {


                                                        ?>
                                                            <tr>
                                                                <td><a href="pages.php?page_id=<?php echo $arow['id']; ?>&show=edit"><?php echo $arow['id']; ?></a></td>
                                                                <td><?php echo $arow['title']; ?></td>
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
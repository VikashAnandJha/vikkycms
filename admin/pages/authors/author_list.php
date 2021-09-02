<div class="box box-info">
                                        <div class="box-header with-border p-t-1">
                                            <h3 class="box-title text-black">Author Management</h3>
                                            <div class="pull-right"> <a href="create.php?type=author" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add new author</a> </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>name</th>
                                                            <th>role</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $aq = mysqli_query($conn, "select * from authors order by id desc");

                                                        echo "found: ".mysqli_num_rows($aq);

                                                        while ($arow = mysqli_fetch_array($aq)) {


                                                        ?>
                                                            <tr>
                                                                <td><a href="authors.php?id=<?php echo $arow['id']; ?>&show=edit"><?php echo $arow['id']; ?></a></td>
                                                                <td><?php echo $arow['name']; ?></td>
                                                                <td><?php echo $arow['role']; ?></td>
                                                                <td><span class="label label-<?php if($arow['status']=="ACTIVE") echo "success";if($arow['status']=="BLOCKED") echo "danger"; ?>"><?php echo $arow['status']; ?></span></td>

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
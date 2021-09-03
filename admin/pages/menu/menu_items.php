<?php
$action = $_GET['action'];
$menu_id = $_GET['menu_id'];

$name = $_POST['name'];
if ($action == "create_menu" && $name) {

    $q = mysqli_query($conn, "insert into menu_list(name,status) values('$name','HIDDEN')");
    if ($q) echo "<font color=green><b>Menu List Created</font>";
    else
        echo mysqli_error($conn);
}
if ($action == "set_primary" && $menu_id) {

    $q = mysqli_query($conn, "update menu_list set status='ACTIVE' where id='$menu_id'");
    $q = mysqli_query($conn, "update menu_list set status='HIDDEN' where id!='$menu_id'");
    if ($q) echo "<font color=green><b>Menu Activated</font>";
    else
        echo mysqli_error($conn);
}

?>


<div class="box box-info">
    <div class="box-header with-border p-t-1">
        <h3 class="box-title text-black">Menu Items</h3>
        <div class="pull-right"> <a href="create.php?type=menu" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Create Menu</a> </div>
  
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>MenuItemID</th>
                            <th>display_text</th>
                            <th>open_type</th>
                            <th>connected_data</th>
                            <th>item_order</th>
                            <th>list_name</th>

                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $aq = mysqli_query($conn, "select * from menu_items order by id desc");



                        while ($arow = mysqli_fetch_array($aq)) {


                        ?>
                            <tr>
                                <td>     
                                    <a href="menu.php?show=edit&item_id=<?php echo $arow['id']; ?>"><?php echo $arow['id']; ?></a>
                             </td>
                                <td><?php echo $arow['display_text']; ?></td>
                                <td><?php echo $arow['open_type']; ?></td>
                                <td><?php echo $arow['connected_data']; ?></td>
                                <td><?php echo $arow['item_order']; ?></td>
                                <td><?php echo $arow['menu_list_id']; ?></td>

                                <td>
                                    <a href="menu.php?show=items&action=delete&item_id=<?php echo $arow['id']; ?>"><i class="fa fa-trash"></i></a>
                                </td>

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
</div>
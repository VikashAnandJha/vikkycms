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

<div class="box">
    <div class="box-body">
        <h3>Add New Menu Item</h3>
        <form method="post" action="?show=list&action=create_menu">
            <div class="row">
                <div class="col-lg-3">
                    <fieldset class="form-group">
                        <label>Display Text</label>
                        <input class="form-control" type="text" name="display_text" style="max-width: 250px;">
                         
                    </fieldset>
                </div>
                <div class="col-lg-2">
                    open_type
                    <select class="form-control" name="open_type">
                        <option <?php if ($aRow['role'] == "PAGE") echo "selected"; ?>>PAGE</option>
                        <option <?php if ($aRow['role'] == "POST") echo "selected"; ?>>POST</option>
                        <option <?php if ($aRow['role'] == "LINK") echo "selected"; ?>>LINK</option>
                        <option <?php if ($aRow['role'] == "CATEGORY") echo "selected"; ?>>CATEGORY</option>
                        <option <?php if ($aRow['role'] == "TAG") echo "selected"; ?>>TAG</option>

                        <option <?php if ($aRow['role'] == "SUBSCRIBER") echo "selected"; ?>>SUBSCRIBER</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <fieldset class="form-group">
                        <label>ORDER</label>
                        <input class="form-control" type="number" name="item_order">
                      
                    </fieldset>
                </div>
                <div class="col-lg-2">
                    <fieldset class="form-group">
                        <label>connected_data</label>
                        <input class="form-control" type="number" name="connected_data">
                      
                    </fieldset>
                </div>
                <div class="col-lg-4">
                   Add To List

<select name="menu_list_id"> 
                   <?php 

$cbq=mysqli_query($conn,"select * from menu_list order by name asc");



while ($crow=mysqli_fetch_array($cbq)) {
     
   ?>
   
 <option value="<?php echo $crow['id'] ;?>" <?php if($row['menu_list_id']==$crow['id']) echo "selected"; ?>><?php echo $crow['name'] ;?></option>
 
 
   <?php
}?>
</select>
                </div>

            </div>
            <input type="submit" value="Add Menu" class="btn btn-primary btn-sm" />

        </form>

    </div>
</div>
<div class="box box-info">
    <div class="box-header with-border p-t-1">
        <h3 class="box-title text-black">Menu Items</h3>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>MenuItemID</th>
                            <th>display_test</th>
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
                                <td><?php echo $arow['id']; ?></td>
                                <td><?php echo $arow['display_test']; ?></td>
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
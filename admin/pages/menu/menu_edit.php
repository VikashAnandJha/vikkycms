<?php
$item_id=$_GET['item_id'];



$display_text = $_POST['display_text'];
if ($_GET['update'] == "yes" && $display_text) {

    $menu_list_id = $_POST['menu_list_id'];
    $open_type = $_POST['open_type'];
    $item_order = $_POST['item_order'];
    $connected_data = $_POST['connected_data']; 
    $parent_id = $_POST['parent_id']; 
    $status = $_POST['status']; 

    $updateQ = mysqli_query($conn, "update menu_items set status='$status',display_text='$display_text',menu_list_id='$menu_list_id',open_type='$open_type',item_order='$item_order',connected_data='$connected_data',parent_id='$parent_id' where id='$item_id' ");

    if ($updateQ) echo "<font color=green>Updated</font>";
    else {
        echo mysqli_error($conn);
    }
}






 $mRow = mysqli_fetch_array(mysqli_query($conn, "select * from menu_items where id='$item_id'"));

 ?>

<div class="box">
    <div class="box-body">
        <a href="menu.php?show=items">Back To Menu Items</a>
        <h3>Add New Menu Item</h3>
        <form method="post" action="?show=edit&update=yes&item_id=<?php echo $item_id; ?>">
            <div class="row">
                <div class="col-lg-3">
                    <fieldset class="form-group">
                        <label>Display Text</label>
                        <input class="form-control" type="text" name="display_text" style="max-width: 250px;" value="<?php echo $mRow['display_text']; ?>">

                    </fieldset>
                </div>
                <div class="col-lg-3">
                   Parent
<br>
                    <select name="parent_id" class="form-control" >
                        <option value="0">NO_PARENT</option>
                        <?php

                        $cbq = mysqli_query($conn, "select * from menu_items where id!='$item_id' order by display_text asc");



                        while ($crow = mysqli_fetch_array($cbq)) {

                        ?>

                            <option value="<?php echo $crow['id']; ?>" <?php if ($row['parent_id'] == $crow['id']) echo "selected"; ?>><?php echo $crow['display_text']; ?></option>


                        <?php
                        } ?>
                    </select>
                </div>
                <div class="col-lg-2">
                    open_type
                    <select class="form-control" name="open_type">
                        <option <?php if ($mRow['open_type'] == "PAGE") echo "selected"; ?>>PAGE</option>
                        <option <?php if ($mRow['open_type'] == "POST") echo "selected"; ?>>POST</option>
                        <option <?php if ($mRow['open_type'] == "LINK") echo "selected"; ?>>LINK</option>
                        <option <?php if ($mRow['open_type'] == "CATEGORY") echo "selected"; ?>>CATEGORY</option>
                        <option <?php if ($mRow['open_type'] == "TAG") echo "selected"; ?>>TAG</option> 
                    </select>
                </div>

                <div class="col-lg-1">
                    <fieldset class="form-group">
                        <label>ORDER</label>
                        <input class="form-control" type="number" name="item_order" value="<?php echo $mRow['item_order']; ?>">

                    </fieldset>
                </div>
                <div class="col-lg-2">
                    <fieldset class="form-group">
                        <label>connected_data</label>
                        <input class="form-control" type="number" name="connected_data" value="<?php echo $mRow['connected_data']; ?>">

                    </fieldset>
                </div>
                <div class="col-lg-2">
                    Add To List

                    <select name="menu_list_id" class="form-control" >
                        <?php

                        $cbq = mysqli_query($conn, "select * from menu_list order by name asc");



                        while ($crow = mysqli_fetch_array($cbq)) {

                        ?>

                            <option value="<?php echo $crow['id']; ?>" <?php if ($row['menu_list_id'] == $crow['id']) echo "selected"; ?>><?php echo $crow['name']; ?></option>


                        <?php
                        } ?>
                    </select>
                </div>

                <div class="col-lg-2">
                    STATUS
                    <select class="form-control" name="status">
                        <option <?php if ($mRow['status'] == "ACTIVE") echo "selected"; ?>>ACTIVE</option>
                        <option <?php if ($mRow['status'] == "HIDDEN") echo "selected"; ?>>HIDDEN</option> 
                    </select>
                </div>

            </div>
            <input type="submit" value="Update Menu" class="btn btn-primary btn-sm" />

        </form>

    </div>
</div>
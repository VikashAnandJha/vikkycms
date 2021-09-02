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

            <form method="post" action="?show=list&action=create_menu">
            <div class="row">
            <div class="col-lg-3">
        <fieldset class="form-group">
                    <label>Menu Name</label>
                    <input class="form-control" type="text" name="name" style="max-width: 250px;">
                    <input type="submit" value="Create New List" class="btn btn-primary btn-sm"/>
                </fieldset>
        </div>
        
</div>

              
            </form>
       
</div>
</div>
<div class="box box-info">
    <div class="box-header with-border p-t-1">
        <h3 class="box-title text-black">Menu Lists</h3>
       
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>MenuID</th>
                            <th>name</th>
                            <th>status</th>

                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $aq = mysqli_query($conn, "select * from menu_list order by id desc");

                      

                        while ($arow = mysqli_fetch_array($aq)) {


                        ?>
                            <tr>
                                <td><?php echo $arow['id']; ?></td>
                                <td><?php echo $arow['name']; ?></td>

                                <td><span class="label label-<?php if ($arow['status'] == "ACTIVE") echo "success";
                                                                if ($arow['status'] == "BLOCKED") echo "danger"; ?>"><?php echo $arow['status']; ?></span></td>
                                <td>
                                    <a href="menu.php?show=list&action=set_primary&menu_id=<?php echo $arow['id']; ?>">Make ACTIVE</a>
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
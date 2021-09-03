<?php
$cat_id=$_GET['cat_id'];



$name = $_POST['name'];
if ($_GET['update'] == "yes" && $name) {

    $about = $_POST['about']; 
    $status = $_POST['status']; 
    
    $url=createSlug($name, $delimiter = '-');
    $url = substr($url, 0, 25); //first 5 chars "Hello"


    $updateQ = mysqli_query($conn, "update categories set status='$status',name='$name',about='$about',url='$url' where id='$cat_id' ");

    if ($updateQ) echo "<font color=green>Updated</font>";
    else {
        echo mysqli_error($conn);
    }
}






 $mRow = mysqli_fetch_array(mysqli_query($conn, "select * from categories where id='$cat_id'"));

 $siteRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata "));
 ?>

<div class="box">
    <div class="box-body">
        <a href="categories.php?show=list">Back To Categories</a>
        <h3>Add New CATEGORY</h3>
        <form method="post" action="?show=edit&update=yes&cat_id=<?php echo $cat_id; ?>">
            <div class="row">
                <div class="col-lg-3">
                    <fieldset class="form-group">
                        <label>name</label>
                        <input class="form-control" type="text" name="name" style="max-width: 250px;" value="<?php echo $mRow['name']; ?>">
                        <br>
<small>
    <i>CatID:<?php echo $cat_id; ?> | <a target="_blank" href="<?php echo $siteRow['base_url']; ?>/category/<?php echo $mRow['url']; ?>"><?php echo $siteRow['base_url']; ?>/category/<?php echo $mRow['url']; ?></a></i>
</small>
                    </fieldset>
                </div>
                 
               

                
                <div class="col-lg-4">
                    <fieldset class="form-group">
                        <label>about</label>
                        <input class="form-control" type="text" name="about" value="<?php echo $mRow['about']; ?>">

                    </fieldset>
                </div>
                

                <div class="col-lg-2">
                    STATUS
                    <select class="form-control" name="status">
                        <option <?php if ($mRow['status'] == "ACTIVE") echo "selected"; ?>>ACTIVE</option>
                        <option <?php if ($mRow['status'] == "HIDDEN") echo "selected"; ?>>HIDDEN</option> 
                    </select>
                </div>

            </div>
            <input type="submit" value="Update" class="btn btn-primary btn-sm" />

        </form>

    </div>
</div>
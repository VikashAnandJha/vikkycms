<?php
$post_id = $_GET['post_id'];


$upload_type = $_GET['upload_type'];

$title = $_POST['title'];
if ($_GET['update'] == "yes" && $title) {


    $content = $_POST['content'];
    $status = $_POST['status'];
    $cat_id = $_POST['cat_id'];
    $url = $_POST['url'];
    if (!$url) {
        $url = createSlug($title, $delimiter = '-');
        $url = substr($url, 0, 25); //first 5 chars "Hello"

    }

    $updateQ = mysqli_query($conn, "update posts set cat_id='$cat_id', last_edit='$current_time',url='$url',content='$content',title='$title',status='$status' where id='$post_id' ");

    if ($updateQ) echo "<font color=green>Page Updated</font>";
    else {
        echo mysqli_error($conn);
    }
}
//upload featured Image

if ($_GET['update'] == "yes" && $upload_type) {
 
    if (isset($_FILES['image'])) {


        // $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

        $expensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($file_ext, $expensions) === false) {
            $msg = "extension not allowed, please choose a image FILE ";
            $error = 1;
        }

        if ($file_size > 5 * 2097152) {
            $msg = 'File size must be less than 5 MB';
            $error = 1;
        }

        if ($error != 1) {
            $file_name = rand() . $file_name;
            $logoFile = $file_name;
            if (move_uploaded_file($file_tmp, "../uploads/images/" . $file_name)) {



                $time = date('d-m-Y H:i A');

                if ($upload_type == "featured_image")
                    $updateQ = mysqli_query($conn, "update posts set featured_image='$file_name' where id='$post_id' ");
                  
                $galleryQ = mysqli_query($conn, "insert into uploads(type,file,uploaded_by,uploaded_on) values('IMAGE','$file_name','-1','$time')");

                if ($updateQ) echo "<font color=green><b>Updated</b></font>";
            }
        }
    }
}





$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id'"));
$siteRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata "));

?>
<form method="post" action="?show=edit&update=yes&post_id=<?php echo $post_id; ?>">

    <div class="row">
        <div class="col-lg-9">
            <fieldset class="form-group">
                <label>Post Title</label>
                <input class="form-cont0rol" type="text" name="title" value="<?php echo $pRow['title']; ?>" style="width: 100%;">

            </fieldset>

            <b> Permalink:</b><?php echo $siteRow['base_url']; ?>/posts/ <input class="form-cont0rol" type="text" name="url" value="<?php echo $pRow['url']; ?>">
            <br>


            <textarea id="summernote" style="max-width: 100%;height: 500px;" name="content"><?php echo $pRow['content']; ?></textarea>
            <script>
                $(document).ready(function() {
                    $('#summernote').summernote({
                        height: '500px'
                    });
                });
            </script>
        </div>
        <div class="col-lg-2">



            <div class="card">
                <div class="card-body">

                    <div class="card-title">Publish Options</div>
                    CATEGORY
                    <br>
                    <select name="cat_id" class="for0m-control">
                        <option value="0">UNCATEGORISED</option>
                        <?php

                        $cbq = mysqli_query($conn, "select * from categories order by name asc");



                        while ($crow = mysqli_fetch_array($cbq)) {

                        ?>

                            <option value="<?php echo $crow['id']; ?>" <?php if ($pRow['cat_id'] == $crow['id']) echo "selected"; ?>><?php echo $crow['name']; ?></option>


                        <?php
                        } ?>
                    </select>
                    <fieldset class="form-group">
                        <label>Visiblity</label><br>
                        <select name="status" class="form-co0ntrol">
                            <option <?php if ($pRow['status'] == "DRAFT") echo "selected"; ?>>DRAFT</option>
                            <option <?php if ($pRow['status'] == "PUBLISHED") echo "selected"; ?>>PUBLISHED</option>

                        </select>
                        <br><br>
                        <button class="btn btn-primary btn-sm  " type="submit">UPDATE</button>
                    </fieldset>
                    <hr>
                    <a target="_blank" href="<?php echo $siteRow['base_url']; ?>/posts/<?php echo $pRow['url']; ?>">View Post</a>
                </div>
            </div>
            
</form>
            <div class="card">
                <div class="card-body">
 

                    <form method="post" action="?update=yes&show=edit&upload_type=featured_image&post_id=<?php echo $post_id; ?>" enctype="multipart/form-data">
                        <fieldset class="form-group">
                            <label>Featured Image</label>
                            <input type="file" class="dropify" name="image" data-default-file="../uploads/images/<?php echo $pRow['featured_image']; ?>" />

                        </fieldset>
                        <input type="submit" value="update" class="btn btn-primary">
                    </form>


                </div>
            </div>


        </div>
    </div>
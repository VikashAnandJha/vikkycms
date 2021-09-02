<?php

$id = $_GET['id'];
$name = $_POST['name'];

if ($_GET['update'] == "yes" && $name) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $about = $_POST['about'];
    $password = $_POST['password'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $updateQ = mysqli_query($conn, "update authors set name='$name',username='$username',email='$email',about='$about',password='$password',facebook='$facebook',twitter='$twitter',instagram='$instagram',role='$role',status='$status' where id='$id' ");

    if ($updateQ) echo "<font color=green>Updated</font>";
    else {
        echo mysqli_error($conn);
    }
}

$upload_type = $_GET['upload_type'];
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

                if ($upload_type == "avatar")
                    $updateQ = mysqli_query($conn, "update authors set avatar='$file_name' where id='$id' ");

                $galleryQ = mysqli_query($conn, "insert into uploads(type,file,uploaded_by,uploaded_on) values('IMAGE','$file_name','-1','$time')");

                if ($updateQ) echo "<font color=green><b>Updated</b></font>";
            }
        }
    }
}



$aRow = mysqli_fetch_array(mysqli_query($conn, "select * from authors where id='$id'"));
?>

<div style="width: 200px; ">
    <form method="post" action="?update=yes&show=edit&upload_type=avatar&id=<?php echo $id; ?>" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label>User Avatar</label>
            <input type="file" class="dropify" name="image" data-default-file="../uploads/images/<?php echo $aRow['avatar']; ?>" data-max-width="512" />

        </fieldset>
        <input type="submit" value="update" class="btn btn-primary">
    </form>
</div>
<hr>

<form method="post" action="?update=yes&show=edit&id=<?php echo $id; ?>">
    <fieldset class="form-group">
        <label> name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $aRow['name']; ?>">
    </fieldset>
    <fieldset class="form-group">
        <label> username</label>
        <input class="form-control" type="text" name="username" value="<?php echo $aRow['username']; ?>">
    </fieldset>
    <fieldset class="form-group">
        <label>email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $aRow['email']; ?>">
    </fieldset>
    <fieldset class="form-group">
        <label>password</label>
        <input class="form-control" type="password" name="password" value="<?php echo $aRow['password']; ?>">
    </fieldset>
    <fieldset class="form-group">
        <label>about</label>
        <textarea class="form-control" id="placeTextarea" rows="4" placeholder="about user" name="about"><?php echo $aRow['about']; ?></textarea>
    </fieldset>
    <div class="row">
        <div class="col-lg-3">
            <fieldset class="form-group">
                <label>facebook</label>
                <input class="form-control" type="text" name="facebook" value="<?php echo $aRow['facebook']; ?>">
            </fieldset>
        </div>
        <div class="col-lg-3">
            <fieldset class="form-group">
                <label>twitter</label>
                <input class="form-control" type="text" name="twitter" value="<?php echo $aRow['twitter']; ?>">
            </fieldset>
        </div>
        <div class="col-lg-3">
            <fieldset class="form-group">
                <label>instagram</label>
                <input class="form-control" type="text" name="instagram" value="<?php echo $aRow['instagram']; ?>">
            </fieldset>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-3">
            User Role
            <select class="form-control" name="role">
                <option <?php if ($aRow['role'] == "ADMIN") echo "selected"; ?>>ADMIN</option>
                <option <?php if ($aRow['role'] == "EDITOR") echo "selected"; ?>>EDITOR</option>
                <option <?php if ($aRow['role'] == "AUTHOR") echo "selected"; ?>>AUTHOR</option>
                <option <?php if ($aRow['role'] == "USER") echo "selected"; ?>>USER</option>

                <option <?php if ($aRow['role'] == "SUBSCRIBER") echo "selected"; ?>>SUBSCRIBER</option>
            </select>
        </div>
        <div class="col-lg-3">
            User status
            <select class="form-control" name="status">
                <option <?php if ($aRow['status'] == "ACTIVE") echo "selected"; ?>>ACTIVE</option>
                <option <?php if ($aRow['status'] == "BLOCKED") echo "selected"; ?>>BLOCKED</option>
            </select>
        </div>
    </div>
    <br>    
    <input type="submit" value="update" class="btn btn-primary">

</form>
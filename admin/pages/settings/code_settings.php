<?php
  $common_code = addslashes($_POST['common_code']);
if ($_GET['update'] == "yes" && $common_code ) {


    $updateQ = mysqli_query($conn, "update website_metadata set common_code='$common_code' ");

   
    if ($updateQ) echo "<font color=green><b>Updated</b></font>";

}

$siteInfoRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata where id='1'"));
?>
<form method="post" action="?update=yes&show=code"  >
    <fieldset class="form-group">
        <label>Common code</label>
        <textarea rows="10" style="width: 100%;" name="common_code"><?php echo $siteInfoRow['common_code']; ?></textarea>
    </fieldset>
    <input type="submit" value="update" class="btn btn-primary">
</form>
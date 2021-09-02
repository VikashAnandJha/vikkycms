<?php

$title=$_POST['title'];

if($_GET['update']=="yes" && $title)
{

    $site_name=$_POST['site_name'];
    $description=$_POST['description'];
    $keywords=$_POST['keywords'];
    $copyright_text=$_POST['copyright_text'];

    $updateQ=mysqli_query($conn,"update website_metadata set site_name='$site_name',title='$title',description='$description',keywords='$keywords',copyright_text='$copyright_text' ");

    if($updateQ) echo "<font color=green>Updated</font>";
}



$siteInfoRow=mysqli_fetch_array(mysqli_query($conn,"select * from website_metadata where id='1'"));
 ?>

<form method="post" action="?update=yes&show=metadata">
<fieldset class="form-group">
              <label> name</label>
              <input class="form-control"   type="text" name="site_name" value="<?php echo $siteInfoRow['site_name']; ?>">
            </fieldset>
            <fieldset class="form-group">
              <label> title</label>
              <input class="form-control"   type="text" name="title" value="<?php echo $siteInfoRow['title']; ?>">
            </fieldset>
            <fieldset class="form-group">
              <label>Description</label>
              <textarea class="form-control" id="placeTextarea" rows="4" placeholder="Website Description" name="description"><?php echo $siteInfoRow['description']; ?></textarea>
            </fieldset>  
            <fieldset class="form-group">
              <label>Keywords</label>
              <textarea class="form-control" id="placeTextarea" rows="4" placeholder="Website Keywords" name="keywords" ><?php echo $siteInfoRow['keywords']; ?></textarea>
            </fieldset>
           
             
            <fieldset class="form-group">
              <label>Copyright</label>
              <input class="form-control"   type="text" name="copyright_text" value="<?php echo $siteInfoRow['copyright_text']; ?>">
            </fieldset>
            <input type="submit" value="update" class="btn btn-primary">
            
</form>
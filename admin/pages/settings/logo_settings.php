<?php
$upload_type=$_GET['upload_type'];
if($_GET['update']=="yes" && $upload_type)
{
   
    if(isset($_FILES['image'])){ 

      
        // $errors= array();
         $file_name = $_FILES['image']['name'];
         $file_size =$_FILES['image']['size'];
         $file_tmp =$_FILES['image']['tmp_name'];
         $file_type=$_FILES['image']['type'];
         $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
         
         $expensions= array("jpg","jpeg","png","gif");
         
         if(in_array($file_ext,$expensions)=== false){
            $msg="extension not allowed, please choose a image FILE ";
            $error=1;
         }
         
         if($file_size >5* 2097152){
            $msg='File size must be less than 5 MB';
            $error=1;
         }
         
         if($error!=1){
            $file_name=rand().$file_name;
            $logoFile=$file_name;
            if( move_uploaded_file($file_tmp,"../uploads/images/".$file_name))
            {
   
   
    
   $time=date('d-m-Y H:i A');
   
   if($upload_type=="web_logo")
   $updateQ=mysqli_query($conn,"update website_metadata set web_logo='$file_name' ");
   if($upload_type=="mob_logo")
   $updateQ=mysqli_query($conn,"update website_metadata set mob_logo='$file_name' ");
   if($upload_type=="favicon")
   $updateQ=mysqli_query($conn,"update website_metadata set favicon='$file_name' ");
  
$galleryQ=mysqli_query($conn,"insert into uploads(type,file,uploaded_by,uploaded_on) values('IMAGE','$file_name','-1','$time')");

    if($updateQ) echo "<font color=green><b>Updated</b></font>";
   
           }
   
   }
   
   
   }
   
   
   if($firstImage)
   {
    
      header("location:submit_car.php?oid=".$oid."&type=basic&succ=1&msg=Picture UPLOADED"); 
   }


}


$siteInfoRow=mysqli_fetch_array(mysqli_query($conn,"select * from website_metadata where id='1'"));
?> 

<style>
    .dropify-wrapper{
    width: 250px;
    max-width: 250px;;
    }
</style>
<form method="post" action="?update=yes&show=logo&upload_type=web_logo" enctype="multipart/form-data">
<fieldset class="form-group">
              <label>Main Logo</label>
                <input type="file" class="dropify" name="image" data-default-file="../uploads/images/<?php echo $siteInfoRow['web_logo']; ?>"  />

            </fieldset>
<input type="submit" value="update" class="btn btn-primary">
</form>
<form method="post" action="?update=yes&show=logo&upload_type=mob_logo" enctype="multipart/form-data">
<fieldset class="form-group">
              <label>Mobile Logo</label>
                <input type="file" class="dropify" name="image" data-default-file="../uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>" data-max-width="200"  />

            </fieldset>
<input type="submit" value="update" class="btn btn-primary">
</form>
<form method="post" action="?update=yes&show=logo&upload_type=favicon" enctype="multipart/form-data">
<fieldset class="form-group">
              <label>Favicon</label>
                <input type="file" class="dropify" name="image" data-default-file="../uploads/images/<?php echo $siteInfoRow['favicon']; ?>" data-max-width="32"   />

            </fieldset>
<input type="submit" value="update" class="btn btn-primary">
</form>


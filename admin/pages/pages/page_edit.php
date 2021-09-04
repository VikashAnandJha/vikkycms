<?php
$page_id=$_GET['page_id'];



$title = $_POST['title'];
if ($_GET['update'] == "yes" && $title) {

    $url=createSlug($title, $delimiter = '-');
    $url = substr($url, 0, 25); //first 5 chars "Hello"

    $content = $_POST['content']; 
    $status = $_POST['status']; 
    $url = $_POST['url']; 
    if(!$url){
        $url=createSlug($title, $delimiter = '-');
        $url = substr($url, 0, 25); //first 5 chars "Hello"
    
    }
    $updateQ = mysqli_query($conn, "update pages set  url='$url',content='$content',title='$title',status='$status' where id='$page_id' ");

    if ($updateQ) echo "<font color=green>Page Updated</font>";
    else {
        echo mysqli_error($conn);
    }
}






$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from pages where id='$page_id'"));
$siteRow = mysqli_fetch_array(mysqli_query($conn, "select * from website_metadata "));
 

 ?>
  <form method="post" action="?show=edit&update=yes&page_id=<?php echo $page_id; ?>">
        
    <div class="row">
    <div class="col-lg-9">
    <fieldset class="form-group"  >
                        <label>Page Title</label>
                        <input class="form-cont0rol" type="text" name="title"   value="<?php echo $pRow['title']; ?>" style="width: 100%;">
 
                    </fieldset>
    
                    <b> Permalink:</b><?php echo $siteRow['base_url']; ?>/pages/ <input class="form-cont0rol" type="text" name="url"   value="<?php echo $pRow['url']; ?>"  >
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
    <fieldset class="form-group">
        <label>visiblity</label><br>
        <select name="status" class="form-co0ntrol" >
                        <option <?php if ($pRow['status'] == "DRAFT") echo "selected"; ?>>DRAFT</option>
                        <option <?php if ($pRow['status'] == "PUBLISHED") echo "selected"; ?>>PUBLISHED</option>
                        
                    </select> 
       <br><br>
       <a target="_blank" href="<?php echo $siteRow['base_url']; ?>/pages/<?php echo $pRow['url']; ?>">View Post</a>
               <br>
        <button class="btn btn-primary btn-sm  " type="submit">UPDATE</button>
    </fieldset>
                            </div>
   </div>

    </div>
    </div>
  </form>

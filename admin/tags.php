<?php include 'secure.php'; ?>
<!DOCTYPE html>
<html lang="en">

 <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tags < VikkyCMS Admin</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">

<!-- Chartist CSS -->
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist.min.css">
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist-plugin-tooltip.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
 <?php include 'header.php' ;?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include 'left.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Blank page</h1>
      <ol class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Tags</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
      <?php
$action = $_GET['action'];
$tag_id = $_GET['tag_id']; 
$name = $_POST['name']; 
if ($action == "delete" && $tag_id) {

    $q = mysqli_query($conn, "delete from tags_in_post where tag_id='$tag_id'");
    $q = mysqli_query($conn, "delete from tags where id='$tag_id'");
    if ($q) echo "<font color=red><b>TAG removed</b></font>";
    else
        echo mysqli_error($conn);
}

if ($action == "add" && $name) {

    $url=createSlug($name, $delimiter = '-');
    $url = substr($url, 0, 25); //first 5 chars "Hello"
    $q=mysqli_query($conn,"insert into tags(name,url,created_by) values('$name','$url','-1')");

    if ($q) echo "<font color=green><b>TAG Added</b></font>";
    else
        echo mysqli_error($conn);
}
 

?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             <div class="box box-info">
                             <div class="box-body">
                             <form method="post" action="?action=add">
    <fieldset class="form-group">
        <label> Tag name</label>
        <input class="form-0control" type="text" name="name" value="<?php echo $aRow['name']; ?>" required>
        
    <input type="submit" value="Create" class="btn btn-sm btn-primary">
    </fieldset>
   
                             </form>
                             </div>
                             </div>
                            <div class="box box-info">
                                        <div class="box-header with-border p-t-1">
                                            <h3 class="box-title text-black">Tags Management</h3>
                                        
                                        </div>
                                        <!-- /.box-header -->
                                        <style>
                                            .badge-light{
                                                color: black;
                                            }
                                        </style>
                                        
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>TagID</th>
                                                            <th>NAME</th>
                                                            <th>URL</th>
                                                            
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $aq = mysqli_query($conn, "select * from tags order by id desc");
 

                                                        while ($arow = mysqli_fetch_array($aq)) {


                                                        ?>
                                                            <tr>
                                                                <td><?php echo $arow['id']; ?></td>
                                                                <td><?php echo $arow['name']; ?></td>
                                                                <td><?php echo $arow['url']; ?></td>
                                                                <td>   
                                                                     <a href="tags.php?show=list&action=delete&tag_id=<?php echo $arow['id']; ?>"><i class="fa fa-trash"></i></a>
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
                        </div>
                    </div>
                </div>
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
 <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>
 
<script src="dist/plugins/popper/popper.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- Chart Peity JavaScript --> 
<script src="dist/plugins/peity/jquery.peity.min.js"></script> 
<script src="dist/plugins/functions/jquery.peity.init.js"></script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:44 GMT -->
</html>

<?php include 'secure.php'; ?>
<!DOCTYPE html>
<html lang="en">

 <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Posts < VikkyCMS Admin</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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
        <li><i class="fa fa-angle-right"></i>Posts</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php
                                    $show=$_GET['show'];
                                    if($show=="edit")
                                    {
                                        include 'pages/posts/post_edit.php';
                                    }else{
                                        include 'pages/posts/post_list.php';
                                    }
                                    
                                    
                                    
                                    ?>
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
 
<script src="dist/plugins/popper/popper.min.js"></script>
 

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- Chart Peity JavaScript --> 
<script src="dist/plugins/peity/jquery.peity.min.js"></script> 
<script src="dist/plugins/functions/jquery.peity.init.js"></script>
<!-- Include the Quill library --><!-- include summernote css/js -->

<link rel="stylesheet" href="dist/plugins/dropify/dropify.min.css">
<script src="dist/plugins/dropify/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
		 
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:44 GMT -->
</html>

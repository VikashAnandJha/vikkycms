<?php include 'secure.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Settings - VikkyCMS Admin</title>
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
        <?php include 'header.php'; ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include 'left.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1>Settings</h1>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> Settings</li>
                </ol>
            </div>
<?php 
$show=$_GET['show']; ?>
          <!-- Main content -->
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <h3>Website Settings</h3>
                        <div class="card">
                            
                            <div class="card-body">
<?php 

if($show=="metadata")  include 'pages/settings/metadata_settings.php' ;
if($show=="logo")  include 'pages/settings/logo_settings.php' ;
if($show=="code")  include 'pages/settings/code_settings.php' ;

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
    <!-- jQuery 3 -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/adminkit.js"></script>
    <script src="dist/plugins/formwizard/jquery-steps.js"></script>
    <script src="dist/plugins/popper/popper.min.js"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- template --> 

    <!-- Chart Peity JavaScript -->
    <script src="dist/plugins/peity/jquery.peity.min.js"></script>
    <script src="dist/plugins/functions/jquery.peity.init.js"></script>

 
<link rel="stylesheet" href="dist/plugins/dropify/dropify.min.css">
<script src="dist/plugins/dropify/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
</body>

</html>
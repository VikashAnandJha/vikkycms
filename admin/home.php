<?php include 'secure.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard < VikkyCMS Admin</title>
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
        <h1>Blank page</h1>
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li><i class="fa fa-angle-right"></i>Dashboard</li>
        </ol>
      </div>
      <?php
      $today = date('Y-m-d');
      $dvtoday = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where  viewed_on='$today' "));

      $dvyest = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where    DATE(viewed_on) = DATE(NOW() - INTERVAL 1 DAY) "));

      $dvthisweek = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where   YEARWEEK(`viewed_on`, 1) = YEARWEEK(CURDATE(), 1)"));
      $dvlastweek = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where   WEEK(viewed_on) = WEEK(NOW()) - 1"));

      $dvthismonth = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where  MONTH(viewed_on) = MONTH(CURRENT_DATE())
AND YEAR(viewed_on) = YEAR(CURRENT_DATE())"));
      $dvlastmonth = mysqli_num_rows(mysqli_query($conn, "select id from pageviews where   DATE_FORMAT(viewed_on, '%Y-%m') = date_format(DATE_SUB(curdate(), INTERVAL 1 month),'%Y-%m')"));

      $dvtotal = mysqli_num_rows(mysqli_query($conn, "select id from pageviews    "));

      $draft_total = mysqli_num_rows(mysqli_query($conn, "select id from posts where status='DRAFT'    "));
      $pages_total = mysqli_num_rows(mysqli_query($conn, "select id from pages    "));
      $comments_pending = mysqli_num_rows(mysqli_query($conn, "select id from comments    "));
      $posts_total = mysqli_num_rows(mysqli_query($conn, "select id from posts    "));







      ?>
      <!-- Main content -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">Today Visits</h6>
                          <h1 class="text-white"><?php echo $dvtoday; ?></h1>
                          <span class="progress-description text-white"> Yesterday:<?php echo $dvyesy + 0; ?> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">This Week Visits</h6>
                          <h1 class="text-white"><?php echo $dvthisweek; ?></h1>
                          <span class="progress-description text-white"> Last Week:<?php echo $dvlastweek + 0; ?> </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">This Month Visits</h6>
                          <h1 class="text-white"><?php echo $dvthismonth; ?></h1>
                          <span class="progress-description text-white"> last Month:<?php echo $dvlastmonth + 0; ?> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">Total Visits</h6>
                          <h1 class="text-white"><?php echo $dvtotal; ?></h1>
                          <span class="progress-description text-white">All time</span>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <hr>
                <div class="row">

                <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">Draft Posts</h6>
                          <h1 class="text-white"><?php echo $draft_total; ?></h1>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent">
                          <i class="fa fa-comments text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">PendingComments</h6>
                          <h1 class="text-white"><?php echo $comments_pending; ?></h1>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">Total Posts</h6>
                          <h1 class="text-white"><?php echo $posts_total; ?></h1>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent">
                          <i class="ti-stats-up text-white text-white"></i></span>
                        <div class="info-box-content">
                          <h6 class="info-box-text text-white">Total Pages</h6>
                          <h1 class="text-white"><?php echo $pages_total; ?></h1>
                         </div>
                      </div>
                    </div>
                  </div>
                  
                  
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
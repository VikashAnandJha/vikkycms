<header class="main-header" style="position:fixed; width: 100%;"> 
    <!-- Logo --> 
    <a href="index.html" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="dist/img/vikkycms_logo_small.png" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="dist/img/vikkycmslogo_croped.png" alt=""></span> </a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
      </ul>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
            
            <li class="dropdown user user-menu p-ph-res"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <i class="fa fa-sticky-note-o"></i> New
          </a>
            <ul class="dropdown-menu">
            <li><a href="create.php?type=post"><i class="fa fa-sticky-note-o"></i> New POST</a></li>
            <li><a href="create.php?type=page"><i class="fa fa-sticky-note-o"></i> New PAGE</a></li>
            </ul>
            </li>
        
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image">
           <span class="hidden-xs"><?php echo $name; ?></span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="dist/img/img1.jpg" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"><?php echo $username; ?> <small><?php echo $name; ?></small> </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
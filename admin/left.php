<style>
    .sidebar-menu>li>a {
     
    color: #ffffff;
} 
.sidebar-mini.sidebar-collapse .sidebar-menu>li>.treeview-menu {
    
    background: #384861;
    color: #ffffff;
} 
.sidebar-mini.sidebar-collapse .sidebar-menu>li>a {
    margin-right: 0;
     background-color: #384861;
}
.sidebar-menu > li.active > a {
   color: #ffffff;
}.sidebar-menu > li > a:hover {
   color: #ffffff;
}
*, ::after, ::before {
     box-sizing: initial; 
}
.treeview-menu>li.active a {
    color: #008cd3;
}
 
</style>
<aside class="main-sidebar" style="background-color: #384861; height:100%; position:fixed; "> 
    <!-- sidebar -->
    <?php
      $page = basename($_SERVER["SCRIPT_FILENAME"], '.php')

    ?>
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
       
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree"> 

      <li class=" <?php if($page=="home") echo 'menu-open active'; ?>"><a href="home.php" ><i class="fa fa-home"></i> <span>Dashboard</span></a></li> 
      <li class="treeview <?php if($page=="posts") echo 'menu-open active'; ?>">
           <a href="posts.php"> <i class="fa fa-sticky-note"></i> <span>Posts</span> 
           <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="posts.php" class="active"><i class="fa fa-angle-right"></i>Posts</a></li>
            <li><a href="categories.php" class="active"><i class="fa fa-angle-right"></i> Categories</a></li>
            <li><a href="tags.php" class="active"><i class="fa fa-angle-right"></i> Tags</a></li>
             
          </ul>
        </li>
       
      <li class="<?php if($page=="pages") echo 'menu-open active'; ?> " ><a href="pages.php?show=list"><i class="fa fa-file"></i> <span>Pages</span></a></li>
      <li class=" <?php if($page=="comments") echo 'menu-open active'; ?>" style="display: none;"><a href="comments.php"><i class="fa fa-comments"></i> <span>Comments</span></a></li>
       <li class="treeview <?php if($page=="menu") echo 'menu-open active'; ?>">
           <a href="#"> <i class="fa fa-bars"></i> <span>Menu</span> 
           <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="menu.php?show=list" class="active"><i class="fa fa-angle-right"></i>Menu List</a></li>
            <li><a href="menu.php?show=items"  ><i class="fa fa-angle-right"></i> Menu Items</a></li> 
             
          </ul>
        </li>
      <li class="<?php if($page=="authors") echo 'menu-open active'; ?> "><a href="authors.php"><i class="fa fa-user"></i><span> Authors</span></a></li> 

      <li class="treeview <?php if($page=="settings") echo 'menu-open active'; ?>"> <a href="#"> <i class="fa fa-gear"></i> <span>Settings</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu" >
           
            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i>Website <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu" style="display: none;">
              <li><a href="settings.php?show=metadata"><i class="fa fa-angle-right"></i>Metadata</a></li>
              <li><a href="settings.php?show=logo"><i class="fa fa-angle-right"></i>Logo</a></li>
                 
              </ul>
            </li>
            <li style="display: none;"><a href="#"><i class="fa fa-angle-right"></i>Basic </a></li>
          </ul>
        </li>
       
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>
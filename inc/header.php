
<header id="site-header" class="site-header logo-below-nav sticky-nav sticky-mobile-nav">

		<!-- mobile header  -->
		<div class="mobile-header mobile-only">

			<div class="toggle toggle-menu mobile-toggle">
				<span><i class="icon-ruki-menu"></i></span><span class="screen-reader-text">Menu</span>
			</div>
			<div class="logo-wrapper">
				<a href="/index.php" class="custom-logo-link" rel="home"><noscript>
                <img src="./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>" alt="PrepUPSC.com" class="custom-logo" width="200" data-height="98" /></noscript>
                <img src='./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>' 
                data-src="./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>" alt="" 
                class="lazyload custom-logo" width="200" data-height="98" /></a></div>
			<div class="toggle toggle-search mobile-toggle">
				<span><i class="icon-search"></i></span><span class="screen-reader-text">Search</span>
			</div>

		</div>
		<!-- .mobile header -->

		<div class="container header-layout-wrapper">



			<div class="primary-menu-container">

				<div class="toggle toggle-menu">
					<span class="has-toggle-text"><i class="icon-ruki-menu"></i>Menu</span>
				</div>

				<nav class="menu-primary-navigation-container">
					<ul id="primary-nav" class="primary-nav">
					
					<?php
 $mlqROw = mysqli_fetch_array(mysqli_query($conn, "select * from menu_list where status='ACTIVE'"));
   $menu_list_id=$mlqROw['id'];
 
 $mq = mysqli_query($conn, "select * from menu_items where menu_list_id='$menu_list_id' and status='ACTIVE' order by item_order desc");



 while ($mrow = mysqli_fetch_array($mq)) {

$link="#";
if($mrow['open_type']=="PAGE"){
	$page_id=$mrow['connected_data'];
$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from pages where id='$page_id'"));
$link="pages/".$pRow['url'];
}
if($mrow['open_type']=="POST"){
	$post_id=$mrow['connected_data'];
$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id'"));
$link="posts/".$pRow['url'];
}
if($mrow['open_type']=="LINK"){ 
$link= $mrow['connected_data'];
}

					?>
						<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15">
							
						
						<a href="<?php echo $link; ?>"><?php echo $mrow['display_text']; ?></a>
						</li>
						 
					 
						
						<?php } ?>
					
					</ul>
				</nav>
				<div class="toggle toggle-search">
					<span class="has-toggle-text"><i class="icon-search"></i>Search</span>
				</div>

			</div>


		</div>

	</header><!-- .site-header -->
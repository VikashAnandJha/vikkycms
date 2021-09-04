 
<header id="site-header" class="site-header logo-left-menu sticky-nav sticky-mobile-nav">

	<!-- mobile header  -->
	<div class="mobile-header mobile-only">

		<div class="toggle toggle-menu mobile-toggle">
			<span><i class="icon-ruki-menu"></i></span><span class="screen-reader-text"></span>
		</div>
		<div class="logo-wrapper"><a href="<?php echo $siteInfoRow['base_url']; ?>" class="custom-logo-link" rel="home"><noscript>
			<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt="logo" class="custom-logo" width="90" data-height="44" /></noscript>
			<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" 
			data-src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt="Ruki" class="lazyload custom-logo" width="90" data-height="44"></a></div>
		<div class="toggle toggle-search mobile-toggle">
			<span><i class="icon-search"></i></span><span class="screen-reader-text">Search</span>
		</div>

	</div>
	<!-- .mobile header -->

	<div class="container header-layout-wrapper">


		<div class="logo-wrapper"><a href="<?php echo $siteInfoRow['base_url']; ?>" class="custom-logo-link" rel="home"><noscript>
			<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt="Ruki" class="custom-logo" width="90" data-height="44" /></noscript>
			<img src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" 
			data-src="./uploads/images/<?php echo $siteInfoRow['web_logo']; ?>" alt="Ruki" class="custom-logo lazyloaded" width="90" data-height="44"></a></div>

		<div class="primary-menu-container">

			<div class="toggle toggle-menu">
				<span class="has-toggle-text"><i class="icon-ruki-menu"></i></span>
			</div>

			<nav class="menu-primary-navigation-container">
			<ul id="primary-nav" class="primary-nav">
					<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15">


						<a href="<?php echo $siteInfoRow['base_url']; ?>">Home</a>
					</li>
					<?php
					$mlqROw = mysqli_fetch_array(mysqli_query($conn, "select * from menu_list where status='ACTIVE'"));
					$menu_list_id = $mlqROw['id'];

					$mq = mysqli_query($conn, "select * from menu_items where menu_list_id='$menu_list_id' and status='ACTIVE' order by item_order desc");



					while ($mrow = mysqli_fetch_array($mq)) {

						$link = "#";
						if ($mrow['open_type'] == "PAGE") {
							$page_id = $mrow['connected_data'];
							$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from pages where id='$page_id'"));
							$link = "pages/" . $pRow['url'];
						}
						if ($mrow['open_type'] == "POST") {
							$post_id = $mrow['connected_data'];
							$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id'"));
							$link = "posts/" . $pRow['url'];
						}
						if ($mrow['open_type'] == "LINK") {
							$link = $mrow['connected_data'];
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

</header>

<style>
	.splash {
		background: #ffffff;
		/* background-image: linear-gradient(to right top, #f67280, #e97083, #dc6f84, #ce6d85, #c06c84); */
		text-align: center;
		color: #94979e;
		padding: 10px 30px 30px 30px;
		line-height: 1.5;
		/* position: relative; */
	}
</style>




<!-- site search -->
<div class="site-search">
	<span class="toggle-search"><i class="icon-cancel"></i></span>


	<form role="search" method="get" class="search-form" action="http://www.3forty.media/ruki/">
		<label for="search-form-612f401230bde">
			<span class="screen-reader-text">Search for:</span>
		</label>
		<input type="search" id="search-form-612f401230bde" class="search-field" placeholder="Search and press Enter" value="" name="s" />
		<button type="submit" class="search-submit"><i class="icon-search"></i><span class="screen-reader-text">Search</span></button>
	</form>
	<div class="widget widget_tag_cloud">
		<h2 class="widgettitle">Categories</h2>
		<div class="tagcloud"><a href="http://www.3forty.media/ruki/?cat=2" class="tag-cloud-link tag-link-2 tag-link-position-1" style="font-size: 22pt;" aria-label="Art &amp; Design (10 items)">Art &amp; Design<span class="tag-link-count"> (10)</span></a>
			<a href="http://www.3forty.media/ruki/?cat=3" class="tag-cloud-link tag-link-3 tag-link-position-2" style="font-size: 19.846153846154pt;" aria-label="Beauty (9 items)">Beauty<span class="tag-link-count"> (9)</span></a>
			<a href="http://www.3forty.media/ruki/?cat=5" class="tag-cloud-link tag-link-5 tag-link-position-3" style="font-size: 11.769230769231pt;" aria-label="Fashion (6 items)">Fashion<span class="tag-link-count"> (6)</span></a>
			<a href="http://www.3forty.media/ruki/?cat=4" class="tag-cloud-link tag-link-4 tag-link-position-4" style="font-size: 8pt;" aria-label="Lifestyle (5 items)">Lifestyle<span class="tag-link-count"> (5)</span></a>
			<a href="http://www.3forty.media/ruki/?cat=6" class="tag-cloud-link tag-link-6 tag-link-position-5" style="font-size: 11.769230769231pt;" aria-label="Travel (6 items)">Travel<span class="tag-link-count"> (6)</span></a>
		</div>
	</div>
</div>



<aside class="mobile-navigation slide-menu sidebar" aria-label="Blog Sidebar">
	<span class="close-menu"><i class="icon-cancel"></i></span>
	<div class="logo-wrapper"><a class="custom-logo-link" href="<?php echo $siteInfoRow['base_url']; ?>" rel="home"><noscript>
				<img src="./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>" alt="Ruki" class="custom-logo" style="max-width: 50%" /></noscript>
			<img src='./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>' data-src="./uploads/images/<?php echo $siteInfoRow['mob_logo']; ?>" alt="Ruki" class="lazyload custom-logo" style="max-width: 50%" /></a></div>
	<nav class="primary-nav-sidebar-wrapper">

		<ul id="primary-nav-sidebar" class="primary-nav-sidebar">
			<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15">


				<a href="<?php echo $siteInfoRow['base_url']; ?>">Home</a>
			</li>
			<?php
			$mlqROw = mysqli_fetch_array(mysqli_query($conn, "select * from menu_list where status='ACTIVE'"));
			$menu_list_id = $mlqROw['id'];

			$mq = mysqli_query($conn, "select * from menu_items where menu_list_id='$menu_list_id' and status='ACTIVE' order by item_order desc");



			while ($mrow = mysqli_fetch_array($mq)) {

				$link = "#";
				if ($mrow['open_type'] == "PAGE") {
					$page_id = $mrow['connected_data'];
					$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from pages where id='$page_id'"));
					$link = "pages/" . $pRow['url'];
				}
				if ($mrow['open_type'] == "POST") {
					$post_id = $mrow['connected_data'];
					$pRow = mysqli_fetch_array(mysqli_query($conn, "select * from posts where id='$post_id'"));
					$link = "posts/" . $pRow['url'];
				}
				if ($mrow['open_type'] == "LINK") {
					$link = $mrow['connected_data'];
				}

			?>
				<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15">


					<a href="<?php echo $link; ?>"><?php echo $mrow['display_text']; ?></a>
				</li>



			<?php } ?>

		</ul>
	</nav>

</aside>
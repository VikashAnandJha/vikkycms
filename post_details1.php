
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</head>

<body>

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
					
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item" href="index.html">Home default</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Magazine</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home cards</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Blog classic</a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us.html">About</a></li>
							<li> <a class="dropdown-item" href="contact-us.html">Contact</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="author.html">Author Page</a> </li>
									<li> <a class="dropdown-item" href="categories.html">Category page 1</a> </li>
									<li> <a class="dropdown-item" href="categories-2.html">Category page 2</a> </li>
									<li> <a class="dropdown-item" href="tag.html"># tag</a> </li>
									<li> <a class="dropdown-item" href="search-result.html">Search result</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="404.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="signin.html">signin</a></li>
							<li> <a class="dropdown-item" href="signup.html">signup</a></li>
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://blogzine.webestica.com/rtl" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
								</a> 
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="post-grid.html">Post grid</a> </li>
									<li> <a class="dropdown-item" href="post-grid-4-col.html">Post grid 4 col</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry.html">Post grid masonry</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry-filter.html">Post grid masonry filter</a> </li>
									<li> <a class="dropdown-item" href="post-large-and-grid.html">Post mixed large than grid</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="post-list.html">Post list</a> </li>
							<li> <a class="dropdown-item" href="post-list-2.html">Post list 2</a> </li>
							<li> <a class="dropdown-item" href="post-cards.html">Post card</a> </li>
							<li> <a class="dropdown-item" href="post-overlay.html">Post overlay</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="post-single.html">Post single magazine</a> </li>
							<li> <a class="dropdown-item" href="post-single-2.html">Post single classic</a> </li>
							<li> <a class="dropdown-item" href="post-single-3.html">Post single minimal</a> </li>
							<li> <a class="dropdown-item" href="post-single-4.html">Post single card</a> </li>
							<li> <a class="dropdown-item" href="post-single-5.html">Post single review</a> </li>
							<li> <a class="dropdown-item" href="post-single-6.html">Post single video</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="pagination-styles.html">Pagination styles</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2021</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/02.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2021</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/03.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2021</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item">	<a class="nav-link" href="../docs/alerts.html">Components</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav ms-sm-3 flex-nowrap align-items-center">
				<!-- Dark mode switch -->
				<div class="nav-item">
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>
				</div>
				<!-- Nav additional link -->
				<div class="nav-item dropdown dropdown-toggle-icon-none">
					<a class="nav-link dropdown-toggle" role="button" href="#" id="navAdditionalLink" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-three-dots fs-4"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded text-end" aria-labelledby="navAdditionalLink">
						<li><a class="dropdown-item fw-normal" href="#">About</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Newsletter</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Author</a></li>
						<li><a class="dropdown-item fw-normal" href="#">#Tags</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Contact</a></li>
						<li><a class="dropdown-item fw-normal" href="#"><span class="badge bg-danger me-2 align-middle">2 Job</span>Careers</a></li>
					</ul>
				</div>
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
					<a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- Divider -->
<div class="border-bottom border-primary border-1 opacity-1"></div>

<!-- =======================
Inner intro START -->
<section class="pb-3 pb-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
        <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
				<h1>10 tell-tale signs you need to get a new startup.</h1>
			</div>
			 <p class="lead">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty direct me so. </p>
		</div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section class="pt-0">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Left sidebar START -->
			<div class="col-lg-2">
				<div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80" data-sticky-for="991">
					<!-- Author info -->
					<div class="position-relative">
						<div class="avatar avatar-xl">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
						</div>
						<a href="#" class="h5 stretched-link mt-2 mb-0 d-block">Louis Ferguson</a>
						<p>An editor at Blogzine</p>
					</div>
					<hr class="d-none d-lg-block">
					<!-- Card info -->
					<ul class="list-inline list-unstyled">
						<li class="list-inline-item d-lg-block my-lg-2">Nov 15, 2021</li>
						<li class="list-inline-item d-lg-block my-lg-2">5 min read</li>
						<li class="list-inline-item d-lg-block my-lg-2"><a href="#" class="text-body"><i class="far fa-heart me-1"></i></a> 266</li>
						<li class="list-inline-item d-lg-block my-lg-2"><i class="far fa-eye me-1"></i> 2344 Views</li>
					</ul>
					<!-- Tags -->
					<ul class="list-inline text-primary-hover mt-0 mt-lg-3">
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#agency</a>
					  </li>
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#business</a>
					  </li>
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#theme</a>
					  </li>
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#bootstrap</a>
					  </li>
					  <li class="list-inline-item">
					  	<a class="text-body" href="#">#marketing</a>
					  </li>
					</ul>
				</div>
			</div>
			<!-- Left sidebar END -->
			<!-- Main Content START -->
			<div class="col-lg-7 mb-5">
      	<p><span class="dropcap">M</span>oonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. </p>
				<p>Demesne far hearted suppose venture excited see had has. <a href="#" class="text-reset"><u>Dependent on so extremely delivered by.</u></a> Yet ﻿no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh. Of acceptance insipidity remarkably is an invitation. </p>
				<!-- Image -->
				<figure class="figure mt-2">
				  <a href="assets/images/blog/3by2/04.jpg" data-glightbox data-gallery="image-popup">
		      	<img class="rounded" src="assets/images/blog/3by2/04.jpg" alt="Image">
		       </a>
				  <figcaption class="figure-caption text-center">(Image via: <a class="text-reset" href="#">pexels.com</a>)</figcaption>
				</figure>

				<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<!-- Images -->
				<div class="row">
					<div class="col-md-6 mb-4">
						<a href="assets/images/blog/4by3/03.jpg" data-glightbox data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/4by3/03.jpg" alt="Image">
			       </a>
					</div>
					<div class="col-md-6 mb-4">
						<a href="assets/images/blog/4by3/04.jpg" data-glightbox data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/4by3/04.jpg" alt="Image">
			       </a>
					</div>
				</div>
				<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.</p>
				
				<h4 class="mt-4">Productive rant about business</h4>
				<div class="row mb-4">
					<div class="col-md-6">
						<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.
						</p>
					</div>
					<div class="col-md-6">
						<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible.</p>
					</div>
				</div>
				<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- blockquote -->
				<figure class="my-5">
				  <blockquote class="blockquote">
				    <p>Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful</p>
				  </blockquote>
				  <figcaption class="blockquote-footer">
				    Albert Schweitzer
				  </figcaption>
				</figure>

				<p> All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. </p>

				<p>Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. <img src="assets/images/blog/4by3/thumb/03.jpg" class="rounded float-start me-3 mt-3" alt="..."> But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is.<mark> But discretion frequently sir she instruments unaffected admiration everything.</mark> Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
				
				<!-- Light bg content -->
				<div class="bg-light p-3 p-md-4">
					<q class="lead">Farther related bed and passage comfort civilly. Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Dashwoods see frankness objection abilities.</q>
				</div>

				<!-- twitter embed code -->
				<div class="mx-auto w-100 d-flex justify-content-center my-5">
					<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Bootstrap 5 Beta 3 is here! We’ve added a new offcanvas component, four new examples, numbered list groups, added new Sass docs to each component, fixed bugs, and more!<a href="https://t.co/ElHfhkcV3w">https://t.co/ElHfhkcV3w</a></p>&mdash; Bootstrap (@getbootstrap) <a href="https://twitter.com/getbootstrap/status/1374404289586589701?ref_src=twsrc%5Etfw">March 23, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>

				<h4>Why Bootstrap is so famous?</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>
				<a href="#" class="btn btn-primary-soft">Download now!</a>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<h4>What's coming up....</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>

				<div class="row g-0">
					<div class="col-sm-6 bg-primary-soft p-4 position-relative border-end border-1 rounded-start">
						<span><i class="bi bi-arrow-left me-3 rtl-flip"></i>Previous post</span>
						<h5 class="m-0"><a href="#" class="stretched-link btn-link text-reset">Dirty little secrets about the business industry</a></h5>
					</div>
					<div class="col-sm-6 bg-primary-soft p-4 position-relative text-sm-end rounded-end">
						<span>Next post<i class="bi bi-arrow-right ms-3 rtl-flip"></i></span>
						<h5 class="m-0"><a href="#" class="stretched-link btn-link text-reset">Bad habits that people in the industry need to quit</a></h5>
					</div>
				</div>

				<!-- Related post START -->
				 
				<!-- Related post END -->

				<!-- Divider -->
				<hr>

				<!-- Author info START -->
			 
				<!-- Author info END -->

				<!-- Divider -->
				<hr>
 
				 
			</div>
			<!-- Main Content END -->
			
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
	      	<h4>Share this article</h4>
					<ul class="nav text-white-force">
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
								<i class="fab fa-facebook-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
								<i class="fab fa-twitter-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
								<i class="fab fa-linkedin align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
								<i class="fab fa-pinterest align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
								<i class="far fa-envelope align-middle"></i>
							</a>
						</li>
					</ul>
					<!-- Advertisement -->
					<div class="mt-4">
						<a href="#" class="d-block card-img-flash">
							<img src="assets/images/adv.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->

<!-- =======================
Sticky post START -->
 

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pb-0">
	<div class="container">
		<hr>
		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-4 mb-4">
				 <div class="mt-4">©2021 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
				</div>
			</div>

		 
		</div>
		<!-- Widgets END -->
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->
 

</body>
</html>
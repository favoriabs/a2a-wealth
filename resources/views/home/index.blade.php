
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>A2AW</title>
	<meta name="keywords" content="HTML5,CSS3,Template" />
	<meta name="description" content="" />
	<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

	<link rel="shortcut icon" href="assets2/images/A2A1@0,5x.png">

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- WEB FONTS : use %7C instead of | (pipe) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

	<!-- CORE CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- THEME CSS -->
	<link href="assets2/css/essentials.css" rel="stylesheet" type="text/css" />
	<link href="assets2/css/layout.css" rel="stylesheet" type="text/css" />

	<!-- PAGE LEVEL SCRIPTS -->
	<link href="assets2/css/header-1.css" rel="stylesheet" type="text/css" />
	<link href="assets2/css/layout-shop.css" rel="stylesheet" type="text/css" />
	<!--<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />-->
	<style>
		img.img-responsive.radius-4{
			height:335px!important
		}
		img.footer-logo{
			height:100px;
		}
		footer>.container{
			padding:0px!important;
			margin-bottom: 0px!important;
		}
		section{
			padding:20px
		}
		.caption-slider-default{
			background-color: rgba(0, 0, 0, 0.28)
		}
		/*a.dropdown-toggle{*/
		/*color: gold!important;*/
		/*}*/
		/*div.side-nav ul>li:hover>a, div.side-nav ul>li.active>a*/
		/*div.side-nav ul>li.active>a:hover{*/
		/*color: white!important;*/
		/*}*/
		/*div.side-nav ul>li>a{*/
		/*color: white!important;*/
		/*}*/
		/*div.side-nav ul>li>a>span{*/
		/*color: gold!important;*/
		/*}*/
		/*div.side-nav ul>li>a:hover{*/
		/*color: gold!important;*/
		/*}*/
		/*div.side-nav ul>li.active>a{*/
		/*color: gold!important;*/
		/*}*/
		/*h4{*/
		/*color: goldenrod;*/
		/*}*/
		#topBar ul li a, #mainMenu ul li a, #topMain ul li a {
			text-transform: uppercase;
			color: black!important;
		}
		/*.blog-post-item{*/
		/*margin:40px 0px;*/
		/*color:white!important*/
		/*}*/
		/*h2>a{*/
		/*color:white!important*/
		/*}*/
		/*ul.blog-post-info li>a{*/
		/*color: white!important;*/
		/*}*/
		#header{
			background-color: #17590b;
		}
		#topBar{
			background-color: #0e4603;

		}
		.img-hover>a>.img-responsive{
			width: 265px;
			height:176.266px;
		}
		#footer{
			background: linear-gradient(to bottom, #555555 0%,#0e4603 100%);
		}
	</style>
</head>
<body style="background-image: url(assets2/Jute-Plant.jpg);z-index: 0;" class="smoothscroll enable-animation">
<!-- wrapper -->
<div id="wrapper">

	<!-- Top Bar -->
	<div style="opacity: 0.95" id="topBar">
		<div class="container">

			<!-- right -->
			<ul class="top-links list-inline pull-right">
				<!--<li>-->
				<!--<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>-->
				<!--<ul class="dropdown-menu pull-right">-->
				<!--<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>-->
				<!--<li class="divider"></li>-->
				<!--<li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>-->
				<!--<li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>-->
				<!--<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>-->
				<!--<li class="divider"></li>-->
				<!--<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>-->
				<!--</ul>-->
				<!--</li>-->
				<li class="hidden-xs"><a style="color: white!important;" href="{{route('login')}}">LOGIN</a></li>
			</ul>

		</div>
	</div>
	<!-- /Top Bar -->

	<!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .noborder 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
    -->
	<div style="opacity: 0.95" id="header" class="sticky clearfix">

		<!-- SEARCH HEADER -->
		<div class="search-box over-header">
			<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

			<form action="page-search-result-1.html" method="get">
				<input style="text-align: center" type="text" class="form-control" placeholder="WHAT DO YOU NEED?" />
			</form>
		</div>
		<!-- /SEARCH HEADER -->


		<!-- TOP NAV -->
		<header id="topNav">
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- BUTTONS -->
				<ul class="pull-right nav nav-pills nav-second-main">

					<!-- SEARCH -->
					<li class="search">
						<a href="javascript:;">
							<i style="color: white!important;" class="fa fa-search"></i>
						</a>
					</li>
					<!-- /SEARCH -->


					<!-- QUICK SHOP CART -->
					<li class="quick-cart">
						<a href="#">
							<span class="badge badge-aqua btn-xs badge-corner">2</span>
							<i style="color: #fff;" class="fa fa-shopping-cart"></i>
						</a>
						<div class="quick-cart-box">
							<h4>Shop Cart</h4>

							<div class="quick-cart-wrapper">

								<a href="#"><!-- cart item -->
									<img src="assets2/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
									<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
									<small>$37.21</small>
								</a><!-- /cart item -->

								<a href="#"><!-- cart item -->
									<img src="assets2/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
									<h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
									<small>$17.18</small>
								</a><!-- /cart item -->

								<!-- cart no items example -->
								<!--
                                <a class="text-center" href="#">
                                    <h6>0 ITEMS ON YOUR CART</h6>
                                </a>
                                -->

							</div>

							<!-- quick cart footer -->
							<div class="quick-cart-footer clearfix">
								<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
								<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
							</div>
							<!-- /quick cart footer -->

						</div>
					</li>
					<!-- /QUICK SHOP CART -->


				</ul>
				<!-- /BUTTONS -->

				<!-- Logo -->
				<a class="logo pull-left" href="index.html">
					<img src="assets2/images/a2aw.png" alt="" />
				</a>

				<!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
				<div class="navbar-collapse pull-left nav-main-collapse collapse submenu-dark">
					<nav class="nav-main">

						<!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
						<ul id="topMain" class="nav nav-pills nav-main">
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="/">
									HOME
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="{{route('get_products')}}">
									PRODUCTS
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="#">
									SALES OVERVIEW
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="#">
									PROGRAMS
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="#">
									NEWS UPDATE
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="{{route('get_aboutus')}}">
									ABOUT <span style="font-size: large">A</span>2<span style="font-size: large">A</span>
								</a>
							</li>
						</ul>

					</nav>
				</div>

			</div>
		</header>
		<!-- /Top Nav -->

	</div>


	<!--
        PAGE HEADER

        CLASSES:
            .page-header-xs	= 20px margins
            .page-header-md	= 50px margins
            .page-header-lg	= 80px margins
            .page-header-xlg= 130px margins
            .dark			= dark page header

            .shadow-before-1 	= shadow 1 header top
            .shadow-after-1 	= shadow 1 header bottom
            .shadow-before-2 	= shadow 2 header top
            .shadow-after-2 	= shadow 2 header bottom
            .shadow-before-3 	= shadow 3 header top
            .shadow-after-3 	= shadow 3 header bottom
    -->




	<!-- -->
	<section style="background-color: white">
		<div class="container">

			<div class="row">

				<!-- RIGHT -->
				<div class="col-lg-9 col-md-9 col-sm-9">


					<!-- CAROUSEL -->
					<div class="owl-carousel buttons-autohide controlls-over margin-bottom-30 radius-4" data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
						<!-- item -->
						<div>
							<div class="caption-slider-default">
								<div class="display-table">
									<div class="display-table-cell vertical-align-middle">
										<div class="caption-container text-left">
											<h2 style="color:gold!important">SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
											<h4 style="color:gold!important">
												This is a category banner rotator<br />
												for any category of your shop.
											</h4>
										</div>
									</div>
								</div>
							</div>

							<img class="img-responsive radius-4" src="assets2/images/Pineapple_Farming.jpg" width="851" height="335" alt="">
						</div>
						<!-- /item -->

						<!-- item -->
						<div>

							<div class="caption-slider-default">
								<div class="display-table">
									<div class="display-table-cell vertical-align-middle">
										<div class="caption-container text-left">
											<h2 style="color:gold!important">LOREM IPSUM <strong>DOLOR</strong></h2>
											<h4 style="color:gold!important">
												Unlimited designs, unlimited combinations <br />
												imagination is the limit!
											</h4>
										</div>
									</div>
								</div>
							</div>

							<img class="img-responsive radius-4" src="assets2/images/fishfarm-big-1728x800_c.jpg" width="851" height="335" alt="">
						</div>
						<!-- /item -->

					</div>
					<!-- /CAROUSEL -->
					<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

						<!-- IMAGE -->
						<figure class="blog-item-small-image margin-bottom-20">
							<img class="img-responsive" src="assets2/images/CBN.png" alt="">
						</figure>

						<div class="blog-item-small-content">

							<h2><a href="blog-single-default.html">CBN approves N75billion loan for agricultural lending to A2AW members</a></h2>

							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i>
										<span class="font-lato">June 29, 2015</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-comment-o"></i>
										<span class="font-lato">28 Comments</span>
									</a>
								</li>
							</ul>

							<p>The Central Bank of Nigeria (CBN) has approved the disbursement of about N75billion as loan to farmers in the 36 states and the Federal Capital Territory (FCT) under the African Access To Wealth Initiative.
								The loan guarantee scheme is a public-private sector initiative set up to transform the country’s agricultural sector. It was initiated by the apex bank, the Bankers’ Committee and the Federal Ministry of Agriculture and Rural Development, to guarantee 75 per cent loans provided by Deposit Money Banks (DPB) to farmers as part of efforts to transform the country’s agricultural sector.
								...</p>

							<a href="blog-single-default.html" class="btn btn-reveal btn-default">
								<i class="fa fa-plus"></i>
								<span>Read More</span>
							</a>

						</div>
					</div>

					<div class="margin-top-60">

						<div class="heading-title heading-border-bottom heading-color text-center">
							<h3>How Do I Sign-Up?</h3>
							<p>what Do I need To be Able To Become A Member of the The A2A Platform</p>
						</div>
						<div class="row">

							<div class="col-sm-6">
								<ul class="list-unstyled list-icons">
									<li><i class="fa fa-check text-success"></i> No Qualification Or Degree Needed.</li>
									<li><i class="fa fa-check text-success"></i> Must Be A bonafide member of the Organic Farmer's Contract Farming Scheme.</li>
									<li><i class="fa fa-check text-success"></i> Pay the Applicable Under-stated fees provided in the table below. <stromg>NB</stromg>: Non-Refundable  </li>
								</ul>
							</div>

							<div class="col-sm-6">
								<ul class="list-unstyled list-icons">
									<li><i class="fa fa-check text-success"></i> Download A2A wealth registration form from link below, fill and return for Activation.</li>
									<li><i class="fa fa-check text-success"></i> Congratulations on ecoming a new member of The A2A wealth E-commerce agricultural web platform!!!.</li>
								</ul>
							</div>

						</div>

					</div>
					<div class="row mega-price-table">

						<div class="col-md-3 col-sm-6 hidden-sm hidden-xs pricing-desc">

							<div class="pricing-title">
								<h2>Category</h2>
							</div>

							<ul class="list-unstyled">
								<li>One-Time Activation Fee </li>
								<li class="alternate">Monthly Subscription</li>
							</ul>

						</div>

						<div class="col-md-3 col-sm-6 block">
							<div class="pricing">

								<div class="pricing-head">
									<h3 style="font-size: large">Individual</h3>
									<small>60 Days Grace</small>
								</div>

								<ul class="pricing-table list-unstyled">
									<li>
										#3,000.00
										<span class="hidden-md hidden-lg"> One-time Activation Fee</span>
									</li>
									<li class="alternate">
										#200.00 <span class="hidden-md hidden-lg">Monthly Subscription Fee</span>
									</li>
								</ul>
								<!-- /option list -->

								<!-- button -->
								<a href="#" class="btn btn-primary fullwidth">Purchase Now</a>

							</div>
						</div>

						<div class="col-md-3 col-sm-6 block">
							<div class="pricing">

								<div class="pricing-head">
									<h3 style="font-size: large">Corporate Company</h3>
									<small>60 Days Grace</small>
								</div>
								<ul class="pricing-table list-unstyled">
									<li>
										#20,000.00
										<span class="hidden-md hidden-lg"> One-time Activation Fee</span>
									</li>
									<li class="alternate">
										#500.00 <span class="hidden-md hidden-lg">Monthly Subscription Fee</span>
									</li>
								</ul>
								<!-- /option list -->

								<!-- button -->
								<a href="#" class="btn btn-primary fullwidth">Purchase Now</a>

							</div>
						</div>

						<div class="col-md-3 col-sm-6 block">
							<div class="pricing">

								<div class="pricing-head">
									<h3 style="font-size: large">Public Liability Company</h3>
									<small>60 Days Grace</small>
								</div>
								<ul class="pricing-table list-unstyled">
									<li>
										Negotiable
										<span class="hidden-md hidden-lg"> One-time Activation Fee</span>
									</li>
									<li class="alternate">
										Negotiable <span class="hidden-md hidden-lg">Monthly Subscription Fee</span>
									</li>
								</ul>
								<!-- /option list -->

								<!-- button -->
								<a href="#" class="btn btn-primary fullwidth">Purchase Now</a>

							</div>
						</div>
					</div>
					<h3 style="text-align: center">Testimonials</h3>
					<div class="owl-carousel text-center owl-mini-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
						<div class="owl-carousel text-center owl-mini-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>

							<div class="testimonial">
								<figure>
									<img class="rounded" src="assets2/images/photo.jpg" alt="" />
								</figure>
								<div class="testimonial-content nopadding">
									<p>Can you Believe it, that guys left eye looks just like his right eye.</p>
									<cite>
										ABG
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>

							<div class="testimonial">
								<figure>
									<img class="rounded" src="assets2/images/buhari.jpg" alt="" />
								</figure>
								<div class="testimonial-content nopadding">
									<p>Kai Wakan Arisen Wenger mai Dadi Ne.</p>
									<cite>
										Badmus
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>

						</div>

					</div>


				</div>


				<!-- LEFT -->
				<div class="col-lg-3 col-md-3 col-sm-3">

					<!-- CATEGORIES -->
					<div class="side-nav margin-bottom-60">

						<div class="side-nav-head">
							<button class="fa fa-bars"></button>
							<h4>AVAILABLE</h4>
						</div>

						<ul class="list-group list-group-bordered list-group-noicon uppercase">
							<li class="list-group-item active">
								<a class="dropdown-toggle" href="#">Crop products</a>
								<ul>
									<li><a href="#"><span class="size-11 text-muted pull-right">(123)</span>Acha</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Sorghum</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(234)</span>Sesame - White</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(123)</span>Sesame - Black</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Cowpea (Beans) - White</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Cowpea (Beans) - Brown</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(234)</span>Wheat</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(123)</span>Roots</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Irish Potato</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Sweet Potato</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Ginger</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Turmeric</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Groundnut</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Irrigated and Rain-fed Vegetables</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Onion</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Hot Pepper</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Chili Pepper</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Tomato - Open field/Net/Green House</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Cassava</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(234)</span>Cereals</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(123)</span>Finger Milet(Tamba)</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(331)</span>Soya Beans</a></li>
									<li><a href="products.html"><span class="size-11 text-muted pull-right">(234)</span>Hybrid Maize</a></li>
								</ul>
							</li>
							<li class="list-group-item">
								<a class="dropdown-toggle" href="#">Non-Crop products</a>
								<ul>
									<li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Cattle Rearing</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Cattle Fattening</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Poultry</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Fishery</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Pigery</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(78)</span> Snailry</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Bee Honey</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Goat Breeding</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Sheep Breeding</a></li>
									<li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Mushoorum</a></li>
								</ul>
							</li>
						</ul>

					</div>
					<!-- /CATEGORIES -->
					<!-- BRANDS -->
					<div class="side-nav margin-bottom-60">

						<div class="side-nav-head">
							<button class="fa fa-bars"></button>
							<h4>NEW ADDITIONS</h4>
						</div>

						<ul class="list-group list-unstyled">
							<li class="list-group-item"><a href="products.html"><span class="size-11 text-muted pull-right">2hrs</span>Nyambees Company Plc</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">2hrs</span> K.I. Holdings Nigeria Limited</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">4hrs</span> 1st Digital Farms</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">5hrs</span> Michael Poultry Farms</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">5hrs</span> Ambi Quail Eggs</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">5hrs</span> Depad Integrated Ventures</a></li>
							<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">6hrs</span> Asixo Model Farm</a></li>
						</ul>

					</div>
					<!-- BRANDS -->


					<!-- BANNER ROTATOR -->
					<div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
						<a href="#">
							<img class="img-responsive" src="assets2/images/white_turkeys.jpg" width="270" height="350" alt="">
						</a>
						<a href="#">
							<img class="img-responsive" src="assets2/images/Onions-Farming.jpg" width="270" height="350" alt="">
						</a>
					</div>
					<!-- /BANNER ROTATOR -->


					<!-- FEATURED -->
					<!--8-->
					<!-- /FEATURED -->


					<!-- HTML BLOCK -->
					<div class="margin-bottom-60">
						<h4>HTML BLOCK</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus eunit.</p>

						<form action="#" role="form" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
								<span class="input-group-btn">
											<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i></button>
										</span>
							</div>
						</form>

					</div>
					<!-- /HTML BLOCK -->

				</div>

			</div>
			<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/Jute-Plant.jpg" alt="">
					</a>

					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/white_turkeys.jpg" alt="">
					</a>

					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/Onions-Farming.jpg" alt="">
					</a>

					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/mushroom-farming.jpg" alt="">
					</a>

					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/fishfarm-big-1728x800_c.jpg" alt="">
					</a>
					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/banner-bg.jpg" alt="">
					</a>
					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/Pineapple_Farming.jpg" alt="">
					</a>
					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets2/images/maize.jpg" alt="">
					</a>
					<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
					<ul class="text-left size-12 list-inline list-separator">
						<li>
							<i class="fa fa-calendar"></i>
							29th Jan 2015
						</li>
						<li>
							<a href="blog-single-default.html#comments">
								<i class="fa fa-comments"></i>
								3
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</section>
	<!-- / -->




	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">

			<div class="row margin-top-60 margin-bottom-40 size-13">

				<!-- col #1 -->
				<div class="col-md-4 col-sm-4">

					<!-- Footer Logo -->
					<img class="footer-logo" src="assets2/images/a2aw.png" alt="" />

				</div>
				<!-- /col #1 -->

				<!-- col #2 -->
				<div class="col-md-8 col-sm-8">

					<div class="row">

						<div class="col-md-5 hidden-sm hidden-xs">
							<h4 class="letter-spacing-1">RECENT NEWS</h4>
							<ul class="list-unstyled footer-list half-paddings">
								<li>
									<a class="block" href="#">CBN approves N75billion loan for agricultural lending to A2AW members</a>
									<small>June 29, 2015</small>
								</li>
							</ul>
						</div>

						<div class="col-md-3 hidden-sm hidden-xs">
							<h4 class="letter-spacing-1">EXPLORE US</h4>
							<ul class="list-unstyled footer-list half-paddings noborder">
								<li><a class="block" href="#"><i class="fa fa-angle-right"></i> About Us</a></li>
							</ul>
						</div>

						<div class="col-md-4">
							<h4 class="letter-spacing-1">FOLLOW US</h4>

							<!-- Social Icons -->
							<div class="clearfix">

								<a href="#" class="social-icon social-icon-sm social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<h4>+2348197564896</h4>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>
				<!-- /col #2 -->

			</div>

		</div>

		<div class="copyright">
			<div class="container">
				<ul class="pull-right nomargin list-inline mobile-block">
					<li><a href="#">Terms &amp; Conditions</a></li>
					<li>&bull;</li>
					<li><a href="#">Privacy</a></li>
				</ul>

				&copy; All Rights Reserved, A2AW LTD
			</div>
		</div>

	</footer>
	<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<!--<div id="preloader">-->
<!--<div class="inner">-->
<!--<span class="loader"></span>-->
<!--</div>-->
<!--</div>&lt;!&ndash; /PRELOADER &ndash;&gt;-->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets2/plugins/';</script>
<script type="text/javascript" src="assets2/plugins/jquery/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="assets2/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<!--<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>-->

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="assets2/js/view/demo.shop.js"></script>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<!-- ALERT -->
					<!--
                    <div class="alert alert-mini alert-danger margin-bottom-30">
                        <strong>Oh snap!</strong> Login Incorrect!
                    </div>
                    -->
					<!-- /ALERT -->

					<!-- login form -->
					<form action="index.html" method="post" class="sky-form boxed">
						<header><i class="fa fa-users"></i> Sign In</header>

						<fieldset class="nomargin">

							<label class="label margin-top-20">E-mail</label>
							<label class="input">
								<i class="ico-append fa fa-envelope"></i>
								<input type="email">
								<span class="tooltip tooltip-top-right">Email Address</span>
							</label>

							<label class="label margin-top-20">Password</label>
							<label class="input">
								<i class="ico-append fa fa-lock"></i>
								<input type="password">
								<b class="tooltip tooltip-top-right">Type your Password</b>
							</label>
							<label class="checkbox margin-top-20">
								<input type="checkbox" name="checkbox-inline">
								<i></i> Keep me logged in
							</label>

						</fieldset>

						<footer class="celarfix">
							<button type="submit" class="btn btn-primary noradius pull-right"><i class="fa fa-check"></i> OK, LOG IN</button>
						</footer>
					</form>
					<!-- /login form -->

					<div class="socials margin-top10 text-center"><!-- more buttons: ui-buttons.html -->
						<a href="#" class="social-icon social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="#" class="social-icon social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>
						<a href="#" class="social-icon social-google" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google">
							<i class="icon-google-plus"></i>
							<i class="icon-google-plus"></i>
						</a>

					</div>

				</div>
			</div>

			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>




</body>
</html>
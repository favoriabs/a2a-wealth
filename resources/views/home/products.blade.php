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

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets2/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets2/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets2/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets2/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<!--<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />-->
		<style>
			#footer{
				background: linear-gradient(to bottom, #555555 0%,#0e4603 100%);
			}
			img.img-responsive.radius-4{
				height:335px!important
			}
			img.footer-logo{
				height:100px;
			}
			section{
				padding:20px
			}
			.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
				display: block;
				max-width: 100%;
				height: 280px;
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
		<section style="background-color: lightgrey" class="page-header page-header-xs">
			<div class="container">

				<h1>SHOP</h1>

				<!-- breadcrumbs -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Products</li>
				</ol><!-- /breadcrumbs -->

			</div>
		</section>
		<!-- /PAGE HEADER -->




		<!-- -->
		<section style="background-color: white">
			<div class="container">

				<!-- LIST OPTIONS -->
				<div class="clearfix shop-list-options margin-bottom-20">

					<ul class="pagination nomargin pull-right">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>


				</div>
				<!-- /LIST OPTIONS -->


				<ul class="shop-item-list row list-inline nomargin">

					<!-- ITEM -->
					<li class="col-lg-3 col-sm-3">

						<div class="shop-item">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="product_view.html">
									<img class="img-responsive" src="assets2/images/maize%20(1).jpg" alt="shop first image" />
									<img class="img-responsive" src="assets2/images/maize.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->

								<!-- product more info -->
								<div class="shop-item-info">
									<span class="label label-success">NEW</span>
									<span class="label label-danger">SALE</span>
								</div>
								<!-- /product more info -->
							</div>

							<div class="shop-item-summary text-center">
								<h2>Yellow Maize</h2>
								<h2>Nyambees Company Plc </h2>

								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">N8,000.00</span>
									N4,000.00
								</div>
								<!-- /price -->
							</div>

							<!-- buttons -->
							<div class="shop-item-buttons text-center">
								<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
							</div>
							<!-- /buttons -->
						</div>

					</li>
					<!-- /ITEM -->

				</ul>

				<hr />

				<!-- Pagination Default -->
				<div class="text-center">
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
				<!-- /Pagination Default -->


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


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>

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
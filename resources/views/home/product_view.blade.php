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
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- THEME CSS -->
	<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

	<!-- PAGE LEVEL SCRIPTS -->
	<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
	<!--<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />-->
	<style>
		#footer{
			background: linear-gradient(to bottom, #555555 0%,#0e4603 100%);
		}
		.img-hover>a>.img-responsive{
			width: 265px;
			height:176.266px;
		}
		img.footer-logo{
			height:100px;
		}
		section{
			padding:20px
		}

		img.img-responsive.radius-4{
			height:335px!important
		}
		.caption-slider-default{
			background-color: rgba(0, 0, 0, 0.28)
		}
		#zoom-primary{
			width:350px!important;
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
<body style="background-image: url(assets/Jute-Plant.jpg);z-index: 0;" class="smoothscroll enable-animation">
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
				<li class="hidden-xs"><a style="color: white!important;" href="#" data-toggle="modal" data-target="#myModal">LOGIN</a></li>
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
									<img src="assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
									<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
									<small>$37.21</small>
								</a><!-- /cart item -->

								<a href="#"><!-- cart item -->
									<img src="assets/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
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
					<img src="assets/a2aw.png" alt="" />
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
								<a style="color: white!important;" class="" href="index.html">
									HOME
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="products.html">
									PRODUCTS
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="products.html">
									SALES OVERVIEW
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="products.html">
									PROGRAMS
								</a>
							</li>
							<li class=""><!-- HOME -->
								<a style="color: white!important;" class="" href="products.html">
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



	<section style="background-color: lightgrey"  class="page-header page-header-xs">
		<div class="container">

			<h1>Maize</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Products</a></li>
				<li class="active">Overview</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->




	<!-- -->
	<section style="background-color: white" >
		<div class="container">

			<div class="row">

				<!-- IMAGE -->
				<div class="col-lg-4 col-sm-4">

					<div class="thumbnail relative margin-bottom-3">

						<!--
                            IMAGE ZOOM

                            data-mode="mouseover|grab|click|toggle"
                        -->
						<figure id="zoom-primary" class="zoom" data-mode="mouseover">
							<!--
                                zoom buttton

                                positions available:
                                    .bottom-right
                                    .bottom-left
                                    .top-right
                                    .top-left
                            -->
							<a class="lightbox bottom-right" href="assets/maize.jpg" width="1200" height="1500" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

							<!--
                                image

                                Extra: add .image-bw class to force black and white!
                            -->
							<img class="img-responsive" src="assets/maize.jpg" width="1200" height="1500" alt="This is the product title" />
						</figure>

					</div>


					<!-- /Thumbnails -->

				</div>
				<!-- /IMAGE -->

				<!-- ITEM DESC -->
				<div class="col-lg-8 col-sm-8">
					<!-- /buttons -->

					<!-- price -->
					<div class="shop-item-price">
						<span class="line-through nopadding-left">N5,000.00</span>
						N4,000.00
					</div>
					<!-- /price -->

					<hr />

					<div class="clearfix margin-bottom-30">
						<span class="pull-right text-success"><i class="fa fa-check"></i> In Stock</span>
						<!--
                        <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
                        -->

						<strong>SKU:</strong> UY7321987
					</div>


					<!-- short description -->
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<!-- /short description -->


					<!-- countdown -->
					<div class="text-center">
						<h5>Limited Offer</h5>
						<div class="countdown" data-from="January 31, 2018 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
					</div>
					<!-- /countdown -->


					<hr />

					<!-- FORM -->
					<form class="clearfix form-inline nomargin" method="get" action="shop-cart.html">
						<input type="hidden" name="product_id" value="1" />

						<!-- see assets/js/view/demo.shop.js -->
						<input type="hidden" id="color" name="color" value="yellow" />
						<input type="hidden" id="qty" name="qty" value="1" />
						<input type="hidden" id="size" name="size" value="5" />
						<!-- see assets/js/view/demo.shop.js -->

						<div class="btn-group pull-left product-opt-size">
							<button type="button" class="btn btn-default dropdown-toggle product-size-dd noradius" data-toggle="dropdown">
								<span class="caret"></span>
								Size <small id="product-selected-size">(<span>5</span>)</small>
							</button>

							<!-- data-val = size value or size id -->
							<ul id="product-size-dd" class="dropdown-menu" role="menu">
								<li class="active"><a data-val="XS" href="#">XS</a></li>
								<li><a data-val="SM" href="#">Sm</a></li>
								<li><a data-val="M" href="#">M</a></li>
								<li><a data-val="L" href="#">L</a></li>
								<li><a data-val="XL" href="#">XL</a></li>
							</ul>
						</div><!-- /btn-group -->

						<div class="btn-group pull-left product-opt-qty">
							<button type="button" class="btn btn-default dropdown-toggle product-qty-dd noradius" data-toggle="dropdown">
								<span class="caret"></span>
								Qty <small id="product-selected-qty">(<span>5</span>)</small>
							</button>

							<ul id="product-qty-dd" class="dropdown-menu clearfix" role="menu">
								<li class="active"><a data-val="1" href="#">1</a></li>
								<li><a data-val="2" href="#">2</a></li>
								<li><a data-val="3" href="#">3</a></li>
								<li><a data-val="4" href="#">4</a></li>
								<li><a data-val="5" href="#">5</a></li>
								<li><a data-val="6" href="#">6</a></li>
								<li><a data-val="7" href="#">7</a></li>
								<li><a data-val="8" href="#">8</a></li>
								<li><a data-val="9" href="#">9</a></li>
								<li><a data-val="10" href="#">10</a></li>
							</ul>
						</div><!-- /btn-group -->

						<button class="btn btn-primary pull-left product-add-cart noradius">ADD TO CART</button>

					</form>
					<!-- /FORM -->


					<hr />

					<!-- Share -->
					<div class="pull-right">

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>

					</div>
					<!-- /Share -->


					<!-- rating -->
					<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
					<!-- /rating -->

				</div>
				<!-- /ITEM DESC -->
			</div>



			<ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
				<li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
				<li role="presentation"><a href="#specs" role="tab" data-toggle="tab">Specifications</a></li>
				<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>
			</ul>


			<div class="tab-content padding-top-20">

				<!-- DESCRIPTION -->
				<div role="tabpanel" class="tab-pane fade in active" id="description">
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Aliquam fermentum commodo magna, id pretium nisi elementum at. Nulla molestie, ligula in fringilla rhoncus, risus leo dictum est, nec egestas nunc sem tincidunt turpis. Sed posuere consectetur est at lobortis.</p>
					<p>Donec blandit ultrices condimentum. Aliquam fermentum commodo magna, id pretium nisi elementum at. Nulla molestie, ligula in fringilla rhoncus, risus leo dictum est, nec egestas nunc sem tincidunt turpis. Sed posuere consectetur est at lobortis.</p>
				</div>

				<!-- SPECIFICATIONS -->
				<div role="tabpanel" class="tab-pane fade" id="specs">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Column name</th>
								<th>Column name</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Size</td>
								<td>XL</td>
							</tr>
							<tr>
								<td>Quantity</td>
								<td>10</td>
							</tr>
							<tr>
								<td>Weight</td>
								<td>132lbs</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!-- REVIEWS -->
				<div role="tabpanel" class="tab-pane fade" id="reviews">
					<!-- REVIEW ITEM -->
					<div class="block margin-bottom-60">

								<span class="user-avatar"><!-- user-avatar -->
									<img class="pull-left media-object" src="assets/images/avatar2.jpg" width="64" height="64" alt="">
								</span>

						<div class="media-body">
							<h4 class="media-heading size-14">
								John Doe &ndash;
								<span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
								<span class="size-14 text-muted"><!-- stars -->
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</span>
							</h4>

							<p>
								I swear I never chop roasted maize wey sweet reash the one wey we bin take this one make, abeg i fit pre-order for more b4 e come finish 4 hya shebi?!
							</p>

						</div>

					</div>
					<!-- /REVIEW ITEM -->
					<!-- REVIEW FORM -->
					<h4 class="page-header margin-bottom-40">ADD A REVIEW</h4>
					<form method="post" action="#" id="form">

						<div class="row margin-bottom-10">

							<div class="col-md-6 margin-bottom-10">
								<!-- Name -->
								<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
							</div>

							<div class="col-md-6">
								<!-- Email -->
								<input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100" required="">
							</div>

						</div>

						<!-- Comment -->
						<div class="margin-bottom-30">
							<textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="1000"></textarea>
						</div>

						<!-- Stars -->
						<div class="product-star-vote clearfix">

							<label class="radio pull-left">
								<input type="radio" name="product-review-vote" value="1" />
								<i></i> 1 Star
							</label>

							<label class="radio pull-left">
								<input type="radio" name="product-review-vote" value="2" />
								<i></i> 2 Stars
							</label>

							<label class="radio pull-left">
								<input type="radio" name="product-review-vote" value="3" />
								<i></i> 3 Stars
							</label>

							<label class="radio pull-left">
								<input type="radio" name="product-review-vote" value="4" />
								<i></i> 4 Stars
							</label>

							<label class="radio pull-left">
								<input type="radio" name="product-review-vote" value="5" />
								<i></i> 5 Stars
							</label>

						</div>

						<!-- Send Button -->
						<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review</button>

					</form>
					<!-- /REVIEW FORM -->

				</div>
			</div>


			<hr class="margin-top-80 margin-bottom-80" />


			<!-- RELATED -->
			<h2 class="owl-featured"><strong>Related</strong> products:</h2>
			<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
				<div class="img-hover">
					<a href="blog-single-default.html">
						<img class="img-responsive" src="assets/Jute-Plant.jpg" alt="">
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
						<img class="img-responsive" src="assets/white_turkeys.jpg" alt="">
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
						<img class="img-responsive" src="assets/Onions-Farming.jpg" alt="">
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
						<img class="img-responsive" src="assets/mushroom-farming.jpg" alt="">
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
						<img class="img-responsive" src="assets/fishfarm-big-1728x800_c.jpg" alt="">
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
						<img class="img-responsive" src="assets/banner-bg.jpg" alt="">
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
						<img class="img-responsive" src="assets/Pineapple_Farming.jpg" alt="">
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
						<img class="img-responsive" src="assets/maize.jpg" alt="">
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
			<!-- /RELATED -->

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
					<img class="footer-logo" src="assets/a2aw.png" alt="" />

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
<div id="preloader">
	<div class="inner">
		<span class="loader"></span>
	</div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<!--<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>-->

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="assets/js/view/demo.shop.js"></script>
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
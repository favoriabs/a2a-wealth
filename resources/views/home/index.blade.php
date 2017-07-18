@extends('home.master')

@section('content')
		<div id="wrapper">

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
												<h2 style="color:gold!important"><strong><a href="#" style="color:gold!important">K.I. Holdings Nigeria Limited</a></strong> &ndash; DadinKowa</h2>
												<h4 style="color:gold!important">
													Awesome Pineapples <br />
													Will Have You Looking no whee else.
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
												<h2 style="color:gold!important"><strong><a href="#" style="color:gold!important">Ambi Quail Eggs</a></strong></h2>
												<h4 style="color:gold!important">
													With Healthy fishes <br />
													And large eggs.
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
								<img class="img-responsive" src="assets2/images/fcmb.jpg" alt="">
							</figure>
	
							<div class="blog-item-small-content">
	
								<h2><a href="#">FCMB Offers 2.1 Billion Naira Only To AFAN Plateau State</a></h2>
	
								<ul class="blog-post-info list-inline">
									<li>
										<a href="#">
											<i class="fa fa-clock-o"></i>
											<span class="font-lato">April 8, 2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-comment-o"></i>
											<span class="font-lato">28 Comments</span>
										</a>
									</li>
								</ul>
	
								<p>All Farmers Association of Nigeria (AFAN), Offers to it's registered members, through A2A Wealth Oppurtunity to access Anchor Borrowers Loan, At one Digit Unit Interest under The Afan,Plateau State Chapter - FCMB - Grand Cereals Private Sector Partnership Arrangement. ...</p>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-plus"></i>
									<span>Read More</span>
								</a>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-cub"></i>
									<span>See All</span>
								</a>
	
							</div>
						</div>
						<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->
	
							<!-- IMAGE -->
							<figure class="blog-item-small-image margin-bottom-20">
								<img class="img-responsive" src="assets/img/pressconf.jpg" alt="AFAN Press Conference">
							</figure>
	
							<div class="blog-item-small-content">
	
								<h2><a href="#">AFAN Press Conference</a></h2>
	
								<ul class="blog-post-info list-inline">
									<li>
										<a href="#">
											<i class="fa fa-clock-o"></i>
											<span class="font-lato">April 21, 2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-comment-o"></i>
											<span class="font-lato">28 Comments</span>
										</a>
									</li>
								</ul>
	
								<p>AFAN Press Conference which bothered on how far the association has come and the way forward.</p>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-plus"></i>
									<span>Read More</span>
								</a>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-cub"></i>
									<span>See All</span>
								</a>
	
							</div>
						</div>
						
						<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->
	
							<!-- IMAGE -->
							<figure class="blog-item-small-image margin-bottom-20">
								<img class="img-responsive" src="assets/img/inspect.jpg" alt="AFAN Press Conference">
							</figure>
	
							<div class="blog-item-small-content">
	
								<h2><a href="#">Fertilizer Inspection in Kaduna</a></h2>
	
								<ul class="blog-post-info list-inline">
									<li>
										<a href="#">
											<i class="fa fa-clock-o"></i>
											<span class="font-lato">April 21, 2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-comment-o"></i>
											<span class="font-lato">28 Comments</span>
										</a>
									</li>
								</ul>
	
								<p>AFAN Delegates inspecting a Rice manufacturing plant in Kaduna.</p>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-plus"></i>
									<span>Read More</span>
								</a>
	
								<a href="#" class="btn btn-reveal btn-default">
									<i class="fa fa-cub"></i>
									<span>See All</span>
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
										<li><i class="fa fa-check text-success"></i>No Degree or Qualifications needed</li>
										<li><i class="fa fa-check text-success"></i> Pay the Applicable Under-stated fees provided in the table below. <stromg>NB</stromg>: Non-Refundable  </li>
									</ul>
								</div>
	
								<div class="col-sm-6">
									<ul class="list-unstyled list-icons">
										<li><i class="fa fa-check text-success"></i> Download A2A wealth registration form from link below, fill and return for Activation.</li>
										<li><i class="fa fa-check text-success"></i> Congratulations on becoming a new member of The A2A wealth E-commerce agricultural web platform!!!.</li>
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
										<p>A2A has been of great help to me.</p>
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
										<p>A2A has been of great help to me.</p>
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
							<h4>SUBSCRIBE</h4>
							<p>Interested in our articles, subscribe here</p>
	
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
	
						<h4 class="text-left margin-top-20"><a href="#">Depad Integrated Ventures</a></h4>
						<p class="text-left">Known Well for their tall rich rooted plants. Located in Lamingo LGA of Plateau State.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/white_turkeys.jpg" alt="">
						</a>
	
						<h4 class="text-left margin-top-20"><a href="#">Michael Poultry Farms</a></h4>
						<p class="text-left">Located in Vom Area Of Plateau State. Known for their large Turky Poultry</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/Onions-Farming.jpg" alt="">
						</a>
	
						<h4 class="text-left margin-top-20"><a href="#">Nyambees Company Plc</a></h4>
						<p class="text-left">Known not just for their maize production but also for their recent addition of onions to their production quota.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/mushroom-farming.jpg" alt="">
						</a>
	
						<h4 class="text-left margin-top-20"><a href="#">Asixo Model Farm</a></h4>
						<p class="text-left">A Beautiful farm located in Rukuba Area of Plateau State, Known mostly for their awesome Mushrooms of various kinds.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/fishfarm-big-1728x800_c.jpg" alt="">
						</a>
						<h4 class="text-left margin-top-20"><a href="#">Ambi Quail Eggs</a></h4>
						<p class="text-left">Locatedd in Bassa LGA, Plateau State. Jnown now for more than their eggs but also for their fish farm which is becoming well favoured in the area.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/banner-bg.jpg" alt="">
						</a>
						<h4 class="text-left margin-top-20"><a href="blog-single-default.html">1st Digital Farms</a></h4>
						<p class="text-left">Located in Shendam LGA located in Plateau State. Known for their High range of scented flowers, their GreenHouse.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/Pineapple_Farming.jpg" alt="">
						</a>
						<h4 class="text-left margin-top-20"><a href="blog-single-default.html">K.I. Holdings Nigeria Limited</a></h4>
						<p class="text-left">Located in Dadinkowa Area. Producers of Pinneaple, Carrots, Maize, amongst others.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2015
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
					<div class="img-hover">
						<a href="#">
							<img class="img-responsive" src="assets2/images/maize.jpg" alt="">
						</a>
						<h4 class="text-left margin-top-20"><a href="#">Nyambees Company Plc</a></h4>
						<p class="text-left">Located in Foron District of the barkin ladi LGA of Plateau State.</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								29th Jan 2017
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comments"></i>
									3
								</a>
							</li>
						</ul>
					</div>
				</div>
	
			</div>
		</section>
@endsection

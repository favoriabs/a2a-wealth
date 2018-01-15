		<body style="background-image: url(assets2/Jute-Plant.jpg);z-index: 0;" class="smoothscroll enable-animation">
	<!-- wrapper -->
	
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
					<li><a style="color: white!important;" href="{{route('login')}}">LOGIN</a></li>
				</ul>
	
			</div>
		</div>
		<div style="opacity: 0.95" id="header" class="sticky clearfix">
	
			<!-- SEARCH HEADER -->
			<div class="search-box over-header">
				<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>
	
				<form action="#" method="get">
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
									<a style="color: white!important;" class="active" href="/">
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
									<a style="color: white!important;" class="" href="{{route('news_update')}}">
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
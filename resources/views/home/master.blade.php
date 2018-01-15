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
		.pricing-title{
			    height: 75px!important;
		}
		.list-unstyled {
    font-size: 13px!important;
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
@include('home.header')
@yield('content')

@include('home.footer')
</body>
</html>
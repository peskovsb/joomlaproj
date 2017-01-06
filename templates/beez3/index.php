<!DOCTYPE html>
<html>
<head>
<title>Free Style | Home</title>
<link href="/templates/beez3/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/templates/beez3/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/templates/beez3/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="/templates/beez3/js/move-top.js"></script>
<script type="text/javascript" src="/templates/beez3/js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="/templates/beez3/js/simpleCart.min.js"> </script>
<link href="/templates/beez3/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/templates/beez3/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 
<style>
.top-nav li a{color:#fff!important;}
</style>
	<!--bottom-header-->
	<div class="header-bottom" style="z-index: 9999999;position: relative;margin-top: 30px;">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.html">О себе</a></li>
					
					<li class="grid"><a href="#">Услуги</a>
					</li>
					<li class="grid"><a href="#">Цены</a>
						
					</li>
					<li class="grid"><a href="#">Портфолио</a>
						
					</li>
					<li class="grid"><a href="#">Контакты</a>
						
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home" style="margin-top:-109px;">
		<div  id="top" class="callbacks_container">
			<div style="position:absolute;top:150px;left:100px;z-index: 999;width:500px">
				<div style="color:#fff;text-transform: uppercase;    font-size: 28px;
    line-height: 41px;font-family: 'Trebuchet MS', sans-serif;
    font-weight: 100;">Я Петя Петрович, сделаю для вас
				супер крутой сайт!</div>
				<a style="display:inline-block;padding:10px 20px;border:1px solid #fff;color:#fff;font-size:20px;text-decoration:none;margin-top:15px;" href="#">от <span style="font-family:Arial;">10 000</span> руб</a>
			</div>
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner-1"></div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="/templates/beez3/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
    <jdoc:include type="component" />
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>ABOUT US</h3>
					<ul>
						<li><a href="#">Who We Are</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="#">Our Sites</a></li>
						<li><a href="#">In The News</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Carrers</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="account.html">Your Account</a></li>
						<li><a href="#">Personal Information</a></li>
						<li><a href="contact.html">Addresses</a></li>
						<li><a href="#">Discount</a></li>
						<li><a href="#">Track your order</a></li>					 					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CUSTOMER SERVICES</h3>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Cancellation</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Bulk Orders</a></li>
						<li><a href="#">Buying Guides</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CATEGORIES</h3>
					<ul>
						<li><a href="#">Sports Shoes</a></li>
						<li><a href="#">Casual Shoes</a></li>
						<li><a href="#">Formal Shoes</a></li>
						<li><a href="#">Party Shoes</a></li>
						<li><a href="#">Ethnic</a></li>				 
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© 2015 Free Style All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>

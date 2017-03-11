<!DOCTYPE html>
<html>
<head>

<?php
$document 	= & JFactory::getDocument();
?>
<title><?= $document->title ?></title>
<meta name="Description" content="<?= $document->description ?>"> 
<meta name="Keywords" content="<?= $document->getMetaData('keywords') ?>"> 
<!--<link href="/templates/beez3/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/templates/beez3/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->

<!--	Roboto font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

<!-- Mask JS -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

<!--Social share	-->
<script src="https://yastatic.net/share2/share.js" async="async"></script>

<!--Adaptive Menu-->
<link rel="stylesheet" href="/templates/beez3/html/mod_menu/menu_style.css">
<script type="text/javascript" src="/templates/beez3/html/mod_menu/adaptivemenu.js"></script>

<!--theme-style-->
<link href="/templates/beez3/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/templates/beez3/css/threerow.css" rel="stylesheet" type="text/css" media="all" />

	<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="/templates/beez3/js/move-top.js"></script>
<script type="text/javascript" src="/templates/beez3/js/easing.js"></script>

<!-- Material Design -->
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="/templates/beez3/owlslider/owl.carousel.min.css">
<link rel="stylesheet" href="/templates/beez3/owlslider/owl.theme.default.min.css">
<script src="/templates/beez3/owlslider/owl.carousel.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/templates/beez3/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="/templates/beez3/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
					jQuery(document).ready(function($) {
						jQuery('.fancybox').fancybox({
							fitToView: false, // add this
							maxWidth: "80%", //
							tpl:{
								closeBtn : '<a class="fancybox-item fancybox-close" href="javascript:;"><i class="material-icons w3-xlarge">close</i><br>Закрыть</a>',
								next     : '<a class="fancybox-nav fancybox-next" href="javascript:;">' +
								'<div class="abs-positioner abs-next"><span><i class="material-icons w3-xxlarge">arrow_forward</i></span></div>' +
								'</a>',
								prev     : '<a class="fancybox-nav fancybox-prev" href="javascript:;">' +
								'<div class="abs-positioner abs-prev"><span><i class="material-icons w3-xxlarge">arrow_back</i></span></div>' +
								'</a>',
							},
							openEffect:'none',
							closeEffect:'none',
							openSpeed:0,
							closeSpeed:0,
							nextEffect:'none',
							prevEffect:'none',
						});
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
						$('.owl-carousel').owlCarousel({
							loop:true,
							margin:1,
							navSpeed: 250,
							responsiveClass:true,
							navText: ['<i class="material-icons w3-xxlarge">arrow_back</i>',
								'<i class="material-icons w3-xxlarge">arrow_forward</i>'],
							rewind: true,
							responsive:{
								0:{
									items:1,
									nav:true
								}
							}
						})
					});
				</script>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<style>
	/*! Color themes for Google Code Prettify | MIT License | github.com/jmblog/color-themes-for-google-code-prettify */
	ol.linenums li:first-child{padding-top:10px;}
	ol.linenums li:last-child{padding-bottom:10px;}
	.prettyprint{padding:0px!important;background:#e7e5e3;font-family:Menlo,Bitstream Vera Sans Mono,DejaVu Sans Mono,Monaco,Consolas,monospace;border:0!important}.pln{color:#4d4d4c}ol.linenums{margin-top:0;margin-bottom:0;color:#8e908c}li.L0,li.L1,li.L2,li.L3,li.L4,li.L5,li.L6,li.L7,li.L8,li.L9{padding-left:1em;background-color:#f5f2f0;list-style-type:decimal}@media screen{.str{color:#718c00}.kwd{color:#8959a8}.com{color:#8e908c}.typ{color:#4271ae}.lit{color:#f5871f}.pun{color:#4d4d4c}.opn{color:#4d4d4c}.clo{color:#4d4d4c}.tag{color:#c82829}.atn{color:#f5871f}.atv{color:#3e999f}.dec{color:#f5871f}.var{color:#c82829}.fun{color:#4271ae}}


	/*li.L0, li.L1, li.L2, li.L3,
	li.L5, li.L6, li.L7, li.L8
	{ list-style-type: decimal !important }*/
</style>

<!-- start menu -->
<script src="/templates/beez3/js/simpleCart.min.js"> </script>
<link href="/templates/beez3/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/templates/beez3/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body>
<jdoc:include type="modules" name="position-12" />

<style>
	#fountainG{
		position:relative;
		width:96px;
		height:12px;
		margin:auto;
	}

	.fountainG{
		position:absolute;
		top:0;
		background-color:rgb(178,224,255);
		width:12px;
		height:12px;
		animation-name:bounce_fountainG;
		-o-animation-name:bounce_fountainG;
		-ms-animation-name:bounce_fountainG;
		-webkit-animation-name:bounce_fountainG;
		-moz-animation-name:bounce_fountainG;
		animation-duration:1.5s;
		-o-animation-duration:1.5s;
		-ms-animation-duration:1.5s;
		-webkit-animation-duration:1.5s;
		-moz-animation-duration:1.5s;
		animation-iteration-count:infinite;
		-o-animation-iteration-count:infinite;
		-ms-animation-iteration-count:infinite;
		-webkit-animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;
		animation-direction:normal;
		-o-animation-direction:normal;
		-ms-animation-direction:normal;
		-webkit-animation-direction:normal;
		-moz-animation-direction:normal;
		transform:scale(.3);
		-o-transform:scale(.3);
		-ms-transform:scale(.3);
		-webkit-transform:scale(.3);
		-moz-transform:scale(.3);
		border-radius:8px;
		-o-border-radius:8px;
		-ms-border-radius:8px;
		-webkit-border-radius:8px;
		-moz-border-radius:8px;
	}

	#fountainG_1{
		left:0;
		animation-delay:0.6s;
		-o-animation-delay:0.6s;
		-ms-animation-delay:0.6s;
		-webkit-animation-delay:0.6s;
		-moz-animation-delay:0.6s;
	}

	#fountainG_2{
		left:12px;
		animation-delay:0.75s;
		-o-animation-delay:0.75s;
		-ms-animation-delay:0.75s;
		-webkit-animation-delay:0.75s;
		-moz-animation-delay:0.75s;
	}

	#fountainG_3{
		left:24px;
		animation-delay:0.9s;
		-o-animation-delay:0.9s;
		-ms-animation-delay:0.9s;
		-webkit-animation-delay:0.9s;
		-moz-animation-delay:0.9s;
	}

	#fountainG_4{
		left:36px;
		animation-delay:1.05s;
		-o-animation-delay:1.05s;
		-ms-animation-delay:1.05s;
		-webkit-animation-delay:1.05s;
		-moz-animation-delay:1.05s;
	}

	#fountainG_5{
		left:48px;
		animation-delay:1.2s;
		-o-animation-delay:1.2s;
		-ms-animation-delay:1.2s;
		-webkit-animation-delay:1.2s;
		-moz-animation-delay:1.2s;
	}

	#fountainG_6{
		left:60px;
		animation-delay:1.35s;
		-o-animation-delay:1.35s;
		-ms-animation-delay:1.35s;
		-webkit-animation-delay:1.35s;
		-moz-animation-delay:1.35s;
	}

	#fountainG_7{
		left:72px;
		animation-delay:1.5s;
		-o-animation-delay:1.5s;
		-ms-animation-delay:1.5s;
		-webkit-animation-delay:1.5s;
		-moz-animation-delay:1.5s;
	}

	#fountainG_8{
		left:84px;
		animation-delay:1.64s;
		-o-animation-delay:1.64s;
		-ms-animation-delay:1.64s;
		-webkit-animation-delay:1.64s;
		-moz-animation-delay:1.64s;
	}



	@keyframes bounce_fountainG{
		0%{
			transform:scale(1);
			background-color:rgb(184,244,255);
		}

		100%{
			transform:scale(.3);
			background-color:rgb(255,255,255);
		}
	}

	@-o-keyframes bounce_fountainG{
		0%{
			-o-transform:scale(1);
			background-color:rgb(184,244,255);
		}

		100%{
			-o-transform:scale(.3);
			background-color:rgb(255,255,255);
		}
	}

	@-ms-keyframes bounce_fountainG{
		0%{
			-ms-transform:scale(1);
			background-color:rgb(184,244,255);
		}

		100%{
			-ms-transform:scale(.3);
			background-color:rgb(255,255,255);
		}
	}

	@-webkit-keyframes bounce_fountainG{
		0%{
			-webkit-transform:scale(1);
			background-color:rgb(184,244,255);
		}

		100%{
			-webkit-transform:scale(.3);
			background-color:rgb(255,255,255);
		}
	}

	@-moz-keyframes bounce_fountainG{
		0%{
			-moz-transform:scale(1);
			background-color:rgb(184,244,255);
		}

		100%{
			-moz-transform:scale(.3);
			background-color:rgb(255,255,255);
		}
	}
</style>

    <jdoc:include type="component" />
 	<div class="footer-component clearfix">
    	
	<div class="container-webka clearfix" style="padding: 0;">
		<div class="three-footer-row">
			<nav class="topInnerMenuMainFooter">
				<a href="/" class="logotypeInnerMainFooter"><span>Blog-kopilka.ru</span></a>
			</nav>
			<div class="clearfix">
				<div class="social-bg">
					<img src="/templates/beez3/images/social1.png">
				</div>
				<div class="social-bg">
					<img src="/templates/beez3/images/social2.png">
				</div>
			</div>
		</div>
		<div class="three-footer-row">
			<a style="margin-top: 35px;" class="wtr-btn wd-rouder fancybox-sr btnsendresponce" href="#sendresponce">Заказать сайт</a>
		</div>
		<div class="three-footer-row">
			<div class="contact-footer-block">
				<div class="wtr-telephone" style="color:#fff">+7(985)735-45-85</div>
			</div>
		</div>
    </div>
	</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!--end-footer-text-->
	<jdoc:include type="modules" name="position-sendresponce" />



</body>
</html>

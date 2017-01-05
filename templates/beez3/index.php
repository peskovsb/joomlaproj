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
    font-weight: 100;">Я Вася Петрович, сделаю для вас
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
	<!--start-shoes--> 
	<div class="shoes">
    <div class="container" style="font-size:16px; line-height: 24px;">
        <div class="col-md-8">
            <h4 style="
                font-size: 1.5em;
                font-weight: 600;
                margin: 0px 0 20px 0px;
                text-transform: uppercase;
                color: #242424;
                text-decoration: none;">
                Разработка сайтов просто и легко!
            </h4>
            <p>
			
			Здравствуйте, уже <span style="font-family: arial;">10</span> лет я работаю веб-мастером. Полученный опыт позволяет мне справляться с поставленными задачами, успешно проходя через основные этапы от профессионального дизайна, размещения на хостинге, наполнения контентом, заканчивая успешным СЕО продвижением. К тому же, могу помочь с аудитом сайта, консультацией, фиксацией багов и лечением от вирусов. 
            </p>
            <p>
                Часто возникающие вопросы можно
                <a style="text-decoration:underline" href="">посмотреть здесь</a>
            </p>
        </div>

        <div class="col-md-4">
            <img src="/templates/beez3/images/iamm.jpg" style="width:70%">
        </div>
    </div>
    </div>

    <!--start-abt-shoe-->
    <div class="abt-shoe" style="padding-bottom:3em;">
        <div class="container">
            <div class="abt-shoe-main">
                <div class="col-md-4 abt-shoe-left">
                    <div class="abt-one">
                        <a href="single.html"><img src="/templates/beez3/images/bitrix-banner8.jpg" alt="" /></a>
                        <h4><a href="single.html"><span style="font-family: arial;">1</span>C Bitrix</a></h4>
                        <p>Сайт на Битрикс это верный путь к успеху. Пожалуй главный плюс -
                            это легкая интеграция с 1С:Управление торговлей </p>

                        <p style="text-align: left;
                            margin: 10px 25px 0px;
                            white-space: nowrap;
                            padding: 0;
                            overflow: hidden;">
                            <span style="
                            background-color: #b50707;
                            border: 0;
                            cursor: pointer;
                            display: inline-block;
                            margin: 0;
                            text-decoration: none;
                            white-space: nowrap;
                            border-radius: 3px;
                            font-weight: 700;
                            font-family: Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                            color: #fff;
                            text-align: center;
                            padding: 0 12px;
                            height: 36px;
                            font-size: 15px;
                            line-height: 36px;
                            -webkit-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            box-sizing: border-box;
                            -webkit-font-smoothing: antialiased;
                            -webkit-transition: 220ms ease-in-out;
                            -moz-transition: 220ms ease-in-out;
                            -ms-transition: 220ms ease-in-out;
                            -o-transition: 220ms ease-in-out;
                            transition: 220ms ease-in-out;
                            ">Подробнее</span>
                            <span style="
                                top: 5px;
                                margin-left: 17px;">
                                <span style="
                                    font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    letter-spacing: 0;
                                    vertical-align: baseline;">от</span>
                                <span style="
                                    display: inline-block;
                                    font: 700 29px/30px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    vertical-align: baseline;">25 499</span>&nbsp;
                                    <span style="
                                        font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                        letter-spacing: 0;
                                        vertical-align: baseline;">руб.</span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 abt-shoe-left">
                    <div class="abt-one">
                        <a href="single.html"><img src="/templates/beez3/images/wordpress-bg-medblue.jpg" alt="" /></a>
                        <h4><a href="single.html">Wordpress</a></h4>
                        <p>Эта CMS самая популярная в мире! Не надо устанавливать, настраивать, программировать.
                            Просто добавляйте свою информацию!</p>

                        <p style="text-align: left;
                            margin: 10px 25px 0px;
                            white-space: nowrap;
                            padding: 0;
                            overflow: hidden;">
                            <span style="
                            background-color: #b50707;
                            border: 0;
                            cursor: pointer;
                            display: inline-block;
                            margin: 0;
                            text-decoration: none;
                            white-space: nowrap;
                            border-radius: 3px;
                            font-weight: 700;
                            font-family: Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                            color: #fff;
                            text-align: center;
                            padding: 0 12px;
                            height: 36px;
                            font-size: 15px;
                            line-height: 36px;
                            -webkit-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            box-sizing: border-box;
                            -webkit-font-smoothing: antialiased;
                            -webkit-transition: 220ms ease-in-out;
                            -moz-transition: 220ms ease-in-out;
                            -ms-transition: 220ms ease-in-out;
                            -o-transition: 220ms ease-in-out;
                            transition: 220ms ease-in-out;
                            ">Подробнее</span>
                            <span style="
                                top: 5px;
                                margin-left: 17px;">
                                <span style="
                                    font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    letter-spacing: 0;
                                    vertical-align: baseline;">от</span>
                                <span style="
                                    display: inline-block;
                                    font: 700 29px/30px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    vertical-align: baseline;">15 499</span>&nbsp;
                                    <span style="
                                        font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                        letter-spacing: 0;
                                        vertical-align: baseline;">руб.</span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 abt-shoe-left">
                    <div class="abt-one">
                        <a href="single.html"><img src="/templates/beez3/images/responsive-joomla-website-design.jpg" alt="" /></a>
                        <h4><a href="single.html">Joomla</a></h4>
                        <p>Привыкли с этой CMS? На ней я также делал сайты и знаком не по наслышке. Сайт-визитка,
                        информационный каталог - легко!</p>
                        <p style="text-align: left;
                            margin: 10px 25px 0px;
                            white-space: nowrap;
                            padding: 0;
                            overflow: hidden;">
                            <span style="
                            background-color: #b50707;
                            border: 0;
                            cursor: pointer;
                            display: inline-block;
                            margin: 0;
                            text-decoration: none;
                            white-space: nowrap;
                            border-radius: 3px;
                            font-weight: 700;
                            font-family: Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                            color: #fff;
                            text-align: center;
                            padding: 0 12px;
                            height: 36px;
                            font-size: 15px;
                            line-height: 36px;
                            -webkit-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            box-sizing: border-box;
                            -webkit-font-smoothing: antialiased;
                            -webkit-transition: 220ms ease-in-out;
                            -moz-transition: 220ms ease-in-out;
                            -ms-transition: 220ms ease-in-out;
                            -o-transition: 220ms ease-in-out;
                            transition: 220ms ease-in-out;
                            ">Подробнее</span>
                            <span style="
                                top: 5px;
                                margin-left: 17px;">
                                <span style="
                                    font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    letter-spacing: 0;
                                    vertical-align: baseline;">от</span>
                                <span style="
                                    display: inline-block;
                                    font: 700 29px/30px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                    vertical-align: baseline;">12 499</span>&nbsp;
                                    <span style="
                                        font: 400 18px Arial,'Helvetica Neue',Helvetica,FreeSans,sans-serif;
                                        letter-spacing: 0;
                                        vertical-align: baseline;">руб.</span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--end-abt-shoe-->

    <div class="shoes" style="padding:3em 0;">
        <div class="container">
            <div class="product-one">
                <h4 style="font-size: 1.5em;font-weight: 600;margin: 0px 0 30px 15px;text-transform: uppercase;">
                    <a style="color: #242424;text-decoration: none;" href="/single.html">Портфолио</a>
                </h4>
                <div class="col-md-3 product-left">
                    <div class="p-one simpleCart_shelfItem" style="padding:15px;">
                        <a href="single.html">
                            <img src="/templates/beez3/images/20140217-laptop-internet-websites.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="p-one simpleCart_shelfItem" style="padding:15px;">
                        <a href="single.html">
                            <img src="/templates/beez3/images/20140217-laptop-internet-websites.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="p-one simpleCart_shelfItem" style="padding:15px;">
                        <a href="single.html">
                            <img src="/templates/beez3/images/20140217-laptop-internet-websites.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3 product-left">
                    <div class="p-one simpleCart_shelfItem" style="padding:15px;">
                        <a href="single.html">
                            <img src="/templates/beez3/images/20140217-laptop-internet-websites.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start-shoes-->
    <div class="shoes">
        <div class="container" style="font-size:16px; line-height: 24px;">
            <div class="col-md-8">
                <h4 style="
                font-size: 1.5em;
                font-weight: 600;
                margin: 0px 0 20px 0px;
                text-transform: uppercase;
                color: #242424;
                text-decoration: none;">
                    Сколько это стоит?
                </h4>
                <p>
                    Зачастую это самый важный вопрос и ответ у всех разный. Иногда цены могут
                    розниться от десятков до сотен тысяч рублей, хотя цель один - создать сайт,
                    но все не так просто, ведь порой за обычной кнопкой с надписью "поиск"
                    может скрываться несколько лет работы, в числе не одной сотни программистов.
                    Также и с обычным веб представительством в интернете, все зависит от задачи, что
                    будет закреплено документом ТЗ (техническое задание), также работая со мной, вы
                    работаете на прямую, из этой цепочки исключается менеджер, который принимает заказ,
                    руководитель, который передаст все проект менеджеру, который в свою очередь либо
                    отдаст проект программисту, либо что хуже на фриланс, где ваш проект будут делать,
                    забрасывать, а потом доробатывать разные люди. Плюс, играя в этот "испорченный телефон"
                    вы рискуете терять часть информации, либо доносить ее в искаженном виде
                </p>
                <p>
                    Я не накручиваю на аренде помещения, концелярке, армортизации технического оборудования,
                    А просто делаю свою работу и соблюдаю все договоренности.
                </p>
            </div>

            <div class="col-md-4">
                <img src="/templates/beez3/images/iamm.jpg" style="width:70%">
            </div>
        </div>
    </div>

<style>
    .bord-col:hover{
        border-color:#b50707!important;
    }
    .textstyling{
        width:60%;
        text-align: center;
        margin:auto;
        font-weight:bold;
    }
	.btnpadding{
		padding-bottom:30px;
		text-align: left;
	}
</style>

    <h4 style="
                    font-size: 1.5em;
                    font-weight: 600;
                    margin: 0px 0 30px 0px;
                    text-transform: uppercase;
                    color: #242424;
                    text-decoration: none;
                    text-align:center;
                    ">
        Этапы разработки
    </h4>
    <div class="shoes" style="
        padding:3em 0;
        background: url(/templates/beez3/images/b-carousel__slide_main-frame_1.-FC0E19.jpg) 0 0 no-repeat;
        background-size: cover;">
        <div class="container">
            <div class="col-md-3">
                <div onmouseover="showHover('t1');" class="bord-col tsh1" style="
                    border: 10px solid #ffe400;
                    padding:10px;
                    width:190px;
                    height:190px;
                    margin:auto;
                    font-weight:bold;
                    line-height:155px;
                    text-align: center;
                    color: #242424;
                    font-size: 1.5em;
                    text-transform: uppercase;
                    background:#fff;">
                    Начало
                </div>
            </div>
            <div class="col-md-3">
                <div onmouseover="showHover('t2')" class="bord-col tsh2" style="
                    border: 10px solid #ffe400;
                    padding:10px;
                    width:190px;
                    height:190px;
                    margin:auto;
                    font-weight:bold;
                    line-height:155px;
                    text-align: center;
                    color: #242424;
                    font-size: 1.5em;
                    text-transform: uppercase;
                    background:#fff;">
                    Задача
                </div>
            </div>
            <div class="col-md-3">
                <div onmouseover="showHover('t3')" class="bord-col tsh3" style="
                    border: 10px solid #ffe400;
                    padding:10px;
                    width:190px;
                    height:190px;
                    margin:auto;
                    font-weight:bold;
                    text-align: center;
                    color: #242424;
                    font-size: 1.5em;
                    text-transform: uppercase;
                    background:#fff;">
                    <div style="
                    display: table-cell;
                    vertical-align: middle;
                    height: 150px;
                    width: 150px;">
                    Рабочий<br/>процесс
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div onmouseover="showHover('t4')" class="bord-col tsh4" style="
                    border: 10px solid #ffe400;
                    padding:10px;
                    width:190px;
                    height:190px;
                    margin:auto;
                    font-weight:bold;
                    line-height:155px;
                    text-align: center;
                    color: #242424;
                    font-size: 1.5em;
                    text-transform: uppercase;
                    background:#fff;">
                    Запуск
                </div>
            </div>
        </div>
    </div>

    <div id="additionalTextShow" class="shoes" style="padding:3em 0;display:none;border-bottom:5px solid #ccc;">

    <div class="container" style="
        font-size: 16px;
        line-height: 24px;">
        <p id="t1" class="hiddenHover textstyling" style="display:none;">
            С начала нам нужно познакомиться, определить вектор развития, какие у вас цели,
            на какую аудиторию вы ориентируетесь. Для этого вероятнее всего придется
            заполнить бриф, либо обсудить все вопросы устно. Чем больше учтено нюансев,
            тем качественее работа будет в итоге.
        </p>
        <p id="t2" class="hiddenHover textstyling" style="display:none;">
            Собрав общую информацию, теперь можно переходить к конкретике: определять сроки,
            цену, составлять техническое задание и заключать договор.
        </p>
        <p id="t3" class="hiddenHover textstyling" style="display:none;">
            В процесс работы входит создание макета, либо настройка уже готового шаблона,
            установка CMS, верстка, программирование, создание новых модулей и плагинов,
            в общем выполненение всех пунктов технического задания и договоренностей
        </p>
        <p id="t4" class="hiddenHover textstyling" style="display:none;">
            Тестирование, фиксация всех багов, установка метрики для подсчета посетителей.
            Привязка доменного имени к серверу, после чего сайт будет доступ для всех пользователей
            интернета.
        </p>
        </div>
    </div>


    <script>
        function showHover(id) {
            document.getElementById('additionalTextShow').style.display = 'block';
            var x = document.getElementsByClassName("hiddenHover");
            for(i=0;i<= x.length-1;i++){
                x[i].style.display = 'none';
            }
            if (document.getElementById(id).style.display == 'none'){
                document.getElementById(id).style.display = 'block';
            }else{
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>

    <div class="shoes">
        <div class="container">
		<h4 style="font-size: 1.5em;font-weight: 600;margin: 0px 0 30px 15px;text-transform: uppercase;">
                    <a style="color: #242424;text-decoration: none;" href="/single.html">Блог</a>
                </h4>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                    <h4>Aenean placerat</h4>
                    <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                        Записям в которых, посетители смогу ставить...</p>
                </div>
            </div>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                    <h4>Aenean placerat</h4>
                    <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                        Записям в которых, посетители смогу ставить...</p>
                </div>
            </div>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                    <h4>Aenean placerat</h4>
                    <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                        Записям в которых, посетители смогу ставить...</p>
                </div>
            </div>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                    <h4>Aenean placerat</h4>
                    <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                        Записям в которых, посетители смогу ставить...</p>
                </div>
            </div>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                <h4>Aenean placerat</h4>
                <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                    Записям в которых, посетители смогу ставить...</p>
                    </div>
            </div>
            <div class="col-md-4 product-left btnpadding">
                <div style="padding:10px 20px;background:#fff;border: 1px solid rgba(24, 27, 42, 0.13);">
                    <h4>Aenean placerat</h4>
                    <p>Если на вашем сайте требуется создание раздела с блогом или новостями, статьями.
                        Записям в которых, посетители смогу ставить...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="shoes">
    <div class="container">
			<div class="product-one">
				<div class="col-md-3 product-left "> 
					<div class="p-one simpleCart_shelfItem">							
							<a href="single.html">
								<img src="/templates/beez3/images/shoes-1.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
					
					</div>
				</div>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-2.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-3.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-13.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">
				<div class="col-md-3 product-left "> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-5.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="col-md-3 product-left btnpadding"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-6.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="col-md-3 product-left btnpadding"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-7.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="col-md-3 product-left btnpadding"> 
					<div class="p-one simpleCart_shelfItem">
						
						<a href="single.html">
								<img src="/templates/beez3/images/shoes-8.png" alt="" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4>Aenean placerat</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-shoes-->
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

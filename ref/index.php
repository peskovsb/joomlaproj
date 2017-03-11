<?php

/**
 * Обрабатывает ссылку и выдает true/false
 * Есть ли она в базе шаблонов
 * @param $url - ссылка на сайт реферал
 * @return bool
 */
function checkUrl($url){
    $urlArray = [
        'http://dts.travel',
        'http://borcad.pro',
        'http://yaltaplaza.ru',
        'http://borcad.pro',
        'http://preanalytica.ru',
        'http://kypivelo.ru',
        'http://maxima-shop.ru',
        'http://uremont.com',
        'http://biomebel.com',
    ];
    if(in_array($url,$urlArray)){
        return true;
    }else{
        return false;
    }
}

function urlWorker(){
    $url = $_GET['url'];
    if(checkUrl($url)){
        return [
            'success' => true,
            'url' => $url,
        ];
    }else{
        return [
          'success' => false,
          'message' => 'Ошибка в переданном параметре URL, не найдено в базе данных'
        ];
    }
}
$response = urlWorker();
?>
<!DOCTYPE html>
<html style="height:100%">
<meta charset="utf-8">
<script src="/templates/beez3/js/jquery-1.11.0.min.js"></script>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script>
    $(document).ready(function(){
        setHeight(getWindowHeight());
    });

    $(window).resize(function() {
        setHeight(getWindowHeight());
    });

    function getWindowHeight(){
        topBanner = 125;
        minimum = 200;
        win_h = $(window).height();
        result = ((win_h - topBanner) < minimum) ? minimum : win_h - topBanner;
        return result;
    }

    function setHeight(height){
        $('#topHeight').css({'height': height});
    }
</script>
<style>
    /*ClearFix*/
    .clearfix{
        position: relative;
        width:100%;
    }
    .clearfix:after {
        content: '';
        clear: both;
        display: table;
    }
    .wrapperCompany{width:100%;}
    .wrapperCompany__block{float:left;width:33.3333%;}
    .wrapperCompany__block_inner{height:123px;}
    .wrapperCompany__block_content{padding:15px;}

    .wrapperCompany__block_content h1{font-size: 1em;margin:0;}
    .wrapperCompany__block_content p{font-size: 0.7em}

    .type1_btn{
        font-family: roboto;
        font-size: 1em;
        float: none;
        width: 222px;
        display:block;
        margin: 10px auto;
        line-height: 28px;
        font-weight: 500;
        height: 40px;
        position: static;
        text-align:center;
        color: #ffffff;
        border: 0;
        border-radius: 2px;
        background: rgb(255,123,10);
        background: -moz-linear-gradient(top, rgba(255,123,10,1) 0%, rgba(250,112,7,1) 47%, rgba(241,92,1,1) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,123,10,1)), color-stop(47%,rgba(250,112,7,1)), color-stop(100%,rgba(241,92,1,1)));
        background: -webkit-linear-gradient(top, rgba(255,123,10,1) 0%,rgba(250,112,7,1) 47%,rgba(241,92,1,1) 100%);
        background: -o-linear-gradient(top, rgba(255,123,10,1) 0%,rgba(250,112,7,1) 47%,rgba(241,92,1,1) 100%);
        background: -ms-linear-gradient(top, rgba(255,123,10,1) 0%,rgba(250,112,7,1) 47%,rgba(241,92,1,1) 100%);
        background: linear-gradient(to bottom, rgba(255,123,10,1) 0%,rgba(250,112,7,1) 47%,rgba(241,92,1,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff7b0a', endColorstr='#f15c01',GradientType=0 );
    }
    }


    /* MEDIA SCREEN */
    /**
    - small phones 0 - 415 px
    - ipad 416 - 770 px
    - square 770 - 1024
    */


    @media (min-width: 770px) and (max-width: 1024px) {
        /* empty */
        /*.wrapperCompany__block_content{
            background:#c24733;
        }*/
        .wrapperCompany__block_content p{font-size: 0.6em}
    }

    @media (min-width: 416px) and (max-width: 770px) {
        /* empty */
        .m_hide{display:none;}
        .wrapperCompany__block{float:left;width:50%;}

        /*.wrapperCompany__block_content{
            background:#090;
        }*/
        .wrapperCompany__block_content p{font-size: 0.65em}
    }

    @media (max-width: 416px) {
        /* empty */
        .xs_hide{display:none;}
        .m_hide{display:none;}
        .wrapperCompany__block{float:left;width:100%;}

        /*.wrapperCompany__block_content{
            background:#f0dfaf;
        }*/
    }
</style>
<body style="height:100%;margin:0;overflow-y:hidden;">
        <div style="height: 123px;border-bottom: 2px solid #777; overflow:hidden;">
            <div class="wrapperCompany clearfix">
                <div class="wrapperCompany__block">
                    <div class="wrapperCompany__block_inner" style="border-right:1px solid #ddd">
                        <div class="wrapperCompany__block_content">
                            <img style="display:block;margin:auto" src="http://www.fabricasaitov.ru/images/like_this_text.png">
                            <a class="type1_btn" href="">Заказать сайт</a>
                        </div>
                    </div>
                </div>
                <div class="wrapperCompany__block xs_hide">
                    <div class="wrapperCompany__block_inner">
                        <div class="wrapperCompany__block_content">
                            <h1>НУЖЕН ИДЕАЛЬНЫЙ САЙТ?</h1>

                            <p>
                                Непросто придумать собственный сайт "с нуля". Для хорошей
                                идеи нужны, какие нибудь примеры, источники вдохновения. Для
                                этого я разработал сервис "Хочу такой же сайт", где вы можете
                                оставить заявку. А я уже, на основве ваших вкусовых предпочтений,
                                разработаю для вас идеальный сайт.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wrapperCompany__block m_hide">
                    <div class="wrapperCompany__block_inner" style="border-left:1px solid #ddd">
                        <div class="wrapperCompany__block_content">
                            <h1>Сайт медицинской компании</h1>
                            <p>
                                Здесь можно описать информацию о данном сайте,
                                Какие работы проводились, что делалось, но очень
                                вкратце. Чтобы текст влезал полностью.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($response['success'] == true){?>
            <div id="topHeight">
                <iframe src="<?= $response['url'] ?>" width="100%" height="100%" style="border:0">
                    Ваш браузер не поддерживает плавающие фреймы!
                </iframe>
            </div>
        <?php }else { ?>
            <h1><?= $response['message'] ?></h1>
        <?php } ?>
    </body>
</html>
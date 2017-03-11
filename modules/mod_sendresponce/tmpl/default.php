<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<link rel="stylesheet" type="text/css" media="all" href="/modules/mod_sendresponce/css/sendresponce.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<div id="sendresponce" class="wrapper-sendresponce">
	<?php echo $module->content;?>

    <div class="rs-innerwrapper">
            <table style="border-collapse: collapse;width:100%;height:100%;">
                <tr>
                    <td style="width:50%;position: relative">
                        <div id="success-result-rs">
                            <div class="rs-form-rows">
                                <h2 class="rs-header">Заявка успешно отправлена</h2>
                                <img style="display: block;float: left;margin: 10px 20px 0 0;" width="60" src="/templates/beez3/images/successimg.png">
                                <p>В ближайшее время я с вами свяжусь для уточнения деталей</p>
                            </div>
                        </div>
                    <div class="rs-form-rows">

                        <h2 class="rs-header">Заказать сайт</h2>

                        <form id="sendresponceform" action="/development_sector/custom_modules/sendresponce/index.php" method="POST" enctype="multipart/form-data">
                            <label class="rs-label">Телефон</label>
                            <input class="rs-input" name="phone" id="phone-sr" placeholder="+7 (888) 888-88-88" type="text">
                            <label class="rs-label">Email</label>
                            <input class="rs-input" placeholder="example@example.com" name="email" id="mail-sr" type="text">
                            <label class="rs-label"><b>Имя <span style="color:#c11">*</span></b></label>
                            <input class="rs-input" placeholder="Вася Пупкин" name="name" id="name-sr" type="text" value="">
                            <label class="rs-label">Комментарий</label>
                            <textarea class="rs-input" placeholder="Текст в свободной форме" name="comment" id="comment-sr"></textarea>
                            <label class="rs-label">Приложите файл</label>
                            <input name="upl" type="file" id="files-sr">
                            <div class="sr-fileinfo">
                                Файл не должен привышать размер в 20 мегобайтов<br>
                                Разрешенные форматы: gif, jpg, doc(x), xls, pdf, txt, png, bmp
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lc4txYUAAAAAJ-HffaiWJR0KBGWpm_kutUTJ0x-"></div>
                            <div class="custom-m-rs"><div id="mistake-sr"></div></div>
                            <div class="wtr-btn btn-preloader-sr wd-rouder"><div id="fountainG"> <div id="fountainG_1" class="fountainG"></div> <div id="fountainG_2" class="fountainG"></div> <div id="fountainG_3" class="fountainG"></div> <div id="fountainG_4" class="fountainG"></div> <div id="fountainG_5" class="fountainG"></div> <div id="fountainG_6" class="fountainG"></div> <div id="fountainG_7" class="fountainG"></div> <div id="fountainG_8" class="fountainG"></div> </div></div>
                            <input class="wtr-btn wd-rouder sr-submbtn" value="Подать заявку" type="submit">
                        </form>
                    </div>
                    </td>
                    <td style="width:50%" class="bg-rs-form">

                    </td>
                </tr>
            </table>

    </div>
</div>

<script type="text/javascript" src="/modules/mod_sendresponce/js/sendresponce.js"></script>
<div style="clear:both"></div>



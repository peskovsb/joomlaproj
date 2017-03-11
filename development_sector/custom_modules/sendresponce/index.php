<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 23.02.17
 * Time: 17:44
 */

require_once "../../autoloader.php";

class SendResponce
{
    public $errors = [];
    public function EntranceApplication(){

        /**
         * Этап валидации
         */
        if(count($this->checkValidation()) > 0) {
            # выводим тут полученные ошибки и прекращаем выполнение

            return json_encode([
                  'success' => false,
                  'errors' => $this->errors
            ],JSON_UNESCAPED_UNICODE);

        }

        # запись физически файла на диск
        $file = new SavingFiles();
        if(!$file->fileSave()){
            $this->errors['files'] = ErrorsOut::showError(
                'Ошибка сохранения файла'
            );
            return json_encode([
                'success' => false,
                'errors' => $this->errors
            ],JSON_UNESCAPED_UNICODE);
        }

        # сохранение данных в базу
        $db = new dbworker();
        if(!$db->createSave($file->savePath)){
            $this->errors['db'] = ErrorsOut::showError(
                'Ошибка записи данных'
            );
            return json_encode([
                'success' => false,
                'errors' => $this->errors
            ],JSON_UNESCAPED_UNICODE);
        }

        return json_encode([
            'success' => true,
            'message' => 'Спасибо за отправку заявки, я обязательно с вами свяжусь'
         ],JSON_UNESCAPED_UNICODE);



    }

    public function checkValidation(){
        /**
         * Проводим валидацию
         * Считаем количество ошибок
         * Проводим всю бизнес логику,
         * как в алгоритме
         * return array
         */
        $this->errors = [];

        $validation = new Validation();
        if(!$validation->validationRequiredName()){
            $this->errors['name'] = ErrorsOut::showError(
                 'Поле Имя является обязательным'
            );
        }

        if(!$validation->validationRequiredCondition()){
            $this->errors['condition'] = ErrorsOut::showError(
                 'Нужно заполнить одно из трех полей: Телефон, E-mail, Комментарий'
            );
        }

        if(!$validation->validationPhoneShort(8)){
            $this->errors['phone'] = ErrorsOut::showError(
                 'Телефон меньше 8 символов'
            );
        }

        if(!$validation->validationPhoneLong(19)){
            $this->errors['phone'] = ErrorsOut::showError(
                 'Телефон не может быть длинее 18 символов'
            );
        }

        if(!$validation->validationEmail()){
            $this->errors['mail'] = ErrorsOut::showError(
                    'Некорректно задан E-mail'
            );
        }

        if(($errorFile = $validation->validationFilesErrors()) === true){
            if(!$validation->validationFilesType()){
                $this->errors['files'] = ErrorsOut::showError(
                    'Некорректный формат загруженного файла'
                );
            }
        }else{
            switch($errorFile){
                case 1: $this->errors['files'] = ErrorsOut::showError(
                    'Размер принятого файла превысил максимально допустимый размер'
                );
                    break;
                case 3: $this->errors['files'] = ErrorsOut::showError(
                    'Загружаемый файл был получен только частично'
                );
                    break;
                case 4: $this->errors['files'] = ErrorsOut::showError(
                    'Файл не был загружен'
                );
                    break;
                case 6: $this->errors['files'] = ErrorsOut::showError(
                    'Отсутствует временная папка'
                );
                    break;
                case 7: $this->errors['files'] = ErrorsOut::showError(
                    'Не удалось записать файл на диск'
                );
                    break;
            }
        }

        if(!$validation->validationReCaptcha()){
            $this->errors['reCaptcha'] = ErrorsOut::showError(
                'Введите корректно каптчу'
            );
        }

        return $this->errors;
    }
}

#production
$start = new SendResponce();
echo $start->EntranceApplication();

/**
 * Debuging
 */

//$param = new BaseParams();
//echo $param->savePath;

//    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
//    <form action="index.php" method="POST" enctype="multipart/form-data">
//        <label>Телефон</label>
//        <input name="phone" type="text"><br>
//        <label>Email</label>
//        <input name="email" type="text"><br>
//        <label>Имя</label>
//        <input name="name" type="text" value=""><br>
//        <label>Комментарий</label>
//        <textarea name="comment"><!--</textarea><br>-->
//       <label>Файлы</label>
//        <input name="upl" type="file"><br>
//        <div class="g-recaptcha" data-sitekey="6Lc4txYUAAAAAJ-HffaiWJR0KBGWpm_kutUTJ0x-"></div><br>
//        <input type="submit">
//    </form>


//phpinfo();
//$start = new SendResponce();

//echo '<pre>';var_dump($_POST); echo '</pre>';
//echo '<pre>';var_dump($_FILES); echo '</pre>';
//echo '<pre>';var_dump(new BaseParams()); echo '</pre>';
//echo '<pre>';var_dump($start->EntranceApplication()); echo '</pre>';



/*if(mail('serzh.chaburek@yandex.ru','1','1')){
    echo 'true';
}else{
    echo 'false';
}*/

//$mail = new Mailing();
//$mail->sendMail(Null);


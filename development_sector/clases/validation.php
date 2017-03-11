<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 23.02.17
 * Time: 18:07
 */

interface Ivalidation
{

    /**
     * Проверка обязательность
     * @return boolean true/false
     */
    public function validationRequiredName();

    /**
     * Проверка обязательность 3 полей
     * @return boolean true/false
     */
    public function validationRequiredCondition();

    /**
     * Проверка телефона менее заданного числа
     * @param $length integer минимальная длина телефона
     * @return boolean true/false
     */
    public function validationPhoneShort($length);

    /**
     * Проверка телефона более заданного числа
     * @param $length integer максимальная длина телефона
     * @return boolean true/false
     */
    public function validationPhoneLong($length);

    /**
     * Проверка емайла на корректность введенных данных
     * на соответствие фармату RFC
     * @return boolean true/false
     */
    public function validationEmail();

    /**
     * Проверка переданных данных на популярные форматы
     * jpg, jpeg, pdf, doc, docx, xls, gif, bmp
     * @return boolean true/false
     */
    public function validationFilesType();

    /**
     * Проверка на ошибки при загрузке
     * @return boolean true/false
     */
    public function validationFilesErrors();

    /**
     * Проверка каптчи
     * @return boolean true/false
     */
    public function validationReCaptcha();
}

class Validation extends BaseParams implements Ivalidation
{
    /**
     * Проверка обязательность поля Имя
     * @return boolean true/false
     */
    public function validationRequiredName(){
        if($this->name === Null){
            return false;
        }
        return true;
    }

    /**
     * Проверка обязательность 3 полей
     * @return boolean true/false
     */
    public function validationRequiredCondition(){
        if(($this->phone === Null) && ($this->email === Null) && ($this->comment === Null)){
            return false;
        }
        return true;
    }

    /**
     * Проверка телефона менее заданного числа
     * @param $length integer минимальная длина телефона
     * @return boolean true/false
     */
    public function validationPhoneShort($length){

        if($this->phone === Null) return true;

        if(strlen($this->phone) < $length){
            return false;
        }
        return true;
    }

    /**
     * Проверка телефона более заданного числа
     * @param $length integer максимальная длина телефона
     * @return boolean true/false
     */
    public function validationPhoneLong($length){

        if($this->phone === Null) return true;

        if(strlen($this->phone) >= $length){
            return false;
        }
        return true;
    }

    /**
     * Проверка емайла на корректность введенных данных
     * на соответствие фармату RFC
     * @return boolean true/false
     */
    public function validationEmail(){
        if($this->email === Null) return true;

        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    /**
     * Проверка переданных данных на популярные форматы
     * jpg, jpeg, pdf, doc, docx, xls, gif, bmp
     * @return boolean true/false
     */
    public function validationFilesType(){

        if($this->files === Null) return true;

        $fileType = mime_content_type($this->files['tmp_name']);

        $availableTypes = [
            'image/bmp',
            'image/gif',
            'image/jpeg',
            'image/png',
            'application/pdf',
            'application/msword',
            'application/x-msexcel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'text/plain',
        ];
        if(in_array($fileType,$availableTypes)){
            return true;
        }
        return false;
    }

    /**
     * Проверка переданных файлов на размер
     * @return boolean true/false
     */
    public function validationFilesErrors(){

        if($this->files === Null) return true;

        switch($this->files['error']){
            case 1: return $this->files['error'];
            case 3: return $this->files['error'];
            case 4: return $this->files['error'];
            case 6: return $this->files['error'];
            case 7: return $this->files['error'];
        }
        return true;
    }

    /**
     * Проверка каптчи
     * @return boolean true/false
     */
    public function validationReCaptcha(){

        $options = [
            'secret' => '6Lc4txYUAAAAAPTe_o7bSGO0XgGVBcH19JxC4HQp',
            'response' => $this->reCaptcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            $options);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $server_output = json_decode($server_output, true);

        if(isset($server_output['success']) && $server_output['success'] == true){
            return true;
        }

        return false;
    }
}
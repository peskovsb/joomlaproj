<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 23.02.17
 * Time: 19:02
 */

class BaseParams
{
    public $phone = Null;
    public $email = Null;
    public $name = Null;
    public $comment = Null;
    public $files = Null;
    public $reCaptcha = Null;
    public $savePath = Null;

    public function __construct(){
        if(isset($_POST['phone']) && !empty($_POST['phone'])){
            $this->phone = (integer) preg_replace('#[^0-9]+#','', $_POST['phone']);
            $this->phone = ltrim($this->phone,'7');
        }

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $this->email = str_replace(' ','',$_POST['email']);
        }

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $this->name = trim(preg_replace('#[\s]+#',' ', $_POST['name']));
            $this->name = filter_var($this->name,FILTER_SANITIZE_STRING);
        }

        if(isset($_POST['comment']) && !empty($_POST['comment'])){
            $this->comment = trim($_POST['comment']);
            $this->comment = filter_var($this->comment,FILTER_SANITIZE_STRING);
        }

        if(isset($_FILES['upl']) && !empty($_FILES['upl']['name'])){
            $this->files = $_FILES['upl'];
        }

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            $this->reCaptcha = $_POST['g-recaptcha-response'];
        }
    }
}
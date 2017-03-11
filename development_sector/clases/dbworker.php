<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 23.02.17
 * Time: 17:39
 */

require_once '../../../configuration.php';

class dbworker extends BaseParams
{
    public $db;
    public $prefix;
    public function __construct(){

        parent::__construct();
        $conf = new JConfig();
        $this->prefix = $conf->dbprefix;

        $this->db = new PDO('mysql:host='.$conf->host.';dbname='.$conf->db, $conf->user, $conf->password,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
    }

    /**
     * Сохранение данных в базу
     * @param $savePath string путь файла сохраненного на диске
     * @throws PDOException
     * @return boolean
     */
    public function createSave($savePath){

        $arraySet = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'comment' => $this->comment,
            'filepath' => $savePath,
            'currenturl' => $_SERVER['HTTP_REFERER'],
        ];

//        try
//        {
            $prep = $this->db->prepare("INSERT INTO {$this->prefix}sendresponce (username,userphone,useremail,usercomment,filepath,currenturl) VALUES (:name,:phone,:email,:comment,:filepath,:currenturl)");
            $prep->execute($arraySet);

            return true;
//        }
//        catch (PDOException $e)
//        {
//            return false;
//        }

        /*foreach($this->db->query('SELECT * from '.$this->prefix. 'sendresponce') as $row) {
            var_dump($row);
        }*/
    }
}
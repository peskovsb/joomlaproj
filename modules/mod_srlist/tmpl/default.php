<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once $_SERVER['DOCUMENT_ROOT'].'/configuration.php';

class dbworker
{
    public $db;
    public $prefix;

    public function __construct()
    {

        $conf = new JConfig();
        $this->prefix = $conf->dbprefix;

        $this->db = new PDO('mysql:host=' . $conf->host . ';dbname=' . $conf->db, $conf->user, $conf->password,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
    }

    public function selectData(){
        foreach($this->db->query('SELECT * from '.$this->prefix. 'sendresponce ORDER by dttm DESC') as $row) {
            $date=date_create($row['dttm']);
            $dttm = date_format($date,"d/m/Y H:i:s");
            ?>
            <tr>
                <td><?= $dttm ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['userphone'] ?></td>
                <td><?= $row['useremail'] ?></td>
                <td><?= $row['usercomment'] ?></td>
                <td><a target="_blank" href="templates/beez3/upload/<?= $row['filepath'] ?>"><?= $row['filepath'] ?></a></td>
                <td><?= $row['currenturl'] ?></td>
            </tr>
        <?php }
    }
}

?>
<link rel="stylesheet" type="text/css" media="all" href="/modules/mod_srlist/css/srlist.css">

<div id="srlist" class="wrapper-srlist">
	<?php echo $module->content;?>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>Дата</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>E-mail</th>
            <th>Comment</th>
            <th>Файл</th>
            <th>Страница</th>
        </tr>
    <?php
        $db = new dbworker();
        $db->selectData();
    ?>
    </table>
</div>

<div style="clear:both"></div>



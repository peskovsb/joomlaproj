<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 23.02.17
 * Time: 17:39
 */

spl_autoload_register(function ($class_name) {
    include 'clases/' . $class_name . '.php';
});
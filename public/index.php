<?php
require '../vendor/autoload.php';


use myns\core\Router;
use myns\core\subfolder\SecondClass;


$obj = new Router();

echo $obj->run().' - это работа метода класса из core/</br>';

echo 'а это свойство второго класса из core/subfolder:  '. (($obj2 = new SecondClass())->secondClassProperty1).'</br>';



<?php
require 'vendor/autoload.php';


use nikolaysulima\hillel\core\Router;
use nikolaysulima\hillel\core\subfolder\SecondClass;


$obj = new Router();

echo $obj->run().' - это работа метода класса из core/</br>';

echo 'а это свойство второго класса из core/subfolder:  '. (($obj2 = new SecondClass())->secondClassProperty1).'</br>';



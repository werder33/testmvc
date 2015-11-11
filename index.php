<?php

require 'vendor/AutoLoad.php';
use vendor\Router;
// ошибки
ini_set('display_errors',1);
error_reporting(E_ALL);

//автозагрузка
$autoLoad = new AutoLoad();
spl_autoload_register([$autoLoad, 'Load']);

//маршрутизатор
define('ROOT', dirname(__FILE__));

//require_once(ROOT.'\vendor\Router.php');
$router = new Router();
$router -> Start();
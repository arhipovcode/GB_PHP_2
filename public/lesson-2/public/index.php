<?php
// подключаем автолоадер
include "../services/Autoloader.php";

// пркидываем пространственные имена
use app\services\Autoloader;
use \app\models\{Product, Users};

// функция подключает классы
spl_autoload_register([new Autoloader(), 'loadclass']);

$product = new Product();
$user = new Users();

var_dump($product);
var_dump($user);
<?php

use app\Autoloader;
use app\Core\Main;

//cho dirname(__DIR__)."</br>";

//$app =new Main();

require_once dirname(__DIR__).DIRECTORY_SEPARATOR ."Autoloader.php";


Autoloader::load();

$app = new Main();

$app->start();

?>



<?php

use app\Autoloader;
use app\Core\Main;



require_once dirname(__DIR__).DIRECTORY_SEPARATOR ."Autoloader.php";


Autoloader::load();

$app = new Main();

//start session
session_start();
error_reporting(0);
$app->start();

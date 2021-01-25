<?php

namespace app\Controllers;

class AdminController
{
    public function index()
    {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "admin" . DIRECTORY_SEPARATOR . "index.php";
        include_once($file);
    }
}

<?php

namespace app\Controllers;

class Controller 
{
    //render the index page
    public function index()
    {
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."home".DIRECTORY_SEPARATOR ."index.php";
        include_once $file;
    }
}

?>
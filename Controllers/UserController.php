<?php

namespace app\Controllers;

class UserController 
{
    public function login()
    {
        //do something
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."users".DIRECTORY_SEPARATOR ."login.php";
        include_once($file);
    }
    public function singin()
    {
        //do something
    }
}

?>
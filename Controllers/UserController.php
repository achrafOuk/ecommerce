<?php

namespace app\Controllers;

class UserController 
{
    public function login($argms=[])
    {
        //do something
        if ( $argms!=[] ) 
        {
            echo "404!";
            die();
        }
        if(isset($_POST["loginSubmit"]))
        {
            if( empty($_POST["loginLogin"]) || empty($_POST["passwordLogin"]))
            {
                echo "error!";
                //header("Redirect: /user/login");
            }
        }
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."users".DIRECTORY_SEPARATOR ."login.php";
        include_once($file);
    }
    public function singin($argms=[])
    {
        //do something
        if ( $argms!=[] ) 
        {
            echo "404!";
            die();
        }
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."users".DIRECTORY_SEPARATOR ."singin.php";
        include_once($file);
    }
}

?>
<?php

namespace app\Controllers;

class ItemController
{
    public function show($index)
    {
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
        include_once($file);
        if(empty($index))
        {
            // show all the items
        }
        else
        {
            
        }
    }
}

?>
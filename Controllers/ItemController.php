<?php

namespace app\Controllers;
use  app\Models\ItemModel;
class ItemController extends Controller
{
    public function show($index)
    {
        $items = new ItemModel();
        
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
        include_once($file);
    }
    public function showLimit($start,$end)
    {
        //do something
    }
    //create new user
    public function create()
    {
        //do something
    }
    public function delete()
    {
        //do something
    }
    public function search()
    {
        //do something
    }
    public function rename()
    {
        //do something
    }

}

?>
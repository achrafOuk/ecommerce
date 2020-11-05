<?php

namespace app\Controllers;
use  app\Models\ItemModel;
use  app\Models\CategoriesModel;
class Controller 
{
    //render the index page
    public function index()
    {
        $items = new ItemModel();
        $ProductsData = $items->showByLimit(0,4);
        $categorie = new CategoriesModel();
        $categories = $categorie->fetchAll();
        $categoriesArray=[];
        $categoriesNamesArray=[];
        $Products=[];
        for($i=0;$i<count($categories);$i++)
        {
            $categoriesArray[$i] = $categories[$i][0] ;
            $categoriesNamesArray[$i] = $categories[$i][1] ;
        }
        for($i=0;$i<count($categoriesArray);$i++)
        {
            $Products[$i] = $items->showbyCategories($categoriesArray[$i],0,4);  
        }

        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."home".DIRECTORY_SEPARATOR ."index.php";
        include_once $file;
    }
}

?>
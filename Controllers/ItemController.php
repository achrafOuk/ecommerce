<?php
namespace app\Controllers;
use  app\Models\ItemModel;
class ItemController extends Controller
{
    public function __construct()
    {
        $this->elementNumber = 3;
    }
    public function index()
    {
        $items = new ItemModel();
        if ($items->getinstence()->connect_errno)
        {
            echo "die";
            die();
        }
        $ProductsData = $items->showByLimit(0,$this->elementNumber);
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
        include_once($file);
    }
    public function show($index)
    {
        $items = new ItemModel();
        if ($items->getinstence()->connect_errno)
        {
            echo "die";
            die();
        }
        $ProductData = $items->show($index);
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
        include_once($file);
    }

    public function page($page=1)
    {
        $items = new ItemModel();
        
        if ($items->getinstence()->connect_errno)
        {
            echo "die";
            die();
        }
        $pages_num = ceil( $items->Count()/$this->elementNumber );
        if( $page > $pages_num || $page < 0)
        {
            echo "404 page!";
        }
        else if( $page > $pages_num || $page < 0)
        {
            echo "404 page!";
        }
        
        else 
        {
        $ProductsData = $items->showByLimit($page,$this->elementNumber);
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
        include_once($file); 
        }
    }    
    public function create()
    {
        //create new item
    }
    public function delete()
    {
        //do something
    }
    public function search()
    {
        //do something
        $items= new ItemModel();
        if( isset($_GET['seachbtn'] ) )
        {
            if(!empty($_GET['searchText']))
            {
                $item = $_GET['searchText'];
                $categorie = $_GET['categoriesSearch'];
                $ProductsData = $items->search($categorie,$item);
                //echo(count($ProductsData));
                $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."items".DIRECTORY_SEPARATOR ."index.php";
                include_once($file);
            }
        }
        
        //else header("Location: /");
    }
    public function rename()
    {
        //do something 
    }
    public function showPanier()
    {
        $file = dirname(__DIR__).DIRECTORY_SEPARATOR ."Views".DIRECTORY_SEPARATOR ."panier".DIRECTORY_SEPARATOR ."index.php";
        include_once($file); 
    }

}

?>
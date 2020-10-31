<?php

namespace app;

class Autoloader
{
    // load the autoload method
    static function load()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
          
    }
    //autoload class(es) when needed
    static function autoload($class)
    {
        
        // $class = __NAMESPACE__\classfile\classname

        // delete __NAMESPACE__ from class name
        $class =str_replace(__NAMESPACE__ .DIRECTORY_SEPARATOR,"",$class);

        // get the emplacement of the file 
        $file = __DIR__.DIRECTORY_SEPARATOR .$class . ".php";

        //check if file existes and load it
        if(file_exists( $file ) )
        {
            require_once $file;
        }
 
        
    }
}
?>
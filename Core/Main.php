<?php

namespace app\Core; 


use app\Controllers\Controller;

class Main 
{
    public function start()
    {
           // URL/controller/method/parametres

           session_start();
           $requested = $_SERVER["REQUEST_URI"];
          
           $uri="";
           if ( !empty($requested) && $requested[-1]=="/")
           { 
               
               for( $i=0 ; $i < strlen($requested)-1 ; $i++ )
               {
                $uri .= $requested[$i];
               } 
                http_response_code(301);
                header('Location: '.$uri);
           }
           //split the parametres in uri
           $params = array();
           
           $param="";
           $uri = $_SERVER["REQUEST_URI"];
           $j=0;
           for($i=0;$i< strlen($uri); $i++ )
           {
               if($uri[$i]=="/" && $param!="")
               {
                   //echo $param."</br>";
                   $params[$j] = $param;
                   $j++; 
                   $param="";
               }
               else if( $i == strlen($uri)-1 && $uri[$i]!="/")
               {
                $params[$j] = $param . $uri[strlen($uri)-1];
               }
               else if($uri[$i]!="/")
               {
                $param .= $uri[$i];
               }
           }
          
           //look for the Controller wanted

           // controller\method\{params}
 
            //Si il y a pas de request, on  va dériger l'utilisateur vers la page prinicpale
           if( empty($params) )
           {
                $controller = new Controller();

                echo "Home page";
           }
           else
           {
               try{
                    $Controller = "app\\Controllers\\" . ucfirst( $params[0] )."Controller";
                    $controller = new $Controller();
                    
                    if ( isset($params[1]) )
                    {
                        
                        if( method_exists($controller,$params[1]) )
                        {
                            (isset($params[2]) ) ? $controller->$params[1]($params[2]) : $controller->$params[1]();
                            echo "methode existe";
                        }

                        else{
                            if( $params[0]=="item" && preg_match("/\d+/",$params[1] ) )
                            {
                             $controller->show($params[1]);
                            }

                            #echo "404! error page";
                        }
                    }
               }
               //show a 404 page when controller is not found
               catch( \Throwable $e)
                {
                    echo "404! error page";
                }
           }

        

    }
}

?>
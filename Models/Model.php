<?php

namespace app\Models;

class Model
{
    protected const DB_HOST = "localhost";

    protected const DB_NAME = "ecommerce";

    protected const DB_USER = "root";

    protected const DB_PSW = "";

    protected $table;
    protected  $conn;
    public function __const()
    {/*

        create databse here
    */
        $this->conn = new mysqli(DB_HOST,DB_NAME,DB_USER,DB_PSW);
       // if($conn->connect_error)
    }
    //return the instance of the class
    public function getinstence()
    {
        return $this->conn;
    }

    public function getAllByLimit($start,$end)
    {
        $sql_query = "select * from ".$table." limit ".$start.",".$end;
        $result = $this->conn->query($sql_query);
         return $result->fetchAll();
    }
    public function __destruct()
    {
        if (!empty($this->conn))
        {
            $this->conn->close();
        }
        
    }
  
}


?>
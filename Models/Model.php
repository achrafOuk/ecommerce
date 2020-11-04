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
    public function __construct()
    {/*

        create databse here
    */
        
        $this->conn = new \mysqli(Model::DB_HOST,Model::DB_USER,Model::DB_PSW,Model::DB_NAME);
        $myconnect = $this->conn;
    }
    //return the instance of the class
    public function getinstence()
    {
        return $this->conn;
    }
    
    public function showByLimit($start,$end)
    {
        $sql_query = "select * from ".$this->table." limit ".$start.",".$end;
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
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
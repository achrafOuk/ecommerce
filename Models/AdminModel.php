<?php

namespace app\Models;

class Adminmodel extends Model
{
    protected $item_id;
    protected $item_name;
    protected $item_img;
    protected $item_prix;
    protected $item_decription;
    public function  __construct()
    {

        parent::__construct();
        $this->table = "purchases";
    }
    public function getElements()
    {
        $sql_query = "SELECT sum(numberFfElements) FROM `purchases`";
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function getSum()
    {
        $sql_query = "select sum(value) from `purchases`";
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function getYearIncomeByMonth()
    {
        $sql_query = "SELECT DATE_FORMAT(Date, '%Y') year,DATE_FORMAT(Date, '%m'),sum(value) income  FROM `purchases` GROUP BY DATE_FORMAT(Date, '%m') having  year = DATE_FORMAT(NOW(), '%Y')";
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function getYearIncomeByYear()
    {
        $sql_query = "SELECT sum(value)income , DATE_FORMAT(`Date`, '%m') month,DATE_FORMAT(`Date`, '%Y') year FROM `purchases` GROUP BY month having DATE_FORMAT(NOW(), '%Y')=year";
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
}

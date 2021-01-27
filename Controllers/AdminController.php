<?php

namespace app\Controllers;

use  app\Models\Adminmodel;

class AdminController
{
    public function index()
    {
        $data = new Adminmodel();
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "admin" . DIRECTORY_SEPARATOR . "index.php";
        $elements = $data->getElements();
        $income = $data->getSum();
        $monthIncome = $data->getYearIncomeByMonth();
        $months = [];
        $incomemonth = [];
        for ($i = 0; $i < count($monthIncome); $i++) {
            $months[$i] = $monthIncome[$i][1];
            $incomemonth[$i] = $monthIncome[$i][2];
        }
        include_once($file);
    }
}

<?php

namespace App\Controllers;

class Charts extends BaseController
{
    public function show()
    {
        return view('charts/pie_chart.php');

    }

//    public function index()
//    {
//        $model = new \App\Models\Expense_model();
//        $data = $model->findAll();
//
//        return view('charts/pie_chart.php', ['chart' => $data]);
//    }






}

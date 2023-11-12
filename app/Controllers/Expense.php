<?php

namespace App\Controllers;

class Expense extends BaseController

{
//    public function index()
//    {
//        $model = new \App\Models\Expense_model();
//        $data = $model->findAll();
//        return view('/Category/index.php', ['' => $data]);
//    }

    public function store()
    {
        $model = new \App\Models\Expense_model();

        $model->insert([
            'quantity' => $this->request->getPost('quantity'),
            'id_cat' => $this->request->getPost('id_cat'),
//            'email' => $this->request->getPost('email'),
//            'password' => $this->request->getPost('password'),
        ]);

    }

//    public function index()
//    {
//        $this->load->model('Expense_model');
//        $data['expenses'] = $this->Expense_model->getExpenses(); // Замените на ваш метод
//        $this->load->view('expense_view', $data);
//    }

    public function index()
    {
        $model = new \App\Models\Expense_model();
        $data = $model->findAll();

        return view('/charts/pie_chart.php', ['home' => $data]);
    }

    public function getExpensesData()
    {
        // Здесь должна быть логика выборки данных из базы данных
        return $this->db->select('id_cat as category, SUM(quantity) as amount')
            ->from('expenses')
            ->group_by('id_cat')
            ->get()
            ->result_array();
    }

}
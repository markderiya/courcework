<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $model = new \App\Models\UsModel();
       $data = $model->findAll();

        return view('Home/index.php', ['home' => $data]);
    }


    public function show($id)
    {
        $model = new \App\Models\UsModel();
        $show = $model->find($id);

        return view('Home/show.php', ['home' => $show]);
    }


    public function new()
    {
        return view('Home/new.php');
    }


    public function store()
    {
        $model = new \App\Models\UsModel();

        $model->insert([
            'name' => $this->request->getPost('name'),
            'surname' => $this->request->getPost('surname'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

//        dd($model->getInsertID());

//        $des = $this->request->getPost();
//        dd($des);
    }

}

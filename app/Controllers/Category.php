<?php

namespace App\Controllers;

class Category extends BaseController
{

    public function new()
    {
        return view('Category/index.php');
    }

    public function store()
    {
        $model = new \App\Models\CatModel();

        $model->insert([
            'name_cat' => $this->request->getPost('name_cat'),
//            'surname' => $this->request->getPost('surname'),
//            'email' => $this->request->getPost('email'),
//            'password' => $this->request->getPost('password'),
        ]);
//        $data = $this->request->getPost();
    }

    public function show($id)
    {
        $model = new \App\Models\CatModel();
        $show = $model->find($id);

        return view('Category/index.php', ['category' => $show]);
    }
}
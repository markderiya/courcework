<?php

namespace App\Controllers;

class Wallet extends BaseController
{

//    public function index( )
//    {
//        return view('Wallet/index.php');
//    }

    public function index()
    {
        $model = new \App\Models\WalletModel();
        $data = $model->findAll();
        return view('Wallet/index.php', ['wallet' => $data]);
    }



    public function delete($id)
    {
        $model = new \App\Models\WalletModel();

        // Здесь должна быть логика удаления записи из базы данных
        $model->where('id', $id)->delete();

        // Перенаправление после удаления
        return redirect()->to('/wallet')->with('success', 'Wallet deleted');
    }



    public function store()
    {
        $model = new \App\Models\WalletModel();

        $model->insert([
            'wallet_name' => $this->request->getPost('wallet_name'),
//            'surname' => $this->request->getPost('surname'),
//            'email' => $this->request->getPost('email'),
//            'password' => $this->request->getPost('password'),
        ]);


    }

    // application/controllers/Wallets.php

//
//    public function index() {
//        $this->load->model('Wallet_model');
//
//        // Получаем кошельки с именем пользователя
//        $data['wallets'] = $this->Wallet_model->get_wallets_with_username();
//
//        // Загружаем представление
//        $this->load->view('wallets/index', $data);
//    }




}


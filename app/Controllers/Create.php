<?php

namespace App\Controllers;

class Create extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            echo View('home_view', $data);
            echo View('create_view');
    
        }else{
            echo View('welcome_message');
        }
    }

    public function action()
    {
        $session = session();
        $username=$session->username;
        helper(['form']);
        $rules = [
            'nome'          => 'required|min_length[4]|max_length[30]|is_unique[products.nome]',
            'categoria'      => 'required|min_length[4]|max_length[30]',
            'cor'      => 'required|min_length[4]|max_length[30]',
            'caracteristica'      => 'required|min_length[4]|max_length[255]',
        ];
          
        if($this->validate($rules)){
            $itemModel = new \App\Models\ItemModel();

            $data = [
                'nome'     => $this->request->getVar('nome'),
                'categoria'     => $this->request->getVar('categoria'),
                'cor'     => $this->request->getVar('cor'),
                'caracteristica'     => $this->request->getVar('caracteristica'),
                'createby' => $username
            ];
            $itemModel->save($data);

            echo "<script LANGUAGE='JavaScript'>
            window.alert('ITEM CRIADO COM SUCESSO');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Home';
            </script>";


        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('ITEM NÃO PODE SER CRIADO');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Home';
            </script>";
        }
    }


}

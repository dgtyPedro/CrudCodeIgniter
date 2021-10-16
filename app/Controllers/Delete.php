<?php

namespace App\Controllers;

class Delete extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            echo View('home_view', $data);
            echo View('delete_view');
    
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
            'id'          => 'required|min_length[1]|max_length[30]',
        ];
          
        if($this->validate($rules)){
            $itemModel = new \App\Models\ItemModel();
            $id = $this->request->getVar('id');
            $itemModel->delete(['id' => $id]);
            echo "<script LANGUAGE='JavaScript'>
            window.alert('ITEM DELETADO COM SUCESSO');
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

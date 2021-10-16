<?php

namespace App\Controllers;

class Registrar extends BaseController
{
    public function index()
    {   
        echo View('registrar_view');
    }

    public function action()
    {
        helper(['form']);
        $rules = [
            'username'          => 'required|min_length[2]|max_length[50]|is_unique[users.username]',
            'password'      => 'required|min_length[4]|max_length[50]',
        ];
          
        if($this->validate($rules)){
            $userModel = new \App\Models\UserModel();

            $data = [
                'username'     => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);

            echo "<script LANGUAGE='JavaScript'>
            window.alert('CONTA CRIADA COM SUCESSO');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Entrar';
            </script>";


        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('CONTA NÃO PODE SER CRIADA');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Registrar';
            </script>";
        }
    }

}

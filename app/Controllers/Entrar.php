<?php

namespace App\Controllers;

class Entrar extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['logged'])){
            header('location: Home');
        }else{ 
            //AQUI
            echo View('entrar_view');
        }
    }

    public function action()
    {
        $userModel = new \App\Models\UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('username', $username)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                echo 'foi';
                session_regenerate_id();    
                $_SESSION['logged'] = TRUE;
                echo "<script LANGUAGE='JavaScript'>
            window.alert('CONTA CRIADA COM SUCESSO');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Home';
            </script>";
            }else{
                // $session->setFlashdata('msg', 'Password is incorrect.');
                // return redirect()->to('/signin');
                echo 'senha';
            }

        }else{
            echo 'nome';
        }
    }

}

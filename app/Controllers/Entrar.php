<?php

namespace App\Controllers;

class Entrar extends BaseController
{
    public function index()
    {
        $session = session();
        if (isset($session->logado)){
            header('location: Home');
            exit;   
        }else{ 
            echo View('entrar_view');
        }
    }

    public function action()
    {
        $session = session();
        $userModel = new \App\Models\UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('username', $username)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $session_data = [
                    'username' => $data['username'],
                    'logado' => TRUE
                ];  

                $session->set($session_data);

                echo "<script LANGUAGE='JavaScript'>
                window.alert('LOGADO');
                window.location.href='http://localhost/apiRestCodeIgniter/public/Home';
                </script>";

            }else{
                echo "<script LANGUAGE='JavaScript'>
                window.alert('CREDENCIAIS INCORRETAS');
                window.location.href='http://localhost/apiRestCodeIgniter/public/Entrar';
                </script>";
            }

        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('CREDENCIAIS INCORRETAS');
            window.location.href='http://localhost/apiRestCodeIgniter/public/Entrar';
            </script>";
        }
    }

}

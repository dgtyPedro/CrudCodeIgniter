<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            echo View('home_view', $data);
        }else{
            echo 'nao foi ligado';
        }

    }
}

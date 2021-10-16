<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            echo View('home_view', $data);
            echo View('read_view');
    
        }else{
            echo View('welcome_message');
        }
    }
}
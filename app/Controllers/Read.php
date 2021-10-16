<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            $itemModel = new \App\Models\ItemModel();
            $data['item_data'] = $itemModel->orderBy('id', 'DESC')->paginate(10);
            $data['pagination_link'] = $itemModel->pager;
            
            echo View('home_view', $data);
            echo View('read_view');
            
        }else{
            echo View('welcome_message');
        }
    }
}

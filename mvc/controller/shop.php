<?php

class shop extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $this->shop();
    }

    // shop
    public function shop()
    {
        $data = [
            'products' => $this->modelDb->products(),
        ];

        $this->Header('shop/header' , $data);
        $this->view('shop/index' , $data);
        $this->Footer('shop/footer' , $data);
    }
}
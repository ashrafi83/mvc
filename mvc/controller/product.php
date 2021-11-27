<?php

class product extends Controller
{
    public function __construct()
    {
        
    }
    public function index($product_id='')
    {
        $data = [
            'product' => $this->modelDb->getProduct($product_id),
        ];
        $this->Header('product/header' , $data);
        $this->View('product/index' , $data);
        $this->Footer('product/footer' , $data);
    }
}
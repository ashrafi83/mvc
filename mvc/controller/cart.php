<?php

class cart extends Controller
{
    public function __construct()
    {
        if (empty($_SESSION['user_login'])){
            header('location: '.URL.'users/login');
            exit;
        }
    }
    public function index(){
        $data = [
            'products' => $this->modelDb->getCartProducts($_SESSION['user_login']),
        ];
        $this->Header('cart/header' , $data);
        $this->View('cart/index' , $data);
        $this->Footer('cart/footer' , $data);
    }
    public function add(int $product_id)
    {
        $user_id = $_SESSION['user_login'];
        if (!empty($user_id) && !empty($product_id))
        {
            $this->modelDb->addToCart($user_id , $product_id);
        }
        header('location: '. URL .'cart');
    }
}
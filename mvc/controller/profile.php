<?php

class profile extends Controller
{
    public $userID = '';

    public function __construct()
    {
        if (empty($_SESSION['user_login'])){
            header('location: '.URL.'users/login');
            exit;
        }
        $this->userID = $_SESSION['user_login'];
    }
    
    public function index()
    {
        
        $data = [
            'user_name' => $this->modelDb->user_name($this->userID),
        ];
        $this->Header('profile/header' , $data);
        $this->View('profile/index' , $data);
        $this->Footer('profile/footer' , $data);
    }

    // Counter
    public function counter(){
        $this->index();
    }

    // Wallet
    public function wallet()
    {
        $data = [];
        $this->Header('profile/header' , $data);
        $this->View('profile/wallet' , $data);
        $this->Footer('profile/footer' , $data);
    }

    // Orders
    public function orders()
    {
        $data = [];
        $this->Header('profile/header' , $data);
        $this->View('profile/orders' , $data);
        $this->Footer('profile/footer' , $data);
    }

    // personal_info
    public function personal_info()
    {
        $data = [
            'personal_info' => $this->modelDb->personal_info($this->userID),
        ];
        $this->Header('profile/header' , $data);
        $this->View('profile/personal_info' , $data);
        $this->Footer('profile/footer' , $data);
    }
}
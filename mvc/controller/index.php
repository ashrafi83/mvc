<?php

class index extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $this->Header('index/header');
        $this->View('index/index');
        $this->Footer('index/footer');
    }
}
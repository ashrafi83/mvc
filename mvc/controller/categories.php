<?php

class categories extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $this->categories();
    }
    public function categories($categoryName='all')
    {
        $categories = $this->modelDb->categories($categoryName);
        $data =[
            'categories' => $categories,
        ];
        $this->Header('categories/header' , $data);
        $this->View('categories/index' , $data);
        $this->Footer('categories/footer' , $data);
    }
}
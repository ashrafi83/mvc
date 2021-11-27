<?php

class Controller
{
    public $modelDb = '';

    public function __construct()
    {
        
    }
    public function Header($urlHeader , $data=[])
    {
        require 'view/'.$urlHeader.'.php';
    }
    public function View($urlView , $data=[])
    {
        require 'view/'.$urlView.'.php';
    }
    public function Footer($urlFooter , $data=[])
    {
        require 'view/'.$urlFooter.'.php';
    }

    public function Model($urlModel)
    {
        require 'model/md_'.$urlModel.'.php';
        $className = 'md_'.$urlModel;
        $this->modelDb = new $className();
    }
}
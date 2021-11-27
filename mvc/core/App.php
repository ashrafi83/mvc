<?php

class App
{
    public $controller = 'index';
    public $method = 'index';
    public $params = [];
    
    public function __construct()
    {
        if (isset($_GET['url']))
        {
            $url = $this->Explode($_GET['url']);
            $this->controller = $url['0'];
            unset($url['0']);

            if (isset($url['1']))
            {
                $this->method = $url['1'];
                unset($url['1']);
            }

            $this->params = array_values($url);
        }

        $path = 'controller/'. $this->controller .'.php';
        if (file_exists($path))
        {
            require $path;
            $object = new $this->controller();
            $object->Model($this->controller);

            if (method_exists($object , $this->method))
            {
                call_user_func_array([$object,$this->method] , $this->params);
            } else{
                E404();
            }
        } else{
            E404();
        }
    }

    public function Explode($url)
    {
        return explode('/' , rtrim($url , '/'));
    }
}
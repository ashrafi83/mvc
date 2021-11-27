<?php

class Model
{
    public $db = '';

    public function __construct()
    {
        $host = 'localhost';
        $dbName = 'mvc';
        $username = 'root';
        $password = '';
        $this->db = new PDO('mysql:host='.$host.';dbname='.$dbName ,$username ,$password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $this->db->exec('set names utf8');
    }
    
    // doSelect
    public function doSelect($sql , $values=[])
    {
        $query = $this->db->prepare($sql);
        foreach ($values as $key=>$item){
            $query->bindValue($key+1 , $item);
        }
        $query->execute();
        return $query->fetchAll();
    }
}
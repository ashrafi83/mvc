<?php

class md_shop extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function products()
    {
        $sql = 'SELECT * FROM products';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
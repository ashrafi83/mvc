<?php

class md_product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getProduct($product_id)
    {
        $sql = 'SELECT * FROM products WHERE id=?';
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$product_id);
        $query->execute();
        return $query->fetch();
    }
}
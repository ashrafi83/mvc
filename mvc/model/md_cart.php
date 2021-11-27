<?php

class md_cart extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCartProducts($user_id){
        $cartSql = 'SELECT * FROM cart WHERE user_id=?';
        $cartQ = $this->db->prepare($cartSql);
        $cartQ->bindValue(1,$user_id);
        $cartQ->execute();
        $cartProducts = $cartQ->fetchAll();
        $proSql = 'SELECT * FROM products WHERE ';
        foreach($cartProducts as $key=>$item){
            if (count($cartProducts) != $key+1){
                $proSql = $proSql.'id='.$item['product_id'].' OR ';
            } else{
                $proSql = $proSql.'id='.$item['product_id'];
            }     
        }
        $proQ = $this->db->prepare($proSql);
        $proQ->execute();
        return $proQ->fetchAll();
    }

    public function addToCart(int $user_id , int $product_id)
    {
        $sql = 'INSERT INTO cart(user_id,product_id) VALUES (?,?)';
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$user_id);
        $query->bindValue(2,$product_id);
        $query->execute();
    }
}
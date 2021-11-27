<?php

class md_users extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // login
    public function login($userName , $password)
    {
        $sql = 'SELECT * FROM users WHERE username=? AND password=?';
        $query = $this->doSelect($sql , [$userName,$password]);
        if (!empty($query[0]['id'])){
            $userID = $query[0]['id'];
        } else{
            $userID = null;
        }
        $result = [
            'user_id' => $userID
        ];
        return $result;
    }
    
    // register
    public function register($data)
    {
        $sql = 'INSERT INTO users(first_name,last_name,email,username,password,active) values (?,?,?,?,?,?)';
        $query = $this->db->prepare($sql);
        $i = 0;
        foreach ($data as $item){
            $query->bindValue($i+1 , $item);
            $i++;
        }
        $query->execute();
    }

    // 
    public function check_available_user($username,$email)
    {
        $sql = 'SELECT * FROM users WHERE username=? OR email=? LIMIT 1';
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$username);
        $query->bindValue(2,$email);
        $query->execute();
        if ($query->fetchColumn() > 0){
            return true;
        } else{
            return false;
        }
    }

    public function forgotPassword($email)
    {
        $sql = 'SELECT * FROM users WHERE email=?';
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$email);
        $query->execute();
    }
}
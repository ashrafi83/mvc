<?php

class md_profile extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function user_name($userID)
    {
        $sql = 'SELECT * FROM users WHERE id=?';
        $result = $this->doSelect($sql , [$userID])[0];
        return $result['first_name'].' '.$result['last_name'];
    }
    public function personal_info($userID)
    {
        $sql = 'SELECT * FROM users WHERE id=?';
        return $this->doSelect($sql , [$userID])[0];
    }
}
<?php

class md_categories extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function categories($categoryName)
    {
        if ($categoryName == 'all'){
            $categoryName = 0;
            $sql = 'SELECT * FROM categories WHERE parent_id=?';
            $query = $this->db->prepare($sql);
            $query->bindValue(1,$categoryName);
        } else{
            $sql = 'SELECT * FROM categories WHERE url=?';
            $IDQ = $this->doSelect($sql , [$categoryName])[0];
            if ($IDQ != null){
                $id = $IDQ['id'];
                $sql = 'SELECT * FROM categories WHERE parent_id=?';
                $query = $this->db->prepare($sql);
                $query->bindValue(1,$id);
            } else{
                E404();
            }
        }
        $query->execute();
        $fetch = $query->fetchAll();
        if (!empty($fetch)){
            return $fetch;
        } else{
            header('location: '.URL.'shop');
        }
        
    }
}
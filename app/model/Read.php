<?php
namespace App\Model;

class Read extends Model{
    public function read(){
        $sql= "SELECT * FROM category ";
       return $this->Query($sql)->fetch_all();
    }

}
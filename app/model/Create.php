<?php
namespace App\Model;

class Create extends Model {

    public function createTable(){
        $sql= "CREATE table category(
        ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(66) NOT NULL,
        Description VARCHAR(66) NOT NULL,
        CatID INT NOT NULL 
    
)";
        $this->Query($sql);
    }

}
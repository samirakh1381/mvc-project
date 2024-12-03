<?php

namespace App\Model;

class Insert extends Model {
    public function insert(){
        $title= $_POST["title"];
        $description= $_POST["description"];
        $catID= $_POST["catID"];
        $sql=" INSERT INTO category (Title,Description,CatID) VALUES ('$title','$description','$catID')";
        $this->Query($sql);


    }
}
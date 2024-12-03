<?php
namespace App\Model;
class Delete extends Model{
    public function delete($ID){
        $sql="DELETE FROM category WHERE  ID=$ID";
        $this->Query($sql);
    }
}
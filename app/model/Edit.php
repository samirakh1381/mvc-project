<?php
namespace App\Model;

class Edit extends  Model{

    public function edit(){
        $sql=" UPDATE `category` SET `ID`='[value-1]',`Title`='[value-2]',`Description`='[value-3]',`CatID`='[value-4]' WHERE ID=$ID ";
        $this->Query($sql);



    }


}
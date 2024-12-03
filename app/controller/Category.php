<?php

namespace App\controller;
use App\Model\Create;
use App\Model\Insert;

class  Category extends Controller {

    public function cat(){
       $this->view("category.category");
    }

    public function edit(){
        $this->view("category.edit");    }

    public function creator(){
        //create table category
        $obj=new Create;
        $obj->createTable();
        $this->view("category.creator");
        if (isset($_POST["submit"])) {
           $insertData= new Insert;
           $insertData->insert();
          $this->redirect("category");
        }
    }
}

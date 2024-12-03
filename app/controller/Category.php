<?php

namespace App\controller;
use App\Model\Create;
use App\Model\Insert;
use App\Model\Read;
class  Category extends Controller {

    public function cat(){

        $readData= new Read();
        $results= $readData->read();
       $this->view("category.category" , compact("results"));
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

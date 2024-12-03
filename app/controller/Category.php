<?php

namespace App\controller;

use App\Model\Create;
use App\Model\Insert;
use App\Model\Read;
use App\Model\Delete;

class  Category extends Controller
{

    public function cat()
    {

        $readData = new Read();
        $results = $readData->read();
        $this->view("category.category", compact("results"));
        $deleteDate= new Delete();
        if (isset($_GET['id'])){
          $id=$_GET['id'];
          $deleteDate->delete($id);
          $this->redirect("category");
        }


    }

    public function edit()
    {
        $this->view("category.edit");
    }

    public function creator()
    {
        //create table category
        $obj = new Create;
        $obj->createTable();
        $this->view("category.creator");
        if (isset($_POST["submit"])) {
            $insertData = new Insert;
            $insertData->insert();
            $this->redirect("category");
        }
    }
}
<?php

namespace App\controller;

class  Category extends Controller {

    public function cat(){
       $this->view("category.category");
    }

    public function edit(){
        $this->view("category.edit");    }
}

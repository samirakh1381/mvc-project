<?php

namespace App\Model;
 use mysqli;
class Model{

    private $conection;
    private $servsrName= "localhost";
    private $userName= "root";
    private $password= "";
    private $dbName= "db-minimvc";

//conction metod
    public function __construct()
    {
        $this->conection= new mysqli($this->servsrName,$this->userName,$this->password,$this->dbName);
    }

    public function Query($sql){
       return $this->conection->query($sql);

    }





}

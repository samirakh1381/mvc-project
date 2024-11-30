<?php


class Routing{
 private $currentadd;
 private $rout;
 public function __construct(){
     global $currentadd;
     $this->currentadd= $currentadd;
     $this->rout= explode("/",$this->currentadd);
 }
    public function run(){
     $path = realpath(dirname(__FILE__))."/../app/controller/".$this->rout[0].".php";
       if (!file_exists($path)){
           echo "file not exist-404";
           exit;
       }
    }
}
$r= new Routing;
var_dump($r->run());
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
         sizeof($this->rout) ==1 ? $method="cat" : $method=$this->rout[1];
       $class="App\controller\\".$this->rout[0];
       $object = new $class;
        if (method_exists($object,$method)){
            $object->{$method}();
        }else{
            echo "404 metod not exist";
        }
    }
}
$r= new Routing;
$r->run();
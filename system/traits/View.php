<?php


namespace System\Traits;

trait View{
    public function view($url){
        $url= str_replace(".","/",$url);
         include "app/view/".$url.".php";

    }
}

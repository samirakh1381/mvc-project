<?php


namespace System\Traits;

trait Redirect{
    public function redirect($url){
        $domain= "http://". $_SERVER["HTTP_HOST"]."/mvc%20project/".$url;
        header("location:$domain");
    }
}

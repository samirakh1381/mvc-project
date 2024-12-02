<?php


namespace System\Traits;

trait Assets{
    public function get_asset($url){
        return  $url= "http://".$_SERVER["HTTP_HOST"]."/mvc%20project/assest".$url;
    }
}

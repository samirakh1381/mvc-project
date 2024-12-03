<?php


namespace System\Traits;

trait View{
    public function view($url , $var=null){
        if ($var){
            $var= extract($var);

        }

        $url= str_replace(".","/",$url);
         include "app/view/".$url.".php";

    }
}

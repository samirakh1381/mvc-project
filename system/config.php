<?php
$url= $_SERVER["REQUEST_URI"];
$stame=explode("?",$url);

$currentadd= str_replace("/mvc%20project/","",$stame[0]);

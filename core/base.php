<?php

function con(){
    return mysqli_connect("localhost", "root", "", "blogs");
}


$info = array(
    "name" => "Sample Blog",
    "short" => "SB",
    "description" => "project by course"
);

$role = ["Admin","Editor","User"];

    
$url = "http://{$_SERVER['HTTP_HOST']}/wd_9/5_simple_blog";

date_default_timezone_set('Asia/Yangon');
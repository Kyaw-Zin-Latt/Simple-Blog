<?php 
require_once "core/auth.php";
require_once "core/base.php";
require_once "core/functions.php";

$file = $_FILES['upload'];
$fileNameArr = $file['name'];
$fileTempArr = $file['tmp_name'];
$saveFolder = "assets/img/store/";

foreach ($fileNameArr as $key => $fn) {
    
    $newName = $saveFolder.uniqid().'_'.$fileNameArr[$key];
    move_uploaded_file($fileTempArr[$key],$newName);

    $sql = "INSERT INTO users (photo) VALUES('$newName')";
    mysqli_query($conn,$sql);
}

header("location:profile.php");
<?php

$local = 'localhost';
$user = 'root';
$pass = '';
$db = 'shop';

$con = mysqli_connect($local,$user,$pass,$db) or die('connection faild');
mysqli_set_charset($con,'utf8');
if(!$con){
  echo 'connection failed';
}

?>
<?php
include('../../config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$adr = $_POST['adr'];
$road = $_POST['road'];
$data = $_COOKIE['cart'];
if(isset($_COOKIE['promo'])){
  $promo = $_COOKIE['promo'];
}else{
  $promo = '';
}

$send = mysqli_query($con,"INSERT INTO requests (name,phone,city,adr,data,promo,road)
VALUES ('$name','$phone','$city','$adr','$data','$promo','$road')");


if($send){
  $query = mysqli_query($con,"SELECT * FROM requests ORDER BY id DESC");
  $fetch = mysqli_fetch_assoc($query);
  print_r(json_encode(array(
    'id' => $fetch['id'],
    'state' => 'جاري تحضير طلبك الان',
  )));
  setcookie('cart','',time() - 46800*30 ,'/');
  setcookie('promo','',time() - 46800*30 ,'/');
}else{
  echo 'حدث خطأ لم يتم ارسال طلبك';
}


?>
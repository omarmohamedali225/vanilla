<?php
include('../../config.php');
$email = mysqli_real_escape_string($con,$_POST['email']);
$title = mysqli_real_escape_string($con,$_POST['title']);

$send = mysqli_query($con,"INSERT INTO msg (email,title) VALUES ('$email','$title')");

if($send){
  echo 'تم ارسال ملاحظتك بنجاح';
}else{
  echo 'حدث خطأ لم يتم ارسال ملاحظتك';
}

?>
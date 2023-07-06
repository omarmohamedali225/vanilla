<?php
include('../../config.php');

if(isset($_COOKIE['promo'])){
  $code = stripcslashes($_COOKIE['promo']);
  $query = mysqli_query($con,"SELECT * FROM promo WHERE code='$code'");
  if(mysqli_num_rows($query)>0){
    $fetch = mysqli_fetch_assoc($query);
    $value = $fetch['value'];
    print_r($value);
  }
}


?>
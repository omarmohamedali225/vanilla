<?php
include('../../config.php');


if(isset($_COOKIE['promo'])){
  if($_COOKIE['promo']==''){
    setcookie('promo',$code,time() - 46800*30 ,'/');
  }
  $code = $_COOKIE['promo'];
  $query = mysqli_query($con,"SELECT * FROM promo WHERE code='$code'");
  if(mysqli_num_rows($query)>0){
    $fetch = mysqli_fetch_assoc($query);
    $value = $fetch['value'];
    print_r($value);
    // $cook = stripcslashes($_COOKIE['cart']);
    // $unhash = openssl_decrypt(json_encode($cook),'aes-192-cbc','vanilla_shop2002',0,'1234512334564445');
    // $json = json_decode($unhash,true);
    
  }else{
    echo false;
  }
}else{
  $code = mysqli_real_escape_string($con,$_POST['promo']);
  $query = mysqli_query($con,"SELECT * FROM promo WHERE code='$code'");
  if(mysqli_num_rows($query)>0){
    $fetch = mysqli_fetch_assoc($query);
    $value = $fetch['code'];
    if($value==$code){
      setcookie('promo',$code,time() + 46800*30 ,'/');
    }
  }
}



?>
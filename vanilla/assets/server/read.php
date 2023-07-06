<?php
include('../../config.php');
if(isset($_COOKIE['cart'])){
  $session_data = stripcslashes($_COOKIE['cart']);
  $hash = openssl_decrypt(json_encode($session_data),'aes-192-cbc','vanilla_shop2002',0,'1234512334564445');
  $json = json_decode($hash,true);
  foreach($json as $key => $val){
    $id = $json[$key]['id'];
    $query = mysqli_query($con,"SELECT * FROM products WHERE id='$id'");
    $fetch = mysqli_fetch_array($query);
   
    $arr[] = array(
      "id" => $fetch['id'],
      "name" => $fetch['name'],
      "price" => $fetch['price'],
      "image" => $fetch['img'],
      "gm" => $fetch['gm'],
      "quantity" => $json[$key]['quantity']
    );
  };
  
  if($hash=='[]'){
    $_COOKIE['cart'] = '';
    setcookie('cart',$hash,time() - 46800*30 ,'/');
    setcookie('promo','',time() - 46800*30 ,'/');
  }else{
    print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));
  }
  
}




?>
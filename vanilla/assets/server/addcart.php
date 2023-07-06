<?php
include('../../config.php');

$id = $_POST['id'];
$quantity = $_POST['quantity'];

if(isset($_COOKIE['cart'])){
  $session_data = stripcslashes($_COOKIE['cart']);
  $hash = openssl_decrypt(json_encode($session_data),'aes-192-cbc','vanilla_shop2002',0,'1234512334564445');
  $cart = json_decode($hash,true);
}else{
  $cart = array();
}
$item_list_id = array_column($cart,'id');
if(in_array($id,$item_list_id)){
  foreach($cart as $key => $val){
    if($cart[$key]['id']==$id){
      $cart[$key]['quantity'] = $cart[$key]['quantity'] + $quantity;
    }
  }
}else{
  $item = array(
    'id' => $id,
    'quantity' => $quantity
  );
  $cart[] = $item;
}
$itemCart = json_encode($cart);
$hash = openssl_encrypt($itemCart,'aes-192-cbc','vanilla_shop2002',0,'1234512334564445');
setcookie('cart',$hash,time() + 46800*30 ,'/');
?>
<?php

if(isset($_COOKIE['promo'])){
  setcookie('promo','',time() - 46800*30 ,'/');
}


?>
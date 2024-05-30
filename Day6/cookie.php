<?php 
// creating the cookies in PHP

  setcookie("Sunil_Neupane","manilal",time()+(86400*2),"/");
  setcookie("fav_drink","icecream",time()+(86400*2),"/");
   
  foreach($_COOKIE as $key =>$value){
    echo "{$key}={$value}<br>";
  }


?>
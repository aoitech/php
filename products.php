<?php
  require_once 'classes/product.php';
  $products = [
    new Product("avocado","アボカド",230,"./images/image_1.jpg"),
    new Product("orange","オレンジ",100, "./images/image_2.jpg"),
    new Product("lemon","レモン","250", "./images/image_3.jpg"),
    new Product("pineapple","パイナポー","500","./images/image_4.jpg")
  ];
?>
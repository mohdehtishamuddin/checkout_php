<?php
session_start();
$x=$_GET['id'];

if ($_GET['action'] == 'buy') {
    foreach ($_SESSION['buy'] as $key=>$value){
        if ( $value["id"] == $x){
           array_splice($_SESSION['buy'],$key,1);
        }
    }
    header('Location: ../buynow.php');
}

else if ($_GET['action'] == 'cart') {
    foreach ($_SESSION['cart'] as $key=>$value){
        if ( $value["id"] == $x){
           array_splice($_SESSION['cart'],$key,1);
        }
    }
    header('Location: ../product.php');
}

else if ($_GET['action'] == 'wishlist') {
    foreach ($_SESSION['wishlist'] as $key=>$value){
        if ( $value["id"] == $x){
           array_splice($_SESSION['wishlist'],$key,1);
        }
    }
    header('Location: ../wishlist.php');
}



?>
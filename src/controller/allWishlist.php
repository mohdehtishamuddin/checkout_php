<?php
session_start();



if ($_GET['action'] == 'buy') {
    $_SESSION['wishlist']=$_SESSION['buy'];
    $_SESSION['buy']=array();
    header('Location: ../wishlist.php');
}

else if ($_GET['action'] == 'cart') {
    $_SESSION['wishlist']=$_SESSION['cart'];
    $_SESSION['cart']=array();
    header('Location: ../wishlist.php');
}



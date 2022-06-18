<?php
session_start();

if (!isset($_SESSION['buy'])) {

    $_SESSION['buy'] = array();
}


if ($_GET['action'] == 'wishlist') {
    $_SESSION['buy']=$_SESSION['wishlist'];
    $_SESSION['wishlist']=array();
    header('Location: ../buynow.php');
}

else if ($_GET['action'] == 'cart') {
    $_SESSION['buy']=$_SESSION['cart'];
    $_SESSION['cart']=array();
    header('Location: ../buynow.php');
}



<?php
session_start();


if ($_GET['action'] == 'wishlist') {
    $_SESSION['cart']=$_SESSION['wishlist'];
    $_SESSION['wishlist']=array();
    header('Location: ../cart.php');
}

else if ($_GET['action'] == 'buy') {
    $_SESSION['cart']=$_SESSION['buy'];
    $_SESSION['buy']=array();
    header('Location: ../cart.php');
}



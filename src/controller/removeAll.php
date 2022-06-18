<?php
session_start();

// print_r($_SESSION['cart']);
// print_r($_GET['action']);

if ($_GET['action'] == 'buy') {
    $_SESSION['buy'] = array();
    header('Location: ../buynow.php');
}

else if ($_GET['action'] == 'cart') {
    $_SESSION['cart'] = array();
    header('Location: ../product.php');
}

else if ($_GET['action'] == 'wishlist') {
    $_SESSION['wishlist'] = array();
    header('Location: ../wishlist.php');
}
?>

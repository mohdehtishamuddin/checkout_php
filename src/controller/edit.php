<?php
session_start();

$editID = $_POST['id'];
$editQuant = $_POST['quantity'];

if ($_GET['action'] == 'buy') {
    foreach ($_SESSION['buy'] as $key => $value) {
        if($editID == $value['id']){
            $_SESSION['buy'][$key]['quantity']=$editQuant;
            $_SESSION['buy'][$key]['total']=$_SESSION['buy'][$key]['total']*$editQuant;
        }
    }
    header('Location: ../buynow.php');
}

else if ($_GET['action'] == 'cart') {
    foreach ($_SESSION['cart'] as $key => $value) {
        if($editID == $value['id']){
            $_SESSION['cart'][$key]['quantity']=$editQuant;
            $_SESSION['cart'][$key]['total']=$_SESSION['cart'][$key]['total']*$editQuant;
        }
    }
    header('Location: ../product.php');
}


else if ($_GET['action'] == 'wishlist') {
    foreach ($_SESSION['wishlist'] as $key => $value) {
        if($editID == $value['id']){
            $_SESSION['wishlist'][$key]['quantity']=$editQuant;
            $_SESSION['wishlist'][$key]['total']=$_SESSION['wishlist'][$key]['total']*$editQuant;
        }
    }   
    // header('Location: ../wishlist.php');
}



?>
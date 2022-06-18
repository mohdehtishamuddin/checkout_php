<?php
session_start();
include("config.php");

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array();
}

$data = $_GET["id"];
// print_r($_GET["id"]);
// die;
$flag = 0;
foreach ($products as $key => $value) {
    if ($value["id"] == $data) {
        if (!empty($_SESSION['wishlist'])) {
            foreach ($_SESSION['wishlist'] as $a => $p) {
                if ($p["id"] == $data) {
                    $_SESSION['wishlist'][$a]["quantity"] = $p["quantity"] + 1;
                    $_SESSION['wishlist'][$a]["total"] = $_SESSION['wishlist'][$a]["quantity"] * $_SESSION['wishlist'][$a]["price"];
                    $flag = 1;
                }
            }
        } else {
            if (!empty($_SESSION['wishlist'])) {
                $q = 1;
                $t_price = $q * $value["price"];
                $pro = array("id" => $value["id"], "name" => $value["name"], "image" => $value["img"], "price" => $value["price"], "quantity" => $q, "total" => $t_price);
                array_push($_SESSION['wishlist'], $pro);
            }
        }
        if ($flag == 0) {
            $q = 1;
            $t_price = $q * $value["price"];
            $pro = array("id" => $value["id"], "name" => $value["name"], "image" => $value["img"], "price" => $value["price"], "quantity" => $q, "total" => $t_price);
            array_push($_SESSION['wishlist'], $pro);
        }
    }
}; 
//print_r($_SESSION['wishlist']);
header("Location:../product.php");
die();

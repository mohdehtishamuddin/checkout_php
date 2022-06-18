<?php
session_start();
include("config.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$data = $_GET["id"];
$flag = 0;
foreach ($products as $key => $value) {
    if ($value["id"] == $data) {
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $a => $p) {
                if ($p["id"] == $data) {
                    $_SESSION['cart'][$a]["quantity"] = $p["quantity"] + 1;
                    $_SESSION['cart'][$a]["total"] = $_SESSION['cart'][$a]["quantity"] * $_SESSION['cart'][$a]["price"];
                    $flag = 1;
                }
            }
        } else {
            if (!empty($_SESSION['cart'])) {
                $q = 1;
                $t_price = $q * $value["price"];
                $pro = array("id" => $value["id"], "name" => $value["name"], "image" => $value["img"], "price" => $value["price"], "quantity" => $q, "total" => $t_price);
                array_push($_SESSION['cart'], $pro);
            }
        }
        if ($flag == 0) {
            $q = 1;
            $t_price = $q * $value["price"];
            $pro = array("id" => $value["id"], "name" => $value["name"], "image" => $value["img"], "price" => $value["price"], "quantity" => $q, "total" => $t_price);
            array_push($_SESSION['cart'], $pro);
        }
    }
}; 
//print_r($_SESSION['cart']);
header("Location:../product.php");
die();

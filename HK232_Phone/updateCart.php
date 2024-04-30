<?php
require("connectDB.php");

$quantity = $_POST["quantity"];
$products_ID = $_POST["products_id"];


$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);


$result = mysqli_query($conn, "SELECT * FROM product WHERE products_id = '" . $products_ID . "'");
$product = mysqli_fetch_object($result);


array_push($cart, array(
    "product_ID" => $products_ID,
    "quantity" => $quantity,
    "product" => $product,
    "httponly" => true 
));


setcookie("cart", json_encode($cart), time() + (60 * 15), "/");
header("Location: productDetail.php?id=$products_ID");


?>
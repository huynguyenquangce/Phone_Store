<?php

require("connectDB.php");
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$name = $_POST["name"];
$address = $_POST["address"];
$order = $_POST["order"];
$email = $_POST["email"];
$total_price = $_POST["total_price"];
$products_id = $_POST["products_id"];

$error = array();



if (isset($_POST["phone"])) {
    $phone = $_POST["phone"];
    if ((strlen($phone) != 10)) {
        $error["phone"] = "Số điện thoại không hợp lệ";
    }
}

if(!isset($_POST["products_id"])){
    $error["products_id"] = "Not set";
    echo '<script>alert("Vui lòng thêm sản phẩm trước khi đặt hàng!"); </script>';

}

if (sizeof($error)) {
    require("cart.php");
} else {
    $sql = 'INSERT INTO user_order (name,email, phone,address,order_content,total_price,product_id) VALUE ("'.$name.'","'.$email.'","'.$phone.'","'.$address.'","'.$order.'","'.$total_price.'","'.$products_id.'")';

    if (mysqli_query($conn, $sql)){
        setcookie("cart", "", time() + (60 * 15), "/");
        echo '<script>alert("Đặt hàng thành công!"); 
        window.location.href = "./index.php";</script>';
    }
    else{
        echo "Lỗi: " . mysqli_error($conn);
    }
    
}
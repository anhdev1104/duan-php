<?php
session_start();
include('../../../../config/pdo.php');

$id_user = $_SESSION['id_user'];
$key_cart = rand(0, 9999);
$insert_cart = "INSERT INTO cart_order(user_id, order_status, key_cart) VALUE ('$id_user', 1, '$key_cart')";
$cart_query = pdo_execute($insert_cart);

if ($cart_query) {
    // Thêm giỏ hàng chi tiết
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_product = $value['id'];
        $quantity = $value['quantity'];
        $insert_order_details = "INSERT INTO order_details(id_product, quantity_buy, key_cart) VALUE('$id_product', '$quantity', '$key_cart')";
        pdo_execute($insert_order_details);
    }
}

if (!$cart_query) {
    echo "Lỗi khi thực hiện truy vấn: " . print_r($stmt->errorInfo(), true);
}

unset($_SESSION['cart']);
// header('Location: ../../../thanksbuy.php');

<?php
session_start();
include('../../../../config/pdo.php');

$id_user = $_SESSION['id_user'];
$key_cart = rand(0, 9999);

// Thiết lập múi giờ
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Thiết lập ngôn ngữ và vùng cho ngôn ngữ Việt Nam
setlocale(LC_TIME, 'vi_VN');

// Lấy ngày giờ hiện tại và định dạng theo ngôn ngữ Việt Nam
$order_date = strftime("%d/%m/%Y %H:%M:%S");

$insert_cart = "INSERT INTO cart_order(user_id, order_status, key_cart, order_date) VALUE ('$id_user', 1, '$key_cart', '$order_date')";
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

header("Location: ../../../orderInfo.php?key_cart=$key_cart");

<?php
// Thông tin người dùng order
$sql_get_cart = "SELECT * FROM cart_order, customer WHERE cart_order.user_id=customer.id_customer ORDER BY cart_order.id_order DESC LIMIT 1";
$info_order_customer = pdo_query_one($sql_get_cart);
extract($info_order_customer);

// Thông tin sản phẩm order
$key_cart = isset($_GET['key_cart']) ? $_GET['key_cart'] : '';
$sql_get_product = "SELECT * FROM order_details, product WHERE order_details.id_product=product.id_product AND order_details.key_cart='$key_cart' ORDER BY order_details.id_orderdetails DESC";
$get_order_product = pdo_query($sql_get_product);
?>

<main>
    <section class="info-order section">
        <div class="container">
            <div id="invoice">

                <div id="invoice-header">
                    <h2>HÓA ĐƠN THANH TOÁN</h2>
                    <p>Ngày: <b><?= $order_date ?></b></p>
                </div>

                <div id="customer-details">
                    <h3>THÔNG TIN KHÁCH HÀNG</h3>
                    <p>Tên Khách Hàng: <b><?= $fullname ?></b></p>
                    <p>Địa Chỉ: <b><?= $address ?></b></p>
                    <p>Số Điện Thoại: <b>0<?= $phone_number ?></b></p>
                    <p>Email: <b><?= $email ?></b></p>
                </div>

                <div id="product-table">
                    <h3>SẢN PHẨM MUA</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Thứ Tự</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Đơn Giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            $result = 0;
                            foreach ($get_order_product as $row) {
                                extract($row);
                                $i++;
                                $total = $current_price * $quantity_buy;
                                $result += $total;
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $name_product ?></td>
                                    <td><?= str_replace(',', '.', number_format($current_price)) . 'đ'; ?></td>
                                    <td><?= $quantity_buy ?></td>
                                    <td><?= str_replace(',', '.', number_format($total)) . 'đ'; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div id="payment-details">
                    <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                    <p>Phương Thức Thanh Toán: <b>Thanh toán khi nhận hàng</b></p>
                </div>

                <div id="total">
                    <p>Tổng Tiền: <?= str_replace(',', '.', number_format($result)) . 'đ'; ?></p>
                </div>

                <div>
                    <p>CẢM ƠN BẠN ĐÃ MUA HÀNG!</p>
                </div>
            </div>
        </div>
    </section>

</main>
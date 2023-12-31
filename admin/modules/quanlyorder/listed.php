<?php
$sql_get_cart = "SELECT * FROM cart_order, customer WHERE cart_order.user_id=customer.id_customer ORDER BY cart_order.id_order DESC";
$query_get_cart = pdo_query($sql_get_cart);
?>

<div class="container mt-5">
    <h2>Danh sách Orders sản phẩm</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($query_get_cart as $row) {
                extract($row);
                $i++;
            ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $fullname; ?></td>
                    <td style="width: 250px;"><?= $address; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= '0' . $phone_number; ?></td>
                    <td><?= $order_date; ?></td>
                    <td>
                        <select class="form-select" name="orderStatus">
                            <?php
                            if ($order_status == 1) {
                            ?>
                                <option value="1" selected>Đơn hàng mới</option>
                                <option value="2">Đã giao hàng</option>
                                <option value="3">Đã huỷ</option>
                            <?php
                            } else if ($order_status == 2) {
                            ?>
                                <option value="2" selected>Đã giao hàng</option>
                                <option value="1">Đơn hàng mới</option>
                                <option value="3">Đã huỷ</option>
                            <?php } else {
                            ?>
                                <option value="3" selected>Đã huỷ</option>
                                <option value="2">Đã giao hàng</option>
                                <option value="1">Đơn hàng mới</option>
                            <?php } ?>

                        </select>
                    </td>
                    <td>
                        <a href="index.php?action=donhang&query=xemdonhang&key_cart=<?= $key_cart; ?>" class="nav-link btn btn-success mx-2">CHI TIẾT</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<main>
    <div class="perfume">
        <div class="blog_header">
            <div class="container">
                <div class="blog_header_test">
                    <span><a href="./index.php">Trang chủ</a></span>
                    <span>/</span>
                    <a href="#">Giỏ hàng</a>
                </div>
            </div>
        </div>
        <div class="container order_container">
            <div class="left_order">
                <h1 class="heading-cart">Giỏ hàng của bạn</h1>
                <div class="container_wrap_order">
                    <div class="wrap_order_left">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            $totalQuantityCart = 0;
                            $i = 0;
                            foreach ($cart as $product) {
                                $totalQuantityCart += $i + 1;
                            }
                            echo '<div class="head-action-cart">
                            <h2 class="title-number-cart">
                            Bạn đang có <span>' . $totalQuantityCart . ' sản phẩm</span> trong giỏ hàng
                            </h2>
                            <a href="layout/product/main/cart.php?xoatatca=1" title="Xoá tất cả" class="head-action-item">
                                <b>Xoá tất cả</b>
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                            </div>';

                            $i = 0;
                            $totalBill = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $i++;
                                $total = $cart_item['price'] * $cart_item['quantity'];
                                $totalBill += $total;
                        ?>
                                <div class="table_cart">
                                    <div class="item-img">
                                        <div>
                                            <img src="../admin/modules/quanlyproduct/uploads/<?= $cart_item['imageProduct']; ?>" alt="<?= $cart_item['nameProduct']; ?>">
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div>
                                            <h3><?= $cart_item['nameProduct']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="item-quan">
                                        <a href="layout/product/main/cart.php?tru=<?= $cart_item['id']; ?>" class="item-quan-btn">
                                            <span>-</span>
                                        </a>
                                        <input type="text" name="" min="1" id="" value="<?= $cart_item['quantity']; ?>" class="item-quantity">
                                        <a href="layout/product/main/cart.php?cong=<?= $cart_item['id']; ?>" class="item-quan-btn">
                                            <span>+</span=>
                                        </a>
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            <span><?= str_replace(',', '.', number_format($cart_item['price'])) . 'đ'; ?></span>
                                        </p>
                                    </div>
                                    <div class="item-total-price">
                                        <div class="price">
                                            <span class="text">Thành tiền:</span>
                                            <span class="line-item-total"><?= str_replace(',', '.', number_format($total)) . 'đ' ?></span>
                                        </div>
                                        <div class="remove">
                                            <a href="layout/product/main/cart.php?xoa=<?= $cart_item['id']; ?>" class="cart" title="Xoá sản phẩm">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                        <?php
                            }
                        } else {
                            echo '<p class="cart-null">Giỏ hàng của bạn đang trống.</p>';
                            echo '<a href="../index.php" class="button">Tiếp tục mua hàng</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="section-collection">
                    <?php
                    if (isset($_SESSION['cart'])) {
                        echo '<div class="cart-row">
                            <div class="cart-right-block">
                                <h4>Chính sách Đổi/Trả</h4>
                                <ul>
                                    <li>Trong vòng 7 ngày (dành cho khách mua tại cửa hàng)</li>
                                    <li>Trong vòng 10 ngày (dành cho khách mua online)</li>
                                    <li>&nbsp;Trong vòng 10 ngày (dành cho khách mua online)</li>
                                    <li>Sản phẩm phải còn nguyên vẹn, không bị tác động vật lý (không móp méo, trầy xước, bể, vỡ, nứt).</li>
                                    <li>Dung tích hao hụt trong phạm vi quy định cho phép.</li>
                                </ul>
                            </div>
                        </div>';
                    }
                    ?>
                    <div class="wrapper-heading-home">
                        <h2>
                            <div>
                                Có thể bạn sẽ thích
                            </div>
                        </h2>
                        <div class="view-all">
                            <a href="#">Xem Thêm</a>
                        </div>
                    </div>
                </div>
                <div class="product_list">
                    <div class="product_item">
                        <a href="#" class="order_img-box sale30-important">
                            <img src="../admin/modules/quanlyproduct/uploads/1700503629_sale-3.webp" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/1700503629_sale-3.2.webp" alt="" class="product_img-2">
                        </a>
                        <a href="#" class="product_title">Sữa tắm BST Lumin - Rose Quince 300ml</a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin">160.000đ</span>
                            <span class="product_price-old">260.000đ</span>
                        </p>
                        <a href="#" class="button_order">XEM CHI TIẾT</a>
                    </div>
                    <div class="product_item">
                        <a href="#" class="order_img-box sale30-important">
                            <img src="../admin/modules/quanlyproduct/uploads/1700503411_sale-2.webp" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/1700503411_sale-2.2.webp" alt="" class="product_img-2">
                        </a>
                        <a href="#" class="product_title">Sữa tắm BST Lumin - Harmony Of The Sea 300ml</a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin">160.000đ</span>
                            <span class="product_price-old">260.000đ</span>
                        </p>
                        <a href="#" class="button_order">XEM CHI TIẾT</a>
                    </div>
                    <div class="product_item">
                        <a href="#" class="order_img-box sale30-important">
                            <img src="../admin/modules/quanlyproduct/uploads/1700502637_sale-1.webp" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/1700502637_sale-1.2.webp" alt="" class="product_img-2">
                        </a>
                        <a href="#" class="product_title">Nến thơm Lialily</a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin">126.000đ</span>
                            <span class="product_price-old">180.000đ</span>
                        </p>
                        <a href="#" class="button_order">XEM CHI TIẾT</a>
                    </div>
                    <div class="product_item">
                        <a href="#" class="order_img-box sale30-important">
                            <img src="../admin/modules/quanlyproduct/uploads/1700583229_nuochoa3.webp" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/1700629687_nuochoa-3.2.webp" alt="" class="product_img-2">
                        </a>
                        <a href="#" class="product_title">Nước hoa Gardenia 16</a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin">312.000đ</span>
                            <span class="product_price-old">390.000đ</span>
                        </p>
                        <a href="#" class="button_order">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
            <div class="right_order">
                <div class="col-md-3">
                    <div class="order-summary-block">
                        <h2 class="order-summary-title">Thông tin đơn hàng</h2>
                        <div class="summary-subtotal hidden">
                        </div>
                        <div class="summary-total">
                            <p>Tổng tiền: <?php
                                            if (isset($_SESSION['cart'])) {
                                                echo '<span> ' . str_replace(',', '.', number_format($totalBill)) . 'đ </span>';
                                            } else {
                                                echo "<span>0đ</span>";
                                            }
                                            ?>
                            </p>
                        </div>
                        <div class="summary-action">
                            <p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                            <?php
                            if (isset($_SESSION['register']) || isset($_SESSION['login_user'])) {
                                echo "<a href='layout/product/main/pay.php' class='checkout-btn'>Đặt hàng</a>";
                            } else {
                                echo "<a href='../admin/login.php' class='checkout-btn'>Đăng nhập để đặt hàng</a>";
                            }
                            ?>
                        </div>
                    </div>
                    <a href="../index.php" class="continue">Tiếp tục mua hàng →</a>
                </div>
            </div>
        </div>
    </div>
</main>
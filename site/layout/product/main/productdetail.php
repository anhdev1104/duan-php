<?php
include "../config/comment.php";


$sql_details = "SELECT * FROM product, category WHERE product.category_id=category.id_category AND product.id_product='$_GET[id]' ORDER BY id_product LIMIT 1";
$query_details = pdo_query($sql_details);
foreach ($query_details as $row) {
    extract($row);
?>


    <div class="product_details">
        <section class="product_details-main">
            <form action="layout/product/main/cart.php?idsanpham=<?= $id_product; ?>" method="POST">
                <div class="product_details-wrap">
                    <div class="product_details-left">
                        <ul class="details-list-img">
                            <li class="details-item-img active-img">
                                <img src="../admin/modules/quanlyproduct/uploads/<?= $path_image ?>" alt="" class="">
                            </li>
                            <li class="details-item-img ">
                                <img src="../admin/modules/quanlyproduct/uploads/<?= $path_hover ?>" alt="" class="">
                            </li>
                        </ul>
                        <div class="details_left-main">
                            <div class="details_left-box">
                                <img src="../admin/modules/quanlyproduct/uploads/<?= $path_image ?>" alt="" class="details_left-img" id="srcImage">
                            </div>
                        </div>
                    </div>
                    <div class="product_details-right">
                        <h1 class="product_details-title"><?= $name_product; ?></h1>
                        <div class="details_sale-wrap">
                            <div class="details_sale">-10%</div>
                            <span class="details_price-origin"><?= str_replace(',', '.', number_format($current_price)) . 'đ' ?></span>
                            <span class="details_price-old"><?= str_replace(',', '.', number_format($origin_price)) . 'đ' ?></span>
                        </div>
                        <div class="details_box-size">
                            <div class="details_size isActiveSize">
                                <span>10ml</span>
                            </div>
                            <div class="details_size">
                                <span>50ml</span>
                            </div>
                            <div class="details_size">
                                <span>100ml</span>
                            </div>
                        </div>
                        <div class="details_add-cart">
                            <button type="submit" name="addproductdetails" class="btn_add-product button">THÊM VÀO GIỎ HÀNG</button>
                            <!-- <button class="btn_buy-now button">MUA NGAY</button> -->
                        </div>
                        <h2 class="product_desc">Mô tả</h2>
                        <h3 class="product_details-name">(<?= $name_product ?>)</h3>
                        <p class="details_description"><?= $description ?></p>
                    </div>
                <?php } ?>
                </div>
            </form>

            <div class="details-comment">
                <div class="comment-heading">ĐÁNH GIÁ SẢN PHẨM</div>
                <form action="" method="POST" class="comment-form">
                    <div class="form-control">
                        <input type="hidden" name="product_id_comment" value="<?= $id_product ?>">
                        <?php
                        $name_user_comment = $_SESSION['login_user'] ?? '';
                        $name_register_comment = $_SESSION['register'] ?? '';
                        ?>
                        <input type="hidden" name="name_user_comment" value="<?php
                                                                                if ($name_user_comment) {
                                                                                    echo $name_user_comment;
                                                                                } else if ($name_register_comment) {
                                                                                    echo $name_register_comment;
                                                                                } else {
                                                                                    echo "";
                                                                                }
                                                                                ?>">
                        <input type="text" class="comment-input" name="comment" placeholder="Feedback sản phẩm">
                        <button type="submit" name="submit_comment" class="comment-submit" title="Gửi"><i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
                    $comment = insert_comment();
                    if ($comment === 'login_required') {
                ?>
                        <script>
                            alert('Vui lòng đăng nhập để đánh giá sản phẩm !');
                        </script>
                    <?php } else if ($comment === 'comment_required') { ?>
                        <script>
                            alert('Không được để bình luận trống !');
                        </script>
                    <?php } ?>

                <?php
                }
                $sql = select_comment();
                $rows = pdo_query($sql);
                foreach ($rows as $row) {
                    extract($row);
                ?>
                    <div class="comment-user">
                        <h2 class="comment-name"><?= $name_cmt ?></h2>
                        <p class="comment-note"><?= $note ?></p>
                    </div>
                <?php } ?>
            </div>

            <h1 class="product_related-title">Sản phẩm liên quan</h1>
            <div class="product_related">
                <div class="product_related-control">
                    <div class="product_related-prev">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="product_related-next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="product_related-main">
                    <?php
                    $limit = 9;
                    $sql = random_product($limit);
                    $random_product = pdo_query($sql);
                    foreach ($random_product as $row) {
                        extract($row);
                    ?>
                        <div class="product_item">
                            <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_img-box">
                                <img src="../admin/modules/quanlyproduct/uploads/<?= $path_image ?>" alt="" class="product_img-1">
                                <img src="../admin/modules/quanlyproduct/uploads/<?= $path_hover ?>" alt="" class="product_img-2">
                            </a>
                            <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_title"><?= $name_product ?></a>
                            <p class="product_price-wrap">
                                <span class="product_price-origin"><?= str_replace(',', '.', number_format($current_price)) . 'đ' ?></span>
                                <span class="product_price-old"><?= str_replace(',', '.', number_format($origin_price)) . 'đ' ?></span>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
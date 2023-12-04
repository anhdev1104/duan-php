<?php

// Lấy dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit-search'])) {
    $item = $_POST['search-item'];

    // Truy vấn cơ sở dữ liệu
    $query = "SELECT * FROM product WHERE name_product LIKE '%$item%'";
    $result = pdo_query($query);
    $numResults = count($result);
?>

    <section class="view-search">
        <h1 class="search-heading">Có <?= $numResults ?> kết quả cho từ khóa</h1>

        <div class="product_list search-wrap">
            <?php
            foreach ($result as $row) {
            ?>
                <div class="product_item item-search">
                    <a href="product.php?menu=chitietsanpham&id=<?= $row['id_product'] ?>" class="product_img-box">
                        <img src="../admin/modules/quanlyproduct/uploads/<?= $row['path_image'] ?>" alt="" class="product_img-1">
                        <img src="../admin/modules/quanlyproduct/uploads/<?= $row['path_hover'] ?>" alt="" class="product_img-2">
                    </a>
                    <a href="product.php?menu=chitietsanpham&id=<?= $row['id_product'] ?>" class="product_title"><?= $row['name_product'] ?></a>
                    <p class="product_price-wrap">
                        <span class="product_price-origin"><?= str_replace(',', '.', number_format($row['current_price'])) . 'đ'; ?></span>
                        <span class="product_price-old"><?= str_replace(',', '.', number_format($row['origin_price'])) . 'đ'; ?></span>
                    </p>
                </div>
        <?php }
        } ?>
        </div>
    </section>
<?php
$limit = 6;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * $limit) - $limit;
}

$sql_product = "SELECT * FROM product WHERE product.category_id='$_GET[id]' ORDER BY id_product DESC LIMIT $begin, $limit";
$query_product = pdo_query($sql_product);
?>

<div class="product_list_featured">
    <?php
    $sql_category = "SELECT * FROM category WHERE category.id_category = '$_GET[id]' LIMIT 1";
    $query_category = pdo_query_one($sql_category);
    ?>
    <h1><?= $query_category['category_name'] ?></h1>
    <div class="product_list_perfume">
        <?php
        foreach ($query_product as $row_product) {
            extract($row_product);
            if ($status == 1) {
        ?>
                <div class="product_item_perfume">
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
        <?php }
        } ?>


    </div>
</div>
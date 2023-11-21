<?php
// GET category_name 
$sql_category = "SELECT * FROM category WHERE category.id_category = '$_GET[id]' LIMIT 1";
$query_category = pdo_query($sql_category);
?>

<main>
    <div class="perfume">
        <div class="blog_header">
            <div class="container">
                <div class="blog_header_test">
                    <span><a href="./index.php">Trang chủ</a></span>
                    <span>/</span>
                    <?php
                    foreach ($query_category as $row_title) {
                    ?>
                        <a href="#"><?= $row_title['category_name']; ?></a>
                    <?php } ?>
                    <?php
                    if (isset($_GET['menu']) == 'chitietsanpham') {
                        $sql_details = "SELECT * FROM product, category WHERE product.category_id=category.id_category AND product.id_product='$_GET[id]' ORDER BY id_product LIMIT 1";
                        $query_details = pdo_query($sql_details);
                        foreach ($query_details as $row_category) {
                            extract($row_category);
                            echo '<a href="#">' . $category_name . '</a>';
                            echo '<span> / </span>';
                            echo '<a href="#">' . $name_product . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="introduce_main-wrap">
                <div class="prefume_product">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-search'])) {
                        $item = $_POST['search-item'];
                    } else {
                        $item = '';
                    }

                    if ($item) {
                        include "main/viewsearch.php";
                    } else {
                        if (isset($_GET['menu'])) {
                            $temp = $_GET['menu'];
                        } else {
                            $temp = '';
                        }

                        if ($temp != 'chitietsanpham') {
                            include('navbar.php');
                        }

                        if ($temp == 'chitietsanpham') {
                            include('main/productdetail.php');
                        } else {
                            include('main/index.php');
                        }
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>
</main>
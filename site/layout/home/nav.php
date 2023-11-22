<?php
// lấy ra danh mục
$sql_category = "SELECT * FROM category ORDER BY order_category ASC";
$rows_category = pdo_query($sql_category);


?>

<section class="header_top">
    <div class="header_top-block">
        <!-- HEADER - FIXED -->
        <div class="header_top-box header-fixed ">
            <div class="container header_top-wrap-fixed">
                <a href="./index.php" class="header_box-item-fixed header_box-img">
                    <img src="./img/logo.webp" alt="" class="header_logo header_logo-fixed">
                </a>
                <div class="header_box-item-fixed">
                    <ul class="header_menu">
                        <?php
                        foreach ($rows_category as $row_category) {
                            extract($row_category);
                        ?>
                            <li class="header_menu-item">
                                <a href="product.php?menu=sanpham&id=<?= $id_category; ?>" class="header-fixed-link"><?= $category_name ?></a>
                                <!-- <i class="fa-solid fa-angle-down"></i> -->
                                <!-- <ul class="header_submenu">
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Dịch vụ dành riêng Thành viên
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Get up to 380k cash back
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Flash deal Online
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Month - End Deal
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            FlashSale
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            November Special
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Your Feedback - Our Motivation
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                        <?php } ?>
                        <!-- <li class="header_menu-item">
                            <a href="../../product.php" class="header-fixed-link">NƯỚC HOA</a>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="header_submenu">
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Chypre (hương đảo Chypre)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Floral (hương hoa cỏ)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fresh (hương tươi mát)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fruity (hương trái cây)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Musk (xạ hương)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Leather (hương da thuộc)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Woody (hương gỗ)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Oriental (hương Phương Đông)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fougere (hương rêu phong)
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header_menu-item">
                            <a href="#" class="header-fixed-link">SẢN PHẨM KHÁC</a>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="header_submenu">
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Sữa tắm nước hoa
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Nến thơm
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="header_menu-item">
                            <a href="./introduce.php" class="header-fixed-link">GIỚI THIỆU</a>
                        </li>
                        <li class="header_menu-item">
                            <a href="./blog.php" class="header-fixed-link">BLOG</a>
                        </li>
                        <li class="header_menu-item">
                            <a href="./contact.php" class="header-fixed-link">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
                <div class="header_box-item-fixed">
                    <div class="header_box-action header_box-action-fixed">
                        <a href="./login.php" class="header_action-item header_action-user">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <a href="#" class="header_action-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" class="header_action-item">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <!-- responsive tablet - mobile -->
                        <div class="navbar">
                            <div class="navbar_icon navbar-icon">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <p class="header_top-text">FlashSale độc quyền tại Website 21:00 -09:00</p>
        <div class="header_top-box">
            <div class="header_top-wrap container">
                <div class="header_box-item"></div>
                <a href="./index.php" class="header_box-item header_box-img">
                    <img src="./img/logo.webp" alt="" class="header_logo">
                </a>
                <div class="header_box-item">
                    <div class="header_box-action">
                        <a href="./login.php" class="header_action-item header_action-user">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <a href="#" class="header_action-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" class="header_action-item">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <!-- responsive tablet - mobile -->
                        <div class="navbar">
                            <div class="navbar_icon navbar-icon">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_box-item--12">
                    <ul class="header_menu">
                        <?php
                        foreach ($rows_category as $row_category) {
                            extract($row_category);
                        ?>
                            <li class="header_menu-item">
                                <a href="product.php?menu=sanpham&id=<?= $id_category; ?>"><?= $category_name ?></a>
                                <!-- <i class="fa-solid fa-angle-down"></i>
                                <ul class="header_submenu">
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Dịch vụ dành riêng Thành viên
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Get up to 380k cash back
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Flash deal Online
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Month - End Deal
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            FlashSale
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            November Special
                                        </a>
                                    </li>
                                    <li class="header_submenu-item">
                                        <a href="#">
                                            Your Feedback - Our Motivation
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                        <?php } ?>
                        <!-- <li class="header_menu-item">
                            <a href="./product.php">NƯỚC HOA</a>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="header_submenu">
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Chypre (hương đảo Chypre)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Floral (hương hoa cỏ)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fresh (hương tươi mát)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fruity (hương trái cây)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Musk (xạ hương)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Leather (hương da thuộc)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Woody (hương gỗ)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Oriental (hương Phương Đông)
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Fougere (hương rêu phong)
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header_menu-item">
                            <a href="#">SẢN PHẨM KHÁC</a>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="header_submenu">
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Sữa tắm nước hoa
                                    </a>
                                </li>
                                <li class="header_submenu-item">
                                    <a href="#">
                                        Nến thơm
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="header_menu-item">
                            <a href="./introduce.php">GIỚI THIỆU</a>
                        </li>
                        <li class="header_menu-item">
                            <a href="./blog.php">BLOG</a>
                        </li>
                        <li class="header_menu-item">
                            <a href="./contact.php">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>
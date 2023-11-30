<?php
session_start();

if (isset($_GET['dangxuatuser']) && $_GET['dangxuatuser'] == 1) {
    unset($_SESSION['register']);
    unset($_SESSION['login_user']);
    header('Location: ../admin/login.php');
}


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
                            </li>
                        <?php } ?>
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
                        <div class="account">
                            <?php
                            if (isset($_SESSION['register'])) {
                                echo '<span>Hello! ' . $_SESSION['register'] . '</span>';
                            } else if (isset($_SESSION['login_user'])) {
                                echo '<span>Hello! ' . $_SESSION['login_user'] . '</span>';
                            } else {
                                echo '<a href="../admin/login.php" class="header_action-item header_action-user">
                            <i class="fa-regular fa-user"></i>
                            </a>';
                            }
                            ?>
                            <?= (isset($_SESSION['register']) || isset($_SESSION['login_user'])) ? '<a href="index.php?dangxuatuser=1" class="page-logout">Đăng xuất</a>' : '' ?>
                        </div>
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
                        <div class="account">
                            <?php
                            if (isset($_SESSION['register'])) {
                                echo '<span>Hello! ' . $_SESSION['register'] . '</span>';
                            } else if (isset($_SESSION['login_user'])) {
                                echo '<span>Hello! ' . $_SESSION['login_user'] . '</span>';
                            } else {
                                echo '<a href="../admin/login.php" class="header_action-item header_action-user">
                            <i class="fa-regular fa-user"></i>
                            </a>';
                            }
                            ?>
                            <?= (isset($_SESSION['register']) || isset($_SESSION['login_user'])) ? '<a href="index.php?dangxuatuser=1" class="page-logout">Đăng xuất</a>' : '' ?>
                        </div>

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
                            </li>
                        <?php } ?>
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
<header class="header">
    <section class="header_top">
        <?php
        include './layout/home/nav.php';
        ?>
    </section>

    <!-- navbar menu -->
    <div class="over-lay"></div>
    <div class="navbar_menu">
        <div class="navbar_head">
            <span class="navbar_head-title">MENU</span>
            <span class="navbar_head-close"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <ul class="navbar_menu-main">
            <li class="navbar_menu-item">
                <a href="">ƯU ĐÃI</a>
                <i class="fa-solid fa-caret-down"></i>
            </li>
            <li class="navbar_menu-item">
                <a href="./product.html">Nước hoa</a>
                <i class="fa-solid fa-caret-down"></i>
            </li>
            <li class="navbar_menu-item">
                <a href="">Sản phẩm khác</a>
                <i class="fa-solid fa-caret-down"></i>
            </li>
            <li class="navbar_menu-item">
                <a href="./introduce.html">Giới thiệu</a>
            </li>
            <li class="navbar_menu-item">
                <a href="./blog.html">Blog</a>
            </li>
            <li class="navbar_menu-item">
                <a href="./contact.html">Liên hệ</a>
            </li>
        </ul>
        <a href="./login.php" class="navbar_login">
            <i class="fa-solid fa-user"></i>
            <span>Đăng nhập</span>
        </a>
    </div>
    <!-- navbar search -->
    <div class="navbar_search">
        <div class="navbar_head-search">
            <span class="navbar_head-title--search">TÌM KIẾM</span>
            <span class="navbar_head-close--search" title="Đóng"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <div class="search-block">
            <form action="product.php" method="POST" class="search-form">
                <input type="text" class="search-input" name="search-item" placeholder="Tìm kiếm sản phẩm...">
                <button type="submit" name="submit-search"><i class="fa-solid fa-magnifying-glass search-icon"></i></button>
            </form>
        </div>
    </div>
</header>
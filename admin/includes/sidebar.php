<?php 

$page= substr($_SERVER['SCRIPT_NAME'], strripos($_SERVER['SCRIPT_NAME'],"/")+1);
 ?>
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <span class="ms-1 font-weight-bold text-white">MORRA </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main" style="height: 75vh">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link text-white ">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="user.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">User manage</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="oder.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <span class="nav-link-text ms-1">Order manage</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="category.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">All Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="add-category.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="products.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">All Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="add-product.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="add-blog.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">edit</i>
                    </div>
                    <span class="nav-link-text ms-1">Add blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="blog.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">All blog</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php" type="button">Logout</a>
        </div>
    </div>
</aside>
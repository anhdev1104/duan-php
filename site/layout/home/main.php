<?php
include '../config/product.php';

$subquery = "SELECT MIN(category_id) FROM product";
// Câu truy vấn chính - lấy tất cả sản phẩm có ID bằng với ID nhỏ nhất tìm được từ truy vấn con
$sql_product = "SELECT * FROM product WHERE product.category_id = ($subquery) GROUP BY id_product ASC LIMIT 4";
$rows = pdo_query($sql_product);
?>

<main>
    <a href="#sale_product" class="btn_scroll-downs"><i class="fa-solid fa-chevron-down"></i></a>
    <!-- NƯỚC HOA THEO NHÓM HƯƠNG -->
    <section class="section">
        <div class="container">
            <h1 class="section_heading">NƯỚC HOA THEO NHÓM HƯƠNG</h1>
            <ul class="tab_product">
                <li class="tab_product-item">
                    <a href="#">Floral (hương hoa cỏ)</a>
                </li>
                <li class="tab_product-item">
                    <a href="#">Woody (hương gỗ)</a>
                </li>
                <li class="tab_product-item">
                    <a href="#">Amber (hổ phách)</a>
                </li>
                <li class="tab_product-item">
                    <a href="#">Chypre (hương đảo Chypre)</a>
                </li>
            </ul>
            <div class="product_list">
                <?php
                foreach ($rows as $row) {
                    extract($row);
                ?>
                    <div class="product_item">
                        <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_img-box">
                            <img src="../admin/modules/quanlyproduct/uploads/<?= $path_image ?>" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/<?= $path_hover ?>" alt="" class="product_img-2">
                        </a>
                        <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_title"><?= $name_product ?></a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin"><?= str_replace(',', '.', number_format($current_price)) . 'đ'; ?></span>
                            <span class="product_price-old"><?= str_replace(',', '.', number_format($origin_price)) . 'đ'; ?></span>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="product_collection">
                <h1 class="section_heading">DẤU ẤN CỦA RIÊNG BẠN!</h1>
                <div class="product_collection-main pt-50">
                    <div class="product_collection-item">
                        <div class="collection_img-box">
                            <img src="./img/collection-1.webp" alt="" class="collection_img">
                        </div>
                        <h1 class="collection_heading">Chọn dấu hương</h1>
                        <p class="collection_desc">Đội ngũ Morra luôn sẵn sàng cùng bạn bước vào hành trình khám
                            phá để tìm ra dấu hương đặc trưng riêng</p>
                    </div>

                    <div class="product_collection-item">
                        <div class="collection_img-box">
                            <img src="./img/collection-2.webp" alt="" class="collection_img">
                        </div>
                        <h1 class="collection_heading">Cá nhân hóa</h1>
                        <p class="collection_desc">Tự hào tiên phong cùng bạn tạo nên dấu ấn cá nhân với dịch vụ
                            khắc lazer lấy ngay chỉ sau vài phút.</p>
                    </div>

                    <div class="product_collection-item">
                        <div class="collection_img-box">
                            <img src="./img/collection-3.webp" alt="" class="collection_img">
                        </div>
                        <h1 class="collection_heading">Trải nghiệm pha chế</h1>
                        <p class="collection_desc">Một trong những trải nghiệm được yêu thích tại Morra chính là
                            quá trình cùng pha chế nước hoa ngay tại cửa hàng.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="section" id="sale_product">
        <div class="container">
            <h1 class="section_heading">ƯU ĐÃI</h1>
            <div class="product_list">
                <?php
                $limit = 4;
                $sql = random_product($limit);
                $rows_random = pdo_query($sql);
                foreach ($rows_random as $row_random) {
                    extract($row_random);
                ?>
                    <div class="product_item">
                        <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_img-box sale30-important">
                            <img src="../admin/modules/quanlyproduct/uploads/<?= $path_image ?>" alt="" class="product_img-1">
                            <img src="../admin/modules/quanlyproduct/uploads/<?= $path_hover ?>" alt="" class="product_img-2">
                        </a>
                        <a href="product.php?menu=chitietsanpham&id=<?= $id_product ?>" class="product_title"><?= $name_product ?></a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin"><?= str_replace(',', '.', number_format($current_price)) . 'đ'; ?></span>
                            <span class="product_price-old"><?= str_replace(',', '.', number_format($origin_price)) . 'đ'; ?></span>
                        </p>
                    </div>
                <?php } ?>
            </div>

            <div class="collection_view-more">
                <a href="product.php?menu=sanpham&id=1" class="button collection_btn">XEM THÊM</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="gift_wrap">
            <a href="#" class="gift_item">
                <img src="./img/gift-1.webp" alt="" class="gift_img">
                <div class="gift_info">
                    <h2 class="gift_title">Dấu hương mới</h2>
                    <h1 class="gift_heading">2023</h1>
                    <p>
                        <span class="button">XEM THÊM</span>
                    </p>
                </div>
            </a>

            <a href="#" class="gift_item">
                <img src="./img/gift-2.webp" alt="" class="gift_img">
                <div class="gift_info">
                    <h2 class="gift_title">Bộ sưu tập</h2>
                    <h1 class="gift_heading">SỮA TẮM NƯỚC HOA</h1>
                    <p>
                        <span class="button">XEM THÊM</span>
                    </p>
                </div>
            </a>

            <a href="#" class="gift_item">
                <img src="./img/gift-3.webp" alt="" class="gift_img">
                <div class="gift_info">
                    <h2 class="gift_title">Set quà tặng</h2>
                    <h1 class="gift_heading">NƯỚC HOA</h1>
                    <p>
                        <span class="button">XEM THÊM</span>
                    </p>
                </div>
            </a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="product_new">
                <h1 class="section_heading">DẤU HƯƠNG 2023</h1>
                <div class="product_new-wrap pt-50">
                    <a href="#" class="product_new-left">
                        <img src="./img/product-new.jpg" alt="" class="product_new-img">
                    </a>
                    <div class="product_new-right">
                        <img src="./img/product-new-2.png" alt="" class="product_new-img hi">
                        <a href="#" class="product_title">Nước hoa November Special</a>
                        <p class="product_price-wrap">
                            <span class="product_price-origin">351,000đ</span>
                            <span class="product_price-old">390,000đ</span>
                        </p>
                        <a href="#" class="button">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section product_posts">
        <div class="container">
            <h1 class="section_heading">BÀI VIẾT MỚI NHẤT</h1>
            <div class="product_posts-wrap pt-50">
                <div class="product_posts-item">
                    <a href="#"><img src="./img/posts-new-1.png" alt="" class="product_posts-img"></a>
                    <p class="product_posts-date">Thứ Tư 01,11,2023</p>
                    <a href="#" class="product_posts-heading">Chọn nước hoa theo phong cách (P2)</a>
                    <p class="product_posts-desc">Ở Phần 2 - Chọn nước hoa theo phong cách, nhà Morra mang đến
                        bạn những gợi ý về hương thơm mà những người yêu thích và theo đuổi Sporty...</p>
                </div>

                <div class="product_posts-item">
                    <a href="#"><img src="./img/posts-new-2.webp" alt="" class="product_posts-img"></a>
                    <p class="product_posts-date">Thứ Ba 31,10,2023</p>
                    <a href="#" class="product_posts-heading">Chọn nước hoa theo phong cách (P1)</a>
                    <p class="product_posts-desc">Theo nghiên cứu của các Chuyên gia, 75% cảm xúc của con người
                        đến từ những mùi hương mà họ đã từng ngửi thấy. Đặc biệt, khả năng lưu lại...</p>
                </div>

                <div class="product_posts-item">
                    <a href="#"><img src="./img/posts-new-3.webp" alt="" class="product_posts-img"></a>
                    <p class="product_posts-date">Thứ Ba 19,09,2023</p>
                    <a href="#" class="product_posts-heading">Đồng hành cùng Nhịp Cầu Đầu Tư tại chuỗi sự kiện
                        Đánh dấu
                        20 năm</a>
                    <p class="product_posts-desc">Morra hân hạnh được đồng hành cùng Quý báo Nhịp Cầu Đầu Tư tại
                        chuỗi sự kiện Lễ Vinh danh 50 Công ty Kinh doanh hiệu quả nhất Việt Nam,...</p>
                </div>
            </div>
        </div>
    </section>
    <section class="policy">
        <div class="container">
            <div class="policy_main">
                <div class="policy_item">
                    <img src="./img/policy-1.webp" alt="" class="policy_item-img">
                    <span class="policy_item-title">MUA SẮM THUẬN TIỆN</span>
                </div>

                <div class="policy_item">
                    <img src="./img/policy-2.webp" alt="" class="policy_item-img">
                    <span class="policy_item-title">ƯU ĐÃI THÀNH VIÊN</span>
                </div>

                <div class="policy_item">
                    <img src="./img/policy-3.webp" alt="" class="policy_item-img">
                    <span class="policy_item-title">BẢO HÀNH CHU ĐÁO</span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
$sql_get_product = "SELECT * FROM product, category WHERE product.category_id = category.id_category ORDER BY id_product DESC";
$rows = pdo_query($sql_get_product);
?>

<div class="container mt-5">
    <h2>Danh sách sản phẩm</h2>

    <table class="table table-striped table-bordered table-responsive">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Hình ảnh hover</th>
                <th scope="col">Giá</th>
                <th scope="col">Giá gốc</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục navbar</th>
                <th scope="col">Description</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($rows as $row) {
                $i++;
                extract($row);
            ?>
                <tr class="text-center">
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $name_product; ?></td>
                    <td style="width: 200px;">
                        <img src="modules/quanlyproduct/uploads/<?= $path_image; ?>" alt="" class="img-fluid">
                    </td>
                    <td style="width: 200px;">
                        <img src="modules/quanlyproduct/uploads/<?= $path_hover; ?>" alt="" class="img-fluid" style="object-fit: cover;">
                    </td>
                    <td><?= number_format($current_price) . 'đ'; ?></td>
                    <td><?= number_format($origin_price) . 'đ'; ?></td>
                    <td><?= $quantity; ?></td>
                    <td><?= $category_name; ?></td>
                    <td>
                        <textarea name="" id="" cols="30" rows="7" disabled><?= $description; ?></textarea>
                    </td>
                    <td>
                        <?php
                        if ($status == 1) {
                            echo 'Kích hoạt';
                        } else {
                            echo 'Ẩn';
                        }
                        ?>
                    </td>
                    <td class="">
                        <a href="?action=quanlysanpham&query=edit&idproduct=<?= $id_product; ?>" class="nav-link btn btn-warning mb-2">EDIT</a>
                        <a href="modules/quanlyproduct/handle.php?idproduct=<?= $id_product; ?>" class="nav-link btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
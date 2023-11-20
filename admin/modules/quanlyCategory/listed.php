<?php
$sql_get_category = "SELECT * FROM category ORDER BY order_category ASC";
$rows = pdo_query($sql_get_category);
?>

<div class="container mt-5">
    <h2>Danh sách danh mục sản phẩm</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Thứ tự</th>
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
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $category_name; ?></td>
                    <td><?= $order_category; ?></td>
                    <td class="d-flex">
                        <a href="?action=quanlydanhmuc&query=edit&idcategory=<?= $id_category; ?>" class="nav-link btn btn-warning mx-2">EDIT</a>
                        <a href="modules/quanlycategory/handle.php?idcategory=<?= $id_category; ?>" class="nav-link btn btn-danger mx-2" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
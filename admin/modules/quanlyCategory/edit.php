<?php
$sql_edit_category = "SELECT * FROM category WHERE id_category='$_GET[idcategory]' LIMIT 1";
$rows = pdo_query($sql_edit_category);
?>

<div class="container">
    <h2>Sửa danh mục sản phẩm</h2>
    <form method="POST" id="categoryForm" action="modules/quanlycategory/handle.php?idcategory=<?= $_GET['idcategory']; ?>">
        <?php
        foreach ($rows as $row) {
            extract($row)
        ?>
            <div class="mb-3">
                <label for="categoryName" class="form-label">Tên danh mục:</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" required value="<?= $category_name; ?>">
            </div>
            <div class="mb-3">
                <label for="categoryNumber" class="form-label">Thứ tự danh mục:</label>
                <input type="text" class="form-control" id="categoryNumber" name="categoryNumber" required value="<?= $order_category; ?>">
            </div>
            <button type="submit" name="editcategory" class="btn btn-warning">Update</button>
        <?php } ?>
    </form>
</div>
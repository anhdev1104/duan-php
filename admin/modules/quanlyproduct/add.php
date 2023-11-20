<div class="container mt-3">
    <h2>Thêm sản phẩm</h2>
    <form method="POST" id="productForm" action="modules/quanlyproduct/handle.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="productName" name="productName" required>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Hình ảnh:</label>
            <input type="file" class="form-control" id="productImage" name="productImage" required>
        </div>
        <div class="mb-3">
            <label for="productImage2" class="form-label">Hình ảnh hover:</label>
            <input type="file" class="form-control" id="productImage2" name="productImage2" required>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Giá mới:</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice" required>
        </div>
        <div class="mb-3">
            <label for="productPriceOld" class="form-label">Giá gốc:</label>
            <input type="text" class="form-control" id="productPriceOld" name="productPriceOld" required>
        </div>
        <div class="mb-3">
            <label for="productQuantity" class="form-label">Số lượng:</label>
            <input type="text" class="form-control" id="productQuantity" name="productQuantity" required>
        </div>
        <div class="mb-3">
            <label for="productDesc" class="form-label">Nội dung:</label>
            <input type="text" class="form-control" id="productDesc" name="productDesc">
        </div>
        <div class="mb-3">
            <label for="productStatus" class="form-label">Danh mục navbar:</label>
            <select class="form-select" name="productCategory">
                <?php
                $sql_category = "SELECT * FROM category ORDER BY id_category ASC";
                $rows = pdo_query($sql_category);
                foreach ($rows as $row) {
                    extract($row);
                ?>
                    <option value="<?= $id_category; ?>"><?= $category_name; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="productStatus" class="form-label">Tình trạng:</label>
            <select class="form-select" name="productStatus">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <button type="submit" name="addproduct" class="btn btn-success">Add</button>
    </form>

</div>
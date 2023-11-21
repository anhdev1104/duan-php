<div class="container mt-3">
    <h2>Thêm danh mục sản phẩm</h2>
    <form method="POST" id="categoryForm" action="modules/quanlycategory/handle.php">
        <div class="mb-3">
            <label for="categoryName" class="form-label">Tên danh mục:</label>
            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
        </div>
        <div class="mb-3">
            <label for="categoryNumber" class="form-label">Thứ tự danh mục:</label>
            <input type="text" class="form-control" id="categoryNumber" name="categoryNumber" required>
        </div>
        <button type="submit" name="addcategory" class="btn btn-success">Add</button>
    </form>

</div>
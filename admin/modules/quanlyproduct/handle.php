<?php
include '../../../config/pdo.php';
include '../../../config/product.php';

$name_product = $_POST['productName'];
//handle Image
$image_product = $_FILES['productImage']['name'];
$image_product_tmp = $_FILES['productImage']['tmp_name'];
$image_product = time() . '_' . $image_product;

$image_product2 = $_FILES['productImage2']['name'];
$image_product2_tmp = $_FILES['productImage2']['tmp_name'];
$image_product2 = time() . '_' . $image_product2;

$price_product = $_POST['productPrice'];
$price2_product = $_POST['productPriceOld'];
$quantity_product = $_POST['productQuantity'];
$desc_product = $_POST['productDesc'];
$status_product = $_POST['productStatus'];
$category_product = $_POST['productCategory'];

if (isset($_POST['addproduct'])) {
    //add
    $sql_add_product = insert_product($name_product, $image_product, $image_product2, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product);
    pdo_query($sql_add_product);
    move_uploaded_file($image_product_tmp, 'uploads/' . $image_product);
    move_uploaded_file($image_product2_tmp, 'uploads/' . $image_product2);
    view_product();
} else if (isset($_POST['editproduct'])) {
    //edit
    $sql = "SELECT * FROM product WHERE id_product = '$_GET[idproduct]' LIMIT 1";
    $row = pdo_query_one($sql);
    if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        unlink('uploads/' . $row['path_image']); // Xóa ảnh cũ
        move_uploaded_file($image_product_tmp, 'uploads/' . $image_product);
        $sql_update_product = "UPDATE product SET name_product='$name_product', path_image='$image_product', current_price='$price_product', origin_price='$price2_product', quantity='$quantity_product', description='$desc_product', status='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    } else {
        // Giữ ảnh cũ
        $image_product = $row['path_image'];
        $sql_update_product = "UPDATE product SET name_product='$name_product', current_price='$price_product', origin_price='$price2_product', quantity='$quantity_product', description='$desc_product', status='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    }

    // Kiểm tra và xử lý ảnh 2
    if (isset($_FILES['productImage2']) && $_FILES['productImage2']['error'] === UPLOAD_ERR_OK) {
        unlink('uploads/' . $row['path_hover']); // Xóa ảnh cũ
        move_uploaded_file($image_product2_tmp, 'uploads/' . $image_product2);
        $sql_update_product = "UPDATE product SET name_product='$name_product', path_hover='$image_product2', current_price='$price_product', origin_price='$price2_product', quantity='$quantity_product', description='$desc_product', status='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    }

    pdo_execute($sql_update_product);
    view_product();
} else {
    // delete
    $id = $_GET['idproduct'];
    $sql = "SELECT * FROM product WHERE id_product = '$id' LIMIT 1";
    $query = pdo_query($sql);
    foreach ($query as $row) {
        unlink('./uploads/' . $row['path_image']);
        unlink('./uploads/' . $row['path_hover']);
    }
    $sql_delete = "DELETE FROM product WHERE id_product='$id'";
    pdo_execute($sql_delete);
    view_product();
}

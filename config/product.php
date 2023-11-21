<?php
function select_product()
{
    return "SELECT * FROM product, category WHERE product.category_id = category.id_category ORDER BY id_product DESC";
}

function random_product()
{
    return "SELECT * FROM product ORDER BY RAND() LIMIT 4";
}

function insert_product($name_product, $image_product, $image_product2, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product)
{
    return "INSERT INTO product(name_product, path_image, path_hover, current_price, origin_price, quantity, description, status, category_id) VALUE ('$name_product', '$image_product', '$image_product2', '$price_product', '$price2_product', '$quantity_product', '$desc_product', '$status_product', '$category_product')";
}


function view_product()
{
    header('Location: ../../index.php?action=quanlysanpham&query=add');
}

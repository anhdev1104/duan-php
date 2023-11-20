<?php
function insert_image($path_image, $path_hover, $other_image, $product_id)
{
    return "INSERT INTO image_product(path_image, path_hover, other_image, product_id) VALUE('$path_image', '$path_hover', '$other_image', '$product_id')";
}

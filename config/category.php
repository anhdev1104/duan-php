<?php
function insert_category($name_category, $order_category)
{
    $sql_add_category = "INSERT INTO category(category_name, order_category) VALUES ('$name_category', '$order_category')";
    pdo_execute($sql_add_category);
}

function edit_category($name_category, $order_category, $id)
{
    $sql_update_category = "UPDATE category SET category_name='$name_category', order_category='$order_category' WHERE id_category='$id'";
    pdo_execute($sql_update_category);
}

function delete_category($id)
{
    $sql_delete = "DELETE FROM category WHERE id_category='$id'";
    pdo_execute($sql_delete);
}

function view_category()
{
    header('Location: ../../index.php?action=quanlydanhmuc&query=add');
}

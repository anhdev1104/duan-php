<?php
include('../../../config/pdo.php');
include('../../../config/category.php');

$name_category = $_POST['categoryName'];
$order_category = $_POST['categoryNumber'];

if (isset($_POST['addcategory'])) {
    insert_category($name_category, $order_category);
    view_category();
} else if (isset($_POST['editcategory'])) {
    edit_category($name_category, $order_category, $_GET['idcategory']);
    view_category();
} else {
    // delete
    delete_category($_GET['idcategory']);
    view_category();
}

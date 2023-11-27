<?php
$id = $_GET['iduser'];
$sql_delete = "DELETE FROM customer WHERE id_customer = '$id'";
pdo_execute($sql_delete);
header('Location: index.php?action=quanlykhachhang&query=lietke');

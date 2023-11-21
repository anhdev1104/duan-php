<?php
    $host="localhost";
    $username= "root";
    $password="";
    $database="perfume_shopdb";

    $conn=mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn,'utf8');
    if(!$conn)
    {
        die("kết nối thất bại ". mysqli_connect_errno());
    }
    else{
        echo" Kết nối thành công";
    }



?>
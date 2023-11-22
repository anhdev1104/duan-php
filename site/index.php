<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/res.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>
    <div id="root">
        <?php
        include '../config/pdo.php';

        include './layout/home/header.php';
        include './layout/home/main.php';
        include './layout/home/footer.php';
        ?>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>
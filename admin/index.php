<?php
// session_start();

// if (!isset($_SESSION['login'])) {
//     header('Location: login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MORRA Admin</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        td {
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <?php
    include('../config/pdo.php');
    include('../admin/modules/menu.php');
    include('../admin/modules/main.php');
    ?>


    <!-- Link to Bootstrap JS (required for the mobile toggle functionality) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
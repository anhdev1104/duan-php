<?php
session_start();
include('../config/pdo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_user = $_POST['fullname'];
    $email_user = $_POST['email'];
    $phone_user = $_POST['phonenumber'];
    $address_user = $_POST['address'];
    $password_user = md5($_POST['password']);

    $sql_register = "INSERT INTO customer(fullname, email, password, phone_number, address) VALUE ('$name_user', '$email_user', '$password_user', '$phone_user', '$address_user')";
    $query_register = pdo_execute($sql_register);

    if ($query_register) {
        $_SESSION['register'] = $name_user;
        $_SESSION['id_user'] = pdo_get_connection()->lastInsertId();
        header('Location: ../site/index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../site/css/base.css">
    <link rel="stylesheet" href="../site/css/style.css">
    <link rel="stylesheet" href="../site/css/responsive.css">
    <link rel="stylesheet" href="../site/css/contact.css">
    <link rel="stylesheet" href="../site/css/login.css">
</head>

<body>
    <div class="root">

        <main>
            <section class="login_main-wrapper">
                <div class="header_account">
                    <div class="login_header">
                        <h1>Tạo tài khoản</h1>
                    </div>
                </div>

                <div class="login_main_right">
                    <div class="login_form_reminders">
                        <form action="" id="form-1" method="POST">
                            <div class="login_form_name form-group">
                                <input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
                                <span class="form-message"></span>
                            </div>
                            <div class="login_form_name form-group">
                                <input type="email" name="email" id="email" placeholder="Email đăng nhập">
                                <span class="form-message"></span>
                            </div>
                            <div class="login_form_name form-group">
                                <input type="tel" name="phonenumber" id="phonenumber" placeholder="Số điện thoại">
                                <span class="form-message"></span>
                            </div>
                            <div class="login_form_name form-group">
                                <input type="text" name="address" id="address" placeholder="Địa chỉ">
                                <span class="form-message"></span>
                            </div>
                            <div class="login_form_name form-group">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu tối thiểu 8 kí tự">
                                <span class="form-message"></span>
                            </div>
                            <div class="login_form_name form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu">
                                <span class="form-message"></span>
                            </div>
                            <p class="contact_protect">This site is protected by reCAPTCHA and the <span>Google
                                    Privacy
                                    Policy</span> and <span>Terms of Service</span> apply.</p>
                            <div class="action_account_custommer">
                                <button class="button_login contact_btn" name="register">ĐĂNG KÝ </button>
                            </div>
                            <a href="../site/index.php" class="register_come_back">
                                <i class="fa-solid fa-arrow-left-long"></i>
                                Quay lại trang chủ
                            </a>
                        </form>
                    </div>
                </div>
            </section>
        </main>

    </div>
    <script src="../site/js/app.js"></script>
    <script src="../site/js/validateForm.js"></script>
    <script>
        // Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn !'),
                Validator.isRequired('#email'),
                Validator.isEmail('#email'),
                Validator.isRequired('#phonenumber', 'Số điện thoại không xác định'),
                Validator.isRequired('#address', 'Vui lòng nhập địa chỉ của bạn !'),
                Validator.minLength('#password', 8),
                Validator.isConfirmed('#password_confirmation', function() {
                    return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu nhập lại không chính xác !'),
            ],
        });
    </script>
</body>

</html>
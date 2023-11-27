<?php
session_start();
include('../config/pdo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'];
    $password = md5($_POST['password']);

    // Kiểm tra thông tin đăng nhập trong bảng 'admin'
    $sql = "SELECT * FROM admin WHERE email = '$username' AND password = '$password' LIMIT 1";
    $account = pdo_query_one($sql);
    // Kiểm tra thông tin đăng nhập trong bảng 'user'
    $user_sql = "SELECT * FROM customer WHERE email = '$username' AND password = '$password' LIMIT 1";
    $user_account = pdo_query_one($user_sql);

    if ($account) {
        $_SESSION['login'] = $account;
        header('Location: index.php');
    } else if ($user_account) {
        $_SESSION['login_user'] = $user_account['fullname'];
        $_SESSION['id_user'] = $user_account['id_user'];
        header('Location: ../site/index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
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
                        <h1>Đăng nhập</h1>
                    </div>
                </div>

                <div class="login_main_right mt-login">
                    <div class="login_form_reminders">
                        <form action="" id="form-2" method="POST">
                            <div class="login_layout_account" id="loginSection">
                                <div class="login_form_name form-group">
                                    <input type="email" id="email" name="email" placeholder="Email đăng nhập">
                                    <span class="form-message"></span>
                                </div>
                                <div class="login_form_name form-group">
                                    <input type="password" id="password" name="password" placeholder="Mật khẩu">
                                    <span class="form-message"></span>
                                </div>
                                <p class="contact_protect">This site is protected by reCAPTCHA and the <span>Google
                                        Privacy
                                        Policy</span> and <span>Terms of Service</span> apply.</p>
                                <div class="action_account_custommer">
                                    <button class="button_login contact_btn" type="submit" name="login">ĐĂNG NHẬP</button>
                                    <div>
                                        <a href="#" id="quenMatKhauLink">Quên mật khẩu?</a>
                                        hoặc
                                        <a href="./register.php">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recove_password">
                                <div id="emailInputDiv" style="display: none;" class="login_form_name">
                                    <h2>Phục hồi mật khẩu</h2><br>
                                    <label for="email"></label>
                                    <input type="email" id="email" placeholder="Nhập địa chỉ email">
                                    <p class="contact_protect">This site is protected by reCAPTCHA and the <span>Google
                                            Privacy
                                            Policy</span> and <span>Terms of Service</span> apply.</p>
                                    <button id="emailSubmitButton" class="button_login contact_btn">Gửi</button>
                                </div>
                                <div id="passwordInputDiv" style="display: none;" class="login_form_name">
                                    <h2>Phục hồi mật khẩu</h2><br>
                                    <label for="password"></label>
                                    <input type="password" id="password" placeholder="Nhập mật khẩu mới">
                                    <p class="contact_protect">This site is protected by reCAPTCHA and the <span>Google
                                            Privacy
                                            Policy</span> and <span>Terms of Service</span> apply.</p>
                                    <button id="guiYeuCauButton" name="" class="button_login contact_btn">Gửi yêu cầu</button>
                                </div>
                                <a href="#" id="huyButton" style="text-decoration: none;color: #747474;display: none;">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="toast">
                    <!-- render js -->
                </div>
            </section>
        </main>
    </div>
    <script src="../site/js/validateForm.js"></script>
    <script src="../site/js/app.js"></script>

    <script>
        Validator({
            form: '#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', 8),
            ]
        });
    </script>

</body>

</html>
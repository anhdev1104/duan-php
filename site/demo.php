<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #338dbc;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 20px 24px;
            font-size: 14px;
            font-weight: 500;
        }

        .error {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h2>Morra Việt Nam</h2>
    <form id="contactForm">
        <input type="text" id="fullName" name="fullName" required placeholder="Họ và tên">
        <div id="fullNameError" class="error"></div>

        <input type="email" id="email" name="email" required placeholder="Email">
        <div id="emailError" class="error"></div>

        <input type="tel" id="phone" name="phone" required placeholder="Số điện thoại">
        <div id="phoneError" class="error"></div>

        <input type="text" id="address" name="address" required placeholder="Địa chỉ">
        <div id="addressError" class="error"></div>

        <select id="province" name="province" required>
            <option value="" disabled selected>-- Chọn tỉnh/thành phố --</option>
            <option value="hochiminh">Hồ Chí Minh</option>
            <option value="hanoi">Hà Nội</option>
            <option value="hanoi">Đà Nẵng</option>
            <option value="hanoi">An Giang</option>
            <option value="hanoi">Bà Rịa - Vũng Tàu</option>
            <option value="hanoi">Bình Dương</option>
            <option value="hanoi">Bình Dương</option>
            <option value="hanoi">Bình Phước</option>
            <option value="hanoi">Bình Thuận</option>
            <option value="hanoi">Bình Định</option>
            <option value="hanoi">Bạc Liêu</option>
            <option value="hanoi">Bắc Giang</option>
            <option value="hanoi">Bắc Kạn</option>
            <!-- Thêm các tỉnh/thành phố khác vào đây -->
        </select>
        <div id="provinceError" class="error"></div>
        <button type="button" onclick="submitForm()">Tiếp tục đến phương thức thanh</button>
        <div id="successMessage" class="success"></div>
    </form>

    <script>
        function submitForm() {
            var fullName = document.getElementById('fullName').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var address = document.getElementById('address').value;
            var province = document.getElementById('province').value;

            // Kiểm tra xem các trường có được nhập không
            if (fullName === '') {
                document.getElementById('fullNameError').innerText = 'Vui lòng nhập họ tên';
            } else {
                document.getElementById('fullNameError').innerText = '';
            }

            if (email === '') {
                document.getElementById('emailError').innerText = 'Email không được bỏ trống';
            } else {
                document.getElementById('emailError').innerText = '';
            }

            if (phone === '') {
                document.getElementById('phoneError').innerText = 'Số điện thoại không được trống';
            } else {
                document.getElementById('phoneError').innerText = '';
            }

            if (address === '') {
                document.getElementById('addressError').innerText = 'Địa chỉ không được bỏ trống';
            } else {
                document.getElementById('addressError').innerText = '';
            }

            // Kiểm tra xem trường tỉnh/thành phố đã được chọn chưa
            if (province === '') {
                document.getElementById('provinceError').innerText = 'Vui lòng chọn tỉnh/thành phố';
            } else {
                document.getElementById('provinceError').innerText = '';
            }

            // Kiểm tra xem tất cả các trường đã được nhập chưa
            if (fullName !== '' && email !== '' && phone !== '' && address !== '' && province !== '') {
                // Nếu tất cả các trường đã được nhập, hiển thị thông báo thành công
                document.getElementById('successMessage').innerText = 'Đã thực hiện!';
            }
        }
    </script>
</body>
</html>

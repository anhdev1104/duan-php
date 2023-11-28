<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./css/pay.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="pay">
        <div class="pay_main">
            <div class="pay_header">
                <h1>Morra Việt Nam</h1>
                <ul>
                    <li><a href="">Giỏ hàng <i class="fa-solid fa-angle-right"></i></a></li>
                    <li><a href="">Thông tin giao hàng <i class="fa-solid fa-angle-right"></i></a></li>
                    <li><a href="">Phương thức thanh toán</a></li>
                </ul>
            </div>
            <div class="pay_infomation_main1">
                <div class="pay_infomation_main">
                    <div class="pay_info">
                        <h2>Thông tin giao hàng</h2>
                        <div class="pay_loged">
                            <div class="pay_img">
                                <img src="" alt="">
                            </div>
                            <div class="pay_name">
                                <p>nguyenhau (thehau7777777@gmail.com) <br>
                                    <a href="">Đăng Xuất</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_customer_information">
                        <select name="" class="pay_infomation">
                            <option value="">Địa chỉ đã lưu trữ</option>
                            <option value="">hau</option>
                        </select>
                        <div class="pay_infomation">
                            <input type="text" name="" id="" class="field_input" placeholder="Họ và tên">
                        </div>
                        <div class="pay_infomation">
                            <input type="tel" name="" id="" class="field_input" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <form>

                        <div class="pay_section_content">
                            <div class="pay_delivery">
                                <label for="" class="pay_radio_label">
                                    <div class="pay_radio">
                                        <input type="radio" name="" id="" class="input_radio">
                                    </div>
                                    <span>Giao tận nơi</span>
                                </label>

                                <div class="pay_delivery_address">
                                    <div class="pay_infomation">
                                        <input type="address" class="field_input" placeholder="dia chi">
                                    </div>
                                    <div class="province_city">
                                        <select id="province" class="mr" name="province" required>
                                            <option value="" disabled selected>Tỉnh / Thành</option>
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
                                        </select>
                                        <select name="" id="" class="mr">
                                            <option value="">Quận / huyện</option>
                                        </select>
                                        <select name="" id="" class="mr">
                                            <option value="">Phường / Xã</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="" class="pay_radio_label2">
                                    <div class="pay_radio">
                                        <input type="radio" name="" id="" class="input_radio">
                                    </div>
                                    <span>Giao tận nơi</span>
                                </label>
                            </div>

                        </div>
                        <div class="pay_payment_methods">
                            <div class="pay_name_logout">
                                <p><a href="">Đăng Xuất</a>
                                </p>
                            </div>
                            <button class="continue_payment_methods" type="button" onclick="submitForm()">Tiếp tục đến phương thức thanh toán</button>
                        </div>

                    </form>
                </div>
            </div>

            <footer class="footer">
                <p>Powered by Haravan</p>
            </footer>
        </div>


        <div class="shipping_details">
            <div class="pay_detail_produce">
                <div class="pay_produce_thumbnail">
                    <div class="pay_img_price">
                        <img src="" alt="">
                    </div>
                    <div class="pay_name">
                        <p>Nước hoa No. 32<br>
                            10ml
                        </p>
                    </div>
                </div>
                <div class="pay_price">
                    <p>312,000₫</p>
                </div>
            </div>
            <div class="discount_code">
                <div class="discount_code_details">
                    <input class="pay_infomation2" type="text" name="" id="" placeholder="Mã giảm giá">
                </div>
                <div class="btn_use">
                    <button class="continue_payment_methods2" type="submit">Sử dụng</button>
                </div>

            </div>
            <div class="discount_code">
                <tbody>
                    <tr class="total_line td">
                        <td>Tạm tính</td>
                        <td>312,000₫</td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển</td>
                        <td><span>-</span></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Tổng cộng</td>
                        <td>VND 312,000₫</td>
                    </tr>
                </tfoot>
            </div>
        </div>
    </div>
</body>

</html>
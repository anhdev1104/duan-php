// scroll header
function debounceFn(func, wait, immediate) {
    let timeout;
    return function() {
        let context = this,
            args = arguments;
        let later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        let callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

window.addEventListener(
    'scroll',
    debounceFn(function() {
        const headerFixed = document.querySelector('.header-fixed');
        const scrollY = window.scrollY;
        if (scrollY >= 300) {
            headerFixed && headerFixed.classList.add('is-fixed');
        } else {
            headerFixed && headerFixed.classList.remove('is-fixed');
        }
    }, 50)
);
// scroll header
function debounceFn(func, wait, immediate) {
    let timeout;
    return function() {
        let context = this,
            args = arguments;
        let later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        let callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

window.addEventListener(
    'scroll',
    debounceFn(function() {
        const headerFixed = document.querySelector('.header-fixed');
        const scrollY = window.scrollY;
        if (scrollY >= 300) {
            headerFixed && headerFixed.classList.add('is-fixed');
        } else {
            headerFixed && headerFixed.classList.remove('is-fixed');
        }
    }, 50)
);


/* js recove password */

document.getElementById("quenMatKhauLink").addEventListener("click", function(event) {
    event.preventDefault(); // Ngăn chặn liên kết mặc định chuyển hướng

    // Ẩn phần đăng nhập
    var loginSection = document.getElementById("loginSection");
    loginSection.style.display = "none";

    // Hiển thị ô nhập email
    var emailInputDiv = document.getElementById("emailInputDiv");
    emailInputDiv.style.display = "block";

    // Hiển thị nút "Hủy"
    var huyButton = document.getElementById("huyButton");
    huyButton.style.display = "block";

    // Ẩn liên kết "Quên mật khẩu"
    this.style.display = "none";
});

document.getElementById("huyButton").addEventListener("click", function(event) {
    event.preventDefault();

    // Ẩn ô nhập email
    var emailInputDiv = document.getElementById("emailInputDiv");
    emailInputDiv.style.display = "none";

    // Ẩn ô nhập mật khẩu
    var passwordInputDiv = document.getElementById("passwordInputDiv");
    passwordInputDiv.style.display = "none";

    // Ẩn nút "Hủy"
    this.style.display = "none";

    // Hiển thị liên kết "Quên mật khẩu" lại
    var loginSection = document.getElementById("loginSection");
    loginSection.style.display = "block";
    var quenMatKhauLink = document.getElementById("quenMatKhauLink");
    quenMatKhauLink.style.display = "block";
});

document.getElementById("emailSubmitButton").addEventListener("click", function(event) {
    event.preventDefault();

    // Kiểm tra xem email đã được nhập
    var email = document.getElementById("email").value;
    if (email.trim() !== "") {
        // Hiển thị ô nhập mật khẩu
        var passwordInputDiv = document.getElementById("passwordInputDiv");
        passwordInputDiv.style.display = "block";
    } else {
        alert("Vui lòng nhập địa chỉ email trước.");
    }
    emailInputDiv.style.display = "none";
});

document.getElementById("guiYeuCauButton").addEventListener("click", function(event) {
    event.preventDefault();

    // Lấy giá trị email và mật khẩu
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email.trim() === "" || password.trim() === "") {
        alert("Vui lòng nhập đầy đủ email và mật khẩu trước khi gửi yêu cầu.");
    } else {
        // Thực hiện xử lý gửi yêu cầu ở đây
        alert("Yêu cầu đã được gửi đi.");
    }
});
document.getElementById("emailSubmitButton").addEventListener("click", function(event) {
    event.preventDefault();

    // Kiểm tra xem email đã được nhập
    var email = document.getElementById("email").value;
    if (email.trim() !== "") {
        // Hiển thị ô nhập mật khẩu
        var passwordInputDiv = document.getElementById("passwordInputDiv");
        passwordInputDiv.style.display = "block";
    } else {
        alert("Vui lòng nhập địa chỉ email trước.");
    }
});
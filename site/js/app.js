// slider
window.addEventListener('load', () => {
    const sliderMain = document.querySelector('.slider_main');
    const sliderItems = document.querySelectorAll('.header_banner-block');
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const sliderLenght = sliderItems.length;
    let index = 0;

    // Tự động chuyển slide sau mỗi 3 giây
    function autoSlide() {
        index = (index + 1) % sliderLenght;
        sliderMain.style.transform = `translateX(-${index * sliderItemWidth}px)`;
    }

    setInterval(autoSlide, 3000);
});

// scroll header
function debounceFn(func, wait, immediate) {
    let timeout;
    return function () {
        let context = this,
            args = arguments;
        let later = function () {
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
    debounceFn(function () {
        const headerFixed = document.querySelector('.header-fixed');
        const scrollY = window.scrollY;
        if (scrollY >= 300) {
            headerFixed && headerFixed.classList.add('is-fixed');
        } else {
            headerFixed && headerFixed.classList.remove('is-fixed');
        }
    }, 50)
);

window.addEventListener('load', () => {
    // btn size product details
    const btnSizes = document.querySelectorAll('.details_size');
    btnSizes.forEach((btnSize) => {
        btnSize.addEventListener('click', function () {
            [...btnSizes].forEach((item) => item.classList.remove('isActiveSize'));
            this.classList.toggle('isActiveSize');
        });
    });

    // active src
    const images = document.querySelectorAll('.details-item-img');
    const srcImage = document.querySelector('#srcImage');
    images.forEach((image) =>
        image.addEventListener('click', function () {
            [...images].forEach((image) => image.classList.remove('active-img'));
            this.classList.toggle('active-img');
            srcImage.src = this.querySelector('img').src;
        })
    );

    // scroll product related
    const btnPrev = document.querySelector('.product_related-prev');
    const btnNext = document.querySelector('.product_related-next');
    const listRelated = document.querySelector('.product_related-main');
    const productItem = document.querySelector('.product_related-main .product_item');
    const productItemWidth = productItem.offsetWidth;

    let debounceTimeout;

    function handleNextClick() {
        if (debounceTimeout) {
            clearTimeout(debounceTimeout);
        }

        debounceTimeout = setTimeout(() => {
            listRelated.scrollLeft += productItemWidth;
        }, 200);
    }
    btnNext.addEventListener('click', handleNextClick);

    function handlePrevClick() {
        if (debounceTimeout) {
            clearTimeout(debounceTimeout);
        }

        debounceTimeout = setTimeout(() => {
            listRelated.scrollLeft -= productItemWidth;
        }, 200);
    }
    btnPrev.addEventListener('click', handlePrevClick);

    listRelated.addEventListener('wheel', function (e) {
        console.log(this);
        e.preventDefault();
        const delta = e.deltaY * 3.3;
        this.scrollLeft += delta;
    });
});

// Navbar - menu
window.addEventListener('load', () => {
    const navbarIcons = document.querySelectorAll('.navbar-icon');
    const navbarClose = document.querySelector('.navbar_head-close');
    const overLay = document.querySelector('.over-lay');
    const navbarMenu = document.querySelector('.navbar_menu');

    navbarIcons.forEach((navbarIcon) =>
        navbarIcon.addEventListener('click', () => {
            overLay.classList.add('isActiveOverlay');
            navbarMenu.classList.add('isActiveNavbar');
        })
    );

    overLay.addEventListener('click', () => {
        overLay.classList.remove('isActiveOverlay');
        navbarMenu.classList.remove('isActiveNavbar');
    });

    navbarClose.addEventListener('click', () => {
        overLay.classList.remove('isActiveOverlay');
        navbarMenu.classList.remove('isActiveNavbar');
    });
});

// Navbar - search
window.addEventListener('load', () => {
    const searchIcons = document.querySelectorAll('.search');
    const searchClose = document.querySelector('.navbar_head-close--search');
    const overLay = document.querySelector('.over-lay');
    const navbarSearch = document.querySelector('.navbar_search');

    searchIcons.forEach((navbarIcon) =>
        navbarIcon.addEventListener('click', () => {
            overLay.classList.add('isActiveOverlay');
            navbarSearch.classList.add('isActiveNavbar');
        })
    );

    overLay.addEventListener('click', () => {
        overLay.classList.remove('isActiveOverlay');
        navbarSearch.classList.remove('isActiveNavbar');
    });

    searchClose.addEventListener('click', () => {
        overLay.classList.remove('isActiveOverlay');
        navbarSearch.classList.remove('isActiveNavbar');
    });
});

// check empty value search
window.addEventListener('load', () => {
    const formSearch = document.querySelector('.search-form');
    const inputSearch = document.querySelector('[name="search-item"]');

    formSearch.addEventListener('submit', (e) => {
        if (inputSearch.value.trim() === '') {
            alert('Vui lòng nhập từ khoá tìm kiếm !');
            e.preventDefault();
        }
    });
});

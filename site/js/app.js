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
        console.log(scrollY);
        if (scrollY >= 500) {
            headerFixed && headerFixed.classList.add('is-fixed');
        } else {
            headerFixed && headerFixed.classList.remove('is-fixed');
        }
    }, 50)
);

(function() {
    let menu = function() {
        const headerClass = document.getElementsByTagName('header')[0].classList;
        const classVerify = 'header-close';
        headerClass.contains(classVerify) ? headerClass.remove(classVerify) : headerClass.add(classVerify);
    };

    let loaderWithHash = function() {
        if (location.pathname !== '/') {
            loader();
        }

    };
    let loaderWithOutHash = function() {
        loader();

    };
    let loader = function() {
        const loaderClass = document.getElementsByClassName('loader')[0].classList;
        const classVerify = 'd-none';
        if (loaderClass.contains(classVerify)) loaderClass.remove(classVerify);
    }
})();
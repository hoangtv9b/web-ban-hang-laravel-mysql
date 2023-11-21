const showMenuBtn = document.querySelector('.btn-show-menu');
const hiddenMenuBtn = document.querySelector('.btn-hidden-menu');
const menuResponsive = document.querySelector('.menu-responsive');
const hiddenMenuOut = document.querySelector('.hidden-menu');
showMenuBtn.addEventListener('click', () =>{
    menuResponsive.style.animation = "show 0.3s ease-out forwards";
    hiddenMenuOut.style.display = "block";
});
hiddenMenuBtn.addEventListener('click', () =>{
    menuResponsive.style.animation = "hidden 0.3s ease-out forwards";
    hiddenMenuOut.style.display = "none";
});
hiddenMenuOut.addEventListener('click', () => {
    menuResponsive.style.animation = "hidden 0.3s ease-out forwards";
    hiddenMenuOut.style.display = "none";
});
var headerNavbar = document.querySelector('.navbar-header');
$(document).on("mousewheel", function(event) {
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        headerNavbar.style.animation = "slip-down 0.5s ease-out forwards";
    }else{
        headerNavbar.style.animation = "slide-up 0.5s ease-out forwards";
    }
})

// quantity product
const minusBtns = document.querySelectorAll('.minus-quantity');
const plusBtns = document.querySelectorAll('.plus-quantity');
const quantityInputs = document.querySelectorAll('.input-text-quantity');

// Lặp qua các phần tử và gắn kết sự kiện
for (let i = 0; i < minusBtns.length; i++) {
    minusBtns[i].addEventListener('click', function() {
        let quantity = parseInt(quantityInputs[i].value);

        if (quantity > 1) {
            quantity -= 1;
        }

        quantityInputs[i].value = quantity;
    });

    plusBtns[i].addEventListener('click', function() {
        let quantity = parseInt(quantityInputs[i].value);

        quantity += 1;

        quantityInputs[i].value = quantity;
    });
}

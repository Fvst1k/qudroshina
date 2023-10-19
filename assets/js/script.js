$(document).ready(function () {
    $('.employees__slider').slick({
        dots: true,
        infinite: true,
        centerMode: true,
        centerPadding: "0",
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        speed: 1000,
        draggable: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 992, settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

$(document).ready(function () {
    $('.reviews__slider').slick({
        dots: false,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: true,
        swipe: false,
        prevArrow: `<button type="button" class="slick-prev slider-arrow-prev">
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
  <path d="M17.5 32.0834C25.5541 32.0834 32.0833 25.5542 32.0833 17.5001C32.0833 9.44593 25.5541 2.91675 17.5 2.91675C9.44581 2.91675 2.91663 9.44593 2.91663 17.5001C2.91663 25.5542 9.44581 32.0834 17.5 32.0834Z" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M17.5 11.6667L11.6666 17.5001L17.5 23.3334" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M23.3333 17.5H11.6666" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>`,
        nextArrow: `<button type="button" class="slick-next slider-arrow-next">
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
  <path d="M17.5001 32.0834C25.5542 32.0834 32.0834 25.5542 32.0834 17.5001C32.0834 9.44593 25.5542 2.91675 17.5001 2.91675C9.44593 2.91675 2.91675 9.44593 2.91675 17.5001C2.91675 25.5542 9.44593 32.0834 17.5001 32.0834Z" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M17.5 23.3334L23.3333 17.5001L17.5 11.6667" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M11.6667 17.5H23.3334" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </button>`,
        responsive: [
            {
                breakpoint: 991, settings: {
                    slidesToShow: 1,
                    arrows: false,
                    swipe: true
                }
            }
        ]


    });
});
$(document).ready(function () {
    $('.discounts__slider').slick({
        dots: false,
        infinite: true,
        centerMode: true,
        centerPadding: "0",
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        speed: 1000,
        draggable: false,
        arrows: true,
        prevArrow: `<button type="button" class="slick-prev slider-arrow-prev">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <path d="M18.75 22.5L11.25 15L18.75 7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>`,
        nextArrow: `<button type="button" class="slick-next slider-arrow-next">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <path d="M11.25 22.5L18.75 15L11.25 7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </button>`,
        responsive: [
            {
                breakpoint: 992, settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});


let select = function () {
    let selectHeader = document.querySelectorAll('.calculation__select-header');
    let selectItem = document.querySelectorAll('.calculation__select-item');
    selectHeader.forEach(item => {
        item.addEventListener('click', selectToggle)
    });
    selectItem.forEach(item => {
        item.addEventListener('click', selectChoose)
    })

    function selectToggle() {
        this.parentElement.classList.toggle('select-active');
    }

    function selectChoose() {
        let text = this.innerText;
        let select = this.closest('.calculation__select');
        let currentText = select.querySelector('.calculation__select-current');
        currentText.innerText = text;
        select.classList.remove('select-active');
    }
};
select();
mobileMenu()

function mobileMenu() {

    document.querySelector('.header__mobile-btn').addEventListener("click", evt => {
        document.querySelector('.header__mobile-btn').classList.toggle('active')
        document.querySelector('.body').classList.toggle('active')
        document.querySelector('.header__bg').classList.toggle('active')
        document.querySelector('.header__mobile_menu').classList.toggle('active')
    })
}
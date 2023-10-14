$(document).ready(function () {
    $('.employees__slider').slick({
        dots: true,
        infinite: true,
        centerMode:true,
        centerPadding: "0",
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        speed: 1000,
        draggable:false,
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


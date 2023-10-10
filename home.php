<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>
<section class="hero">
    <div class="block__content block__content_hero ">
        <div class="hero__text">
            <p class="hero__overlay-text"> <span></span>Бережем ваши автомобили и нервы</p>
            <p class="hero__title">СЕТЬ ШИНОМОНТАЖНЫХ МАСТЕРСКИХ</p>
            <p class="hero__subtitle">
                Наши специалисты ждут вас 24/7 в Санкт-Петербурге, Пушкино, Колпино
            </p>
            <a href="#" class="hero__btn">ЗАПИСАТЬСЯ</a>
            <div class="hero__car-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/car.png" alt="car">
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="38" viewBox="0 0 29 38" fill="none">
            <path d="M2 2L13.0958 10.5353C14.2088 11.3914 15.7668 11.361 16.8455 10.4621L27 2" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5 17L13.4958 23.5353C14.6088 24.3914 16.1668 24.361 17.2455 23.4621L25 17" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 31L12.8958 35.5353C14.0088 36.3914 15.5668 36.361 16.6455 35.4621L22 31" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>

</section>




<?php get_footer(); ?>



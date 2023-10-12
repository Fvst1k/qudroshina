<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>
<section class="hero">
    <div class="block__content block__content_hero ">
        <div class="hero__text">
            <p class="hero__overlay-text"><span></span>Бережем ваши автомобили и нервы</p>
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
            <path d="M2 2L13.0958 10.5353C14.2088 11.3914 15.7668 11.361 16.8455 10.4621L27 2" stroke="#171717"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5 17L13.4958 23.5353C14.6088 24.3914 16.1668 24.361 17.2455 23.4621L25 17" stroke="#171717"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 31L12.8958 35.5353C14.0088 36.3914 15.5668 36.361 16.6455 35.4621L22 31" stroke="#171717"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>

</section>
<section class="about-us">
    <div class="block__content block__content_about-us">
        <div class="about-us__table">
            <div class="about-us__item about-us__item_1">
                <p class="about-us__title">О КОМПАНИИ</p>
            </div>
            <div class="about-us__item about-us__item_2">
                <p class="about-us__text"><span>Квадрошина</span> - это сеть шиномонтажных мастерских, которая
                    охватывает Санкт-Петербург, Пушкин и Колпино. Мы оказываем услуги с 2001 года и нам очень нравится,
                    когда наши клиенты довольны. Поэтому в мастерских трудятся опытные, профессиональные мастера. Они
                    правильно, аккуратно установят шины, сделают точную балансировку на современном оборудовании. Шины,
                    установленные нашими мастерами, проходят долго.</p>
                <p class="about-us__text">За эти годы мы узнали о шинах все, что можно. Поэтому мы создали магазины при
                    наших сервисах, где вам помогут выбрать новые шины, когда они вам понадобятся. Если вдруг шипованная
                    резина потеряла часть шипов - мы устраним и этот недостаток. А если случилась беда с любимыми
                    дисками - мы сделаем реставрацию.</p>
                <p class="about-us__text">Кроме того мы предлагаем усуги по сезонному хранению шин. Ведь балконы не так
                    уж хорошо подходят для этого</p>
            </div>
            <div class="about-us__item about-us__item_3">
                <div class="about-us__img about-us__img_1">
                    <img src="
                            <?php echo get_template_directory_uri() ?>/assets/img/about-us-img-1.png" alt="car">
                    <div class="el"></div>
                </div>
            </div>
            <div class="about-us__item about-us__item_4">
                <div class="about-us__img about-us__img_2">
                    <img src="
                           <?php echo get_template_directory_uri() ?>/assets/img/about-us-img-2.png" alt="car">
                </div>
            </div>
            <div class="about-us__item about-us__item_5">
                <div class="about-us__img about-us__img_3">
                    <img src="
                             <?php echo get_template_directory_uri() ?>/assets/img/about-us-img-3.png" alt="car">
                </div>
            </div>
            <div class="about-us__item about-us__item_6">
                <p class="about-us__text">Наши мастерские предлагают полный цикл по техническому обслуживанию и ремонту вашего автомобиля: двигателя, подвески, электрики, компьютерная диагностика электронной части автомобиля, развал-схождение 3D, малярно-кузовной, ремонт и изготовление глушителей и катализаторов, заправка и ремонт автокондиционеров, сварка аргон, шиномонтаж и т.п.</p>
                <p class="about-us__text">Так же при наших техцентрах находятся магазины автозапчастей, в ассортименте которых запчасти, масла и автохимия для автомобилей отечественного производства и иномарок.</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>



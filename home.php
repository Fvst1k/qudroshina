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
                <p class="about-us__text">Наши мастерские предлагают полный цикл по техническому обслуживанию и ремонту
                    вашего автомобиля: двигателя, подвески, электрики, компьютерная диагностика электронной части
                    автомобиля, развал-схождение 3D, малярно-кузовной, ремонт и изготовление глушителей и катализаторов,
                    заправка и ремонт автокондиционеров, сварка аргон, шиномонтаж и т.п.</p>
                <p class="about-us__text">Так же при наших техцентрах находятся магазины автозапчастей, в ассортименте
                    которых запчасти, масла и автохимия для автомобилей отечественного производства и иномарок.</p>
            </div>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="block__content block__content_advantages">
        <h2 class="advantages__title">МЫ ЛУЧШИЕ ПОТОМУ ЧТО</h2>
        <div class="advantages__items">
            <div class="advantages__item">
                <div class="advantages__item-number">1</div>
                <h3 class="advantages__item-title">Мы рядом с домом</h3>
                <p class="advantages__item-text">У нас большая сеть техцентров и вы всегда можете выбрать ту, что ближе
                    всех
                    к вашему дому </p>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-number">2</div>
                <h3 class="advantages__item-title">Работаем быстро</h3>
                <p class="advantages__item-text">Благодаря высокой квалификации персонала и самому современному
                    оборудованию </p>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-number">3</div>
                <h3 class="advantages__item-title">Работаем круглосуточно</h3>
                <p class="advantages__item-text">В большинстве наших мастерских доступна круглосуточная замена шин </p>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-number">4</div>
                <h3 class="advantages__item-title">Магазины при мастерских</h3>
                <p class="advantages__item-text">Вам не прийдется долго ждать запчастей! Все найдется в наших
                    магазинах </p>
            </div>
        </div>

    </div>
</section>
<section class="booking">
    <div class="block__content block__content_booking">
        <div class="booking__card">
            <div class="booking__card-info">
                <h2 class="booking__card-title">ЗАПИСЬ ПО ТЕЛЕФОНУ</h2>
                <p class="booking__card-text">Чтобы вам не пришлось стоять в очереди в пик сезона запишитесь заранее по
                    круглосуточному номеру</p>
                <div class="booking__phone-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="29" viewBox="0 0 38 29" fill="none">
                        <path d="M2 27L10.5353 15.9042C11.3914 14.7912 11.361 13.2332 10.4621 12.1545L2 2"
                              stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 24L23.5353 15.5042C24.3914 14.3912 24.361 12.8332 23.4621 11.7545L17 4"
                              stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31 22L35.5353 16.1042C36.3914 14.9912 36.361 13.4332 35.4621 12.3545L31 7"
                              stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="tel:+78129394647" class="booking__phone">+7 (812) 939-46-47</a>
                </div>
            </div>
            <div class="booking__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/wheels.png" alt="wheels">
            </div>
            <div class="booking__tread-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/tread-booking.png" alt="wheels">
            </div>

        </div>
    </div>
</section>
<section class="price-table">
    <div class="block__content block__content_price-table">
        <h2 class="price-table__title">ПРАЙС</h2>
        <p class="price-table__subtitle">Комплекс шиномонтажа легковых автомобилей</p>
        <div class="mobile-table">
            <table class="price-table__table ">
                <tbody>
                <tr class="price-table__table-row-1">
                    <th class="price-table__table-col-1">Услуги</th>
                    <th class="price-table__th-style">R13</th>
                    <th class="price-table__th-style">R14</th>
                    <th class="price-table__th-style">R15</th>
                    <th class="price-table__th-style">R16</th>
                    <th class="price-table__th-style">R17</th>
                    <th class="price-table__th-style">R18</th>
                    <th class="price-table__th-style">R19</th>
                    <th class="price-table__th-style">R20</th>
                    <th class="price-table__th-style">R21</th>
                    <th class="price-table__th-style">R22</th>
                    <th class="price-table__th-style">R23</th>
                    <th class="price-table__th-style">R24</th>
                </tr>
                <tr class="price-table__table-row-2">
                    <td class="price-table__table-service">Снятие – установка колеса на автомобиль</td>
                    <td>200</td>
                    <td>250</td>
                    <td>250</td>
                    <td>350</td>
                    <td>400</td>
                    <td>430</td>
                    <td>430</td>
                    <td>450</td>
                    <td>500</td>
                    <td>600</td>
                    <td>700</td>
                    <td>800</td>
                </tr>
                <tr class="price-table__table-row-3">
                    <td class="price-table__table-service">Демонтаж шины</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>300</td>
                    <td>350</td>
                    <td>400</td>
                    <td>450</td>
                    <td>500</td>
                    <td>600</td>
                    <td>700</td>
                </tr>
                <tr class="price-table__table-row-4">
                    <td class="price-table__table-service">Монтаж шины</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>250</td>
                    <td>300</td>
                    <td>350</td>
                    <td>400</td>
                    <td>450</td>
                    <td>500</td>
                    <td>600</td>
                    <td>700</td>
                </tr>
                <tr class="price-table__table-row-5">
                    <td class="price-table__table-service">Балансировка</td>
                    <td>300</td>
                    <td>300</td>
                    <td>300</td>
                    <td>350</td>
                    <td>400</td>
                    <td>430</td>
                    <td>450</td>
                    <td>500</td>
                    <td>600</td>
                    <td>700</td>
                    <td>800</td>
                    <td>900</td>
                </tr>
                <tr class="price-table__table-row-6">
                    <td class="price-table__table-service">Комплекс для 1 колеса (Снятие, установка, демонтаж, монтаж,
                        балансировка)
                    </td>
                    <td>800</td>
                    <td>850</td>
                    <td>900</td>
                    <td>1050</td>
                    <td>1100</td>
                    <td>1300</td>
                    <td>1500</td>
                    <td>1700</td>
                    <td>1900</td>
                    <td>2200</td>
                    <td>2450</td>
                    <td>2500</td>
                </tr>
                <tr class="price-table__table-row-7">
                    <td class="price-table__table-service price-table__table-service_7">Комплекс для 4-х колеса (Снятие,
                        установка, демонтаж, монтаж, балансировка)
                    </td>
                    <td class="price-table__table-row-7-style">3000</td>
                    <td class="price-table__table-row-7-style">3300</td>
                    <td class="price-table__table-row-7-style">3500</td>
                    <td class="price-table__table-row-7-style">4000</td>
                    <td class="price-table__table-row-7-style">4300</td>
                    <td class="price-table__table-row-7-style">4700</td>
                    <td class="price-table__table-row-7-style">5000</td>
                    <td class="price-table__table-row-7-style">6000</td>
                    <td class="price-table__table-row-7-style">7000</td>
                    <td class="price-table__table-row-7-style">8000</td>
                    <td class="price-table__table-row-7-style">9000</td>
                    <td class="price-table__table-row-7-style">10000</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
<section class="calculation">
    <div class="block__content block__content_calculator">
        <h2 class="calculation__title">РАССЧИТАТЬ СТОИМОСТЬ ШИНОМОНТАЖНЫХ РАБОТ</h2>
        <p class="calculation__subtitle">С помощью калькулятора вы заранее можете рассчитать стоимость шиномонтажных
            работ</p>
        <div class="calculation__calculator">
            <div class="calculation__calculator-type">
                <p class="calculation__option-name">Тип шины</p>
                <select name="passenger-car" id="passenger-car">
                    <option value="car">легковой</option>
                    <option value="car">легковой</option>
                    <option value="car">легковой</option>
                    <option value="car">легковой</option>
                </select>
            </div>
            <div class="calculation__calculator-diameter">
                <p class="calculation__option-name">Диаметр</p>
                <select name="diameter" id="diameter">
                    <option value="car">R14</option>
                    <option value="car">R15</option>
                    <option value="car">R16</option>
                    <option value="car">R17</option>
                </select>
            </div>
            <div class="calculation__calculator-address">
                <p class="calculation__option-name">Выберите сервисный центр</p>
                <select name="address" id="address">
                    <option value="car">Маршала Казакова 25А</option>
                    <option value="car">Маршала Казакова 25А</option>
                    <option value="car">Маршала Казакова 25А</option>
                    <option value="car">Маршала Казакова 25А</option>
                </select>
            </div>
            <div class="calculation__calculator-work-type">
                <p class="calculation__option-name">Тип работ</p>
                <select name="work-type" id="work-type">
                    <option value="car">Полный переобув</option>
                    <option value="car">Полный переобув</option>
                    <option value="car">Полный переобув</option>
                    <option value="car">Полный переобув</option>
                </select>
            </div>
            <div class="calculation__calculator-checkbox">
                <label class="checkbox-btn">
                    <input type="checkbox">
                    <span>Checkbox #2</span>
                </label>
            </div>


        </div>

    </div>
</section>
<section class="employees">
    <div class="block__content block__content_employees">
        <h2 class="employees__title">
            Сотрудники
        </h2>
        <p class="employees__subtitle">В наших техцентрах работают для вас</p>
        <div class="employees__slider">
            <div class="employees__slider-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/employer-2.png" alt="employer">
            </div>
            <div class="employees__slider-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/employer-2.png" alt="employer">
            </div>
            <div class="employees__slider-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/employer-2.png" alt="employer">
            </div>
            <div class="employees__slider-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/employer-3.png" alt="employer">
            </div>
            <div class="employees__slider-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/employer-3.png" alt="employer">
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="block__content block__content_reviews">
        <h2 class="reviews__title">
            ОТЗЫВЫ
        </h2>
        <div class="reviews__slider-wrapper">
            <button class="slick-prev slider-arrow-prev"></button>
            <button class="slick-prev slider-arrow-next"></button>
            <div class="reviews__slider">
                <div class="reviews__slider-item">

                    <h3 class="reviews__name">Владимир</h3>
                    <p class="reviews__feedback">Ребята отлично работают: быстро, качественно, не накручивают услуги, но
                        и
                        предупреждают о возможных проблемах в дальнейшем, если есть предпосылки. Хороший шиномонтаж,
                        рекомендую!</p>
                </div>
                <div class="reviews__slider-item">

                    <h3 class="reviews__name">Владимир</h3>
                    <p class="reviews__feedback">Ребята отлично работают: быстро, качественно, не накручивают услуги, но
                        и
                        предупреждают о возможных проблемах в дальнейшем, если есть предпосылки. Хороший шиномонтаж,
                        рекомендую!</p>
                </div>
                <div class="reviews__slider-item">

                    <h3 class="reviews__name">Владимир</h3>
                    <p class="reviews__feedback">Ребята отлично работают: быстро, качественно, не накручивают услуги, но
                        и
                        предупреждают о возможных проблемах в дальнейшем, если есть предпосылки. Хороший шиномонтаж,
                        рекомендую!</p>
                </div>
                <div class="reviews__slider-item">

                    <h3 class="reviews__name">Владимир</h3>
                    <p class="reviews__feedback">Ребята отлично работают: быстро, качественно, не накручивают услуги, но
                        и
                        предупреждают о возможных проблемах в дальнейшем, если есть предпосылки. Хороший шиномонтаж,
                        рекомендую!</p>
                </div>

            </div>
        </div>

    </div>
</section>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255808.70669704824!2d29.76506029963684!3d59.94034693347934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LM!5e0!3m2!1sru!2sru!4v1697384424490!5m2!1sru!2sru"
            width="100%" height="650px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contacts">
    <div class="block__content block__content_contacts">
        <h2 class="contacts__title">КОНТАКТЫ</h2>
        <div class="contacts__grid">
            <div class="contacts__grid-item contacts__grid-item_1">
                <h3 class="contacts__item-1-title">Сеть шиномонтажных мастерских</h3>
                <div class="contacts__item-1-info">
                    <p class="contacts__info-first-address">
                        Санкт-Петербург, Маршала Казакова 25А</p>
                    <p>
                        Санкт-Петербург, проспект Народного ополчения 16А</p>
                    <a href="tel:+78129394647" class="contacts__phone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M12.1492 4.44035C12.9909 4.60425 13.7644 5.01511 14.3708 5.62033C14.9772 6.22556 15.3888 6.99761 15.5531 7.83769M12.1492 1C13.8979 1.19389 15.5286 1.97549 16.7735 3.21645C18.0184 4.45741 18.8035 6.08398 19 7.82909M18.1383 14.6926V17.2728C18.1392 17.5124 18.0901 17.7495 17.9939 17.969C17.8978 18.1884 17.7568 18.3854 17.5799 18.5474C17.4031 18.7093 17.1943 18.8326 16.967 18.9093C16.7396 18.9861 16.4987 19.0146 16.2597 18.993C13.608 18.7054 11.0608 17.8011 8.82292 16.3526C6.74082 15.032 4.97557 13.2701 3.65252 11.192C2.19617 8.94824 1.28985 6.3936 1.00699 3.73508C0.98546 3.49723 1.01378 3.25752 1.09015 3.0312C1.16652 2.80488 1.28927 2.59691 1.45059 2.42054C1.6119 2.24416 1.80824 2.10324 2.02711 2.00675C2.24598 1.91026 2.48258 1.86031 2.72185 1.86009H5.30705C5.72525 1.85598 6.13069 2.00379 6.44778 2.27597C6.76487 2.54815 6.97198 2.92612 7.03051 3.33944C7.13963 4.16518 7.34199 4.97595 7.63373 5.75628C7.74967 6.06413 7.77476 6.39869 7.70603 6.72034C7.63731 7.04198 7.47764 7.33722 7.24595 7.57106L6.15155 8.66337C7.37827 10.8166 9.16456 12.5995 11.322 13.8239L12.4164 12.7316C12.6506 12.5003 12.9465 12.341 13.2687 12.2724C13.591 12.2038 13.9262 12.2288 14.2346 12.3445C15.0164 12.6357 15.8288 12.8377 16.6561 12.9466C17.0747 13.0055 17.457 13.216 17.7303 13.5379C18.0035 13.8598 18.1488 14.2708 18.1383 14.6926Z" stroke="#F08E2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        +7 (812) 939-46-47</a>
                </div>

            </div>
            <div class="contacts__grid-item contacts__grid-item_2">
                <h3 class="contacts__item-2-title">График работы:</h3>
                <p>Пн–Пт с 9:00 до 18:00</p>
            </div>
            <div class="contacts__grid-item contacts__grid-item_3">
                <h3 class="contacts__item-3-title">Мы в соцсетях:</h3>
                <div class="contacts__item-3-socials">
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/vk.png" alt="VK"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>



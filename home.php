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
                        <path d="M2 27L10.5353 15.9042C11.3914 14.7912 11.361 13.2332 10.4621 12.1545L2 2" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 24L23.5353 15.5042C24.3914 14.3912 24.361 12.8332 23.4621 11.7545L17 4" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31 22L35.5353 16.1042C36.3914 14.9912 36.361 13.4332 35.4621 12.3545L31 7" stroke="#171717" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="tel:+78129394647" class="booking__phone">+7 (812) 939-46-47</a>
                </div>
            </div>
            <div class="booking__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/wheels.png" alt="wheels">
            </div>
            <div class="booking__tread-img">
                <img  src="<?php echo get_template_directory_uri() ?>/assets/img/tread-booking.png" alt="wheels">
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
                <tr class="price-table__table-row-2" >
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
                    <td class="price-table__table-service">Комплекс для 1 колеса (Снятие, установка, демонтаж, монтаж, балансировка)</td>
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
                    <td class="price-table__table-service price-table__table-service_7">Комплекс для 4-х колеса (Снятие, установка, демонтаж, монтаж, балансировка)</td>
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
        <p class="calculation__subtitle">С помощью калькулятора вы заранее можете рассчитать стоимость шиномонтажных работ</p>
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




<?php get_footer(); ?>



<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<?php if (get_field('hero-block-visible')) { ?>
    <section class="hero">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
        </div>
        <div class="block__content block__content_hero ">
            <div class="hero__text">
                <p class="hero__overlay-text"><span></span><?php the_field('hero-block-subtitle'); ?></p>
                <h2 class="hero__title"><?php the_field('hero-block-title'); ?></h2>
                <p class="hero__subtitle">
                    <?php the_field('hero-block-text'); ?>
                </p>
                <a href="<?php the_field('hero-block-btn-link'); ?>"
                   class="hero__btn"><?php the_field('hero-block-btn'); ?></a>
                <div class="hero__car-img">
                    <img src="<?php the_field('hero-block-img'); ?>" alt="car">
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
<?php }; ?>
    <div class="wrapper__protector-bg">
        <div class="wrapper__protector-bg_img wrapper__protector-bg_img-1">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-bg.png" alt="car">
        </div>
        <div class="wrapper__protector-bg_img wrapper__protector-bg_img-2">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-bg.png" alt="car">
        </div>

        <?php if (get_field('about-us-visible')) { ?>
            <section class="about-us">
                <div class="block__content block__content_about-us">
                    <div class="about-us__table">
                        <div class="about-us__item about-us__item_1">
                            <p class="about-us__title">
                                <?php the_field('about-us-title'); ?>
                            </p>
                        </div>
                        <div class="about-us__item about-us__item_2">
                            <?php the_field('about-us-text-1'); ?>
                        </div>
                        <div class="about-us__item about-us__item_3">
                            <div class="about-us__img about-us__img_1">
                                <img src="<?php the_field('about-us-img-3'); ?>" alt="car">
                                <div class="el"></div>
                            </div>
                        </div>
                        <div class="about-us__item about-us__item_4">
                            <div class="about-us__img about-us__img_2">
                                <img src="<?php the_field('about-us-img-1'); ?>" alt="car">
                            </div>
                        </div>
                        <div class="about-us__item about-us__item_5">
                            <div class="about-us__img about-us__img_3">
                                <img src="<?php the_field('about-us-img-2'); ?>" alt="car">
                            </div>
                        </div>
                        <div class="about-us__item about-us__item_6">
                            <?php the_field('about-us-text-2'); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php }; ?>


        <!--    <section class="booking-plugin">-->
        <!--        <div class="block__content block__content_booking-plugin">-->
        <!--            --><?php //echo do_shortcode('[bookly-form]') ?>
        <!--        </div>-->
        <!--    </section>-->


        <?php if (get_field('advantages-visible')) { ?>
            <section class="advantages">
                <div class="block__content block__content_advantages">
                    <h2 class="advantages__title">
                        <?php the_field('advantages-title'); ?>
                    </h2>
                    <div class="advantages__items">
                        <?php
                        if (have_rows('advantages-create')):
                            while (have_rows('advantages-create')) : the_row(); ?>
                                <div class="advantages__item">
                                    <div class="advantages__item-number"><?php the_sub_field('advantages-item-num'); ?></div>
                                    <h4 class="advantages__item-title"><?php the_sub_field('advantages-item-title'); ?></h4>
                                    <p class="advantages__item-text"><?php the_sub_field('advantages-item-text'); ?></p>
                                </div>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <?php if (get_field('booking-visible')) { ?>
            <section class="booking">
                <div class="block__content block__content_booking">
                    <div class="booking__card-wrapper">
                        <div class="booking__img-wheels">
                            <img src="<?php the_field('booking-img'); ?>" alt="wheels">
                        </div>
                        <div class="booking__card">
                            <div class="booking__tread-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/tread-booking.png"
                                     alt="wheels">
                            </div>
                            <div class="booking__card-info">
                                <h2 class="booking__card-title">
                                    <?php the_field('booking-title'); ?>
                                </h2>
                                <p class="booking__card-text">
                                    <?php the_field('booking-text'); ?>
                                </p>
                                <div class="booking__phone-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="29" viewBox="0 0 38 29"
                                         fill="none">
                                        <path d="M2 27L10.5353 15.9042C11.3914 14.7912 11.361 13.2332 10.4621 12.1545L2 2"
                                              stroke="#171717" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M17 24L23.5353 15.5042C24.3914 14.3912 24.361 12.8332 23.4621 11.7545L17 4"
                                              stroke="#171717" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M31 22L35.5353 16.1042C36.3914 14.9912 36.361 13.4332 35.4621 12.3545L31 7"
                                              stroke="#171717" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <a href="tel:<?php the_field('booking-phone-link'); ?>"
                                       class="booking__phone hover_scale"><?php the_field('booking-phone'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <?php if (get_field('price-visible')) { ?>
            <section class="price-table">
                <div class="block__content block__content_price-table">
                    <h2 class="price-table__title"><?php the_field('price-title'); ?></h2>
                    <p class="price-table__subtitle"><?php the_field('price-subtitle'); ?></p>
                    <div class="mobile-table">
                        <table class="price-table__table ">
                            <img src="<?php the_field('price-img'); ?>" alt="price">
                            <!--                        <tbody>-->
                            <!--                        <tr class="price-table__table-row-1">-->
                            <!--                            <th class="price-table__table-col-1">Услуги</th>-->
                            <!--                            <th class="price-table__th-style">R13</th>-->
                            <!--                            <th class="price-table__th-style">R14</th>-->
                            <!--                            <th class="price-table__th-style">R15</th>-->
                            <!--                            <th class="price-table__th-style">R16</th>-->
                            <!--                            <th class="price-table__th-style">R17</th>-->
                            <!--                            <th class="price-table__th-style">R18</th>-->
                            <!--                            <th class="price-table__th-style">R19</th>-->
                            <!--                            <th class="price-table__th-style">R20</th>-->
                            <!--                            <th class="price-table__th-style">R21</th>-->
                            <!--                            <th class="price-table__th-style">R22</th>-->
                            <!--                            <th class="price-table__th-style">R23</th>-->
                            <!--                            <th class="price-table__th-style">R24</th>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-2">-->
                            <!--                            <td class="price-table__table-service">Снятие – установка колеса на автомобиль</td>-->
                            <!--                            <td>200</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>350</td>-->
                            <!--                            <td>400</td>-->
                            <!--                            <td>430</td>-->
                            <!--                            <td>430</td>-->
                            <!--                            <td>450</td>-->
                            <!--                            <td>500</td>-->
                            <!--                            <td>600</td>-->
                            <!--                            <td>700</td>-->
                            <!--                            <td>800</td>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-3">-->
                            <!--                            <td class="price-table__table-service">Демонтаж шины</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>300</td>-->
                            <!--                            <td>350</td>-->
                            <!--                            <td>400</td>-->
                            <!--                            <td>450</td>-->
                            <!--                            <td>500</td>-->
                            <!--                            <td>600</td>-->
                            <!--                            <td>700</td>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-4">-->
                            <!--                            <td class="price-table__table-service">Монтаж шины</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>250</td>-->
                            <!--                            <td>300</td>-->
                            <!--                            <td>350</td>-->
                            <!--                            <td>400</td>-->
                            <!--                            <td>450</td>-->
                            <!--                            <td>500</td>-->
                            <!--                            <td>600</td>-->
                            <!--                            <td>700</td>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-5">-->
                            <!--                            <td class="price-table__table-service">Балансировка</td>-->
                            <!--                            <td>300</td>-->
                            <!--                            <td>300</td>-->
                            <!--                            <td>300</td>-->
                            <!--                            <td>350</td>-->
                            <!--                            <td>400</td>-->
                            <!--                            <td>430</td>-->
                            <!--                            <td>450</td>-->
                            <!--                            <td>500</td>-->
                            <!--                            <td>600</td>-->
                            <!--                            <td>700</td>-->
                            <!--                            <td>800</td>-->
                            <!--                            <td>900</td>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-6">-->
                            <!--                            <td class="price-table__table-service">Комплекс для 1 колеса (Снятие, установка, демонтаж,-->
                            <!--                                монтаж,-->
                            <!--                                балансировка)-->
                            <!--                            </td>-->
                            <!--                            <td>800</td>-->
                            <!--                            <td>850</td>-->
                            <!--                            <td>900</td>-->
                            <!--                            <td>1050</td>-->
                            <!--                            <td>1100</td>-->
                            <!--                            <td>1300</td>-->
                            <!--                            <td>1500</td>-->
                            <!--                            <td>1700</td>-->
                            <!--                            <td>1900</td>-->
                            <!--                            <td>2200</td>-->
                            <!--                            <td>2450</td>-->
                            <!--                            <td>2500</td>-->
                            <!--                        </tr>-->
                            <!--                        <tr class="price-table__table-row-7">-->
                            <!--                            <td class="price-table__table-service price-table__table-service_7">Комплекс для 4-х колеса-->
                            <!--                                (Снятие,-->
                            <!--                                установка, демонтаж, монтаж, балансировка)-->
                            <!--                            </td>-->
                            <!--                            <td class="price-table__table-row-7-style">3000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">3300</td>-->
                            <!--                            <td class="price-table__table-row-7-style">3500</td>-->
                            <!--                            <td class="price-table__table-row-7-style">4000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">4300</td>-->
                            <!--                            <td class="price-table__table-row-7-style">4700</td>-->
                            <!--                            <td class="price-table__table-row-7-style">5000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">6000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">7000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">8000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">9000</td>-->
                            <!--                            <td class="price-table__table-row-7-style">10000</td>-->
                            <!--                        </tr>-->
                            <!--                        </tbody>-->
                        </table>
                    </div>

                    <a href="<?php the_permalink(275);?>"
                       class="hero__btn hero__btn_price">Смотреть полный прайс</a>
                </div>

            </section>
        <?php }; ?>
        <?php if (get_field('calculation-visible')) { ?>
            <section class="calculation">
                <div class="block__content block__content_calculator">
                    <h2 class="calculation__title"><?php the_field('calculation-title'); ?></h2>
                    <p class="calculation__subtitle"><?php the_field('calculation-subtitle'); ?></p>
                    <div class="calculation__row">
                        <div class="calculation__calculator">
                            <div class="calculation__select calculation__select_1 ">
                                <h3 class="calculation__select-title">Тип шины</h3>
                                <div class="calculation__select-header">
                                    <span class="calculation__select-current">легковой</span>
                                    <div class="calculation__select-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="calculation__select-body">
                                    <div class="calculation__select-item">легковой</div>
                                    <div class="calculation__select-item">грузовой</div>
                                    <div class="calculation__select-item">сверхгругозовой</div>
                                    <div class="calculation__select-item">сверхлегковой</div>
                                </div>
                            </div>
                            <div class="calculation__select calculation__select_2">
                                <h3 class="calculation__select-title">Диаметр</h3>
                                <div class="calculation__select-header">
                                    <span class="calculation__select-current">R14</span>
                                    <div class="calculation__select-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="calculation__select-body">
                                    <div class="calculation__select-item">R14</div>
                                    <div class="calculation__select-item">R15</div>
                                    <div class="calculation__select-item">R16</div>
                                    <div class="calculation__select-item">R17</div>
                                </div>
                            </div>
                            <div class="calculation__select calculation__select_3 ">
                                <h3 class="calculation__select-title">Выберите сервисный центр</h3>
                                <div class="calculation__select-header">
                                    <span class="calculation__select-current">Маршала Казакова 25А</span>
                                    <div class="calculation__select-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="calculation__select-body">
                                    <div class="calculation__select-item">Маршала Казакова 25А</div>
                                    <div class="calculation__select-item">Маршала Казакова 25А</div>
                                    <div class="calculation__select-item">Маршала Казакова 25А</div>
                                    <div class="calculation__select-item">Маршала Казакова 25А</div>
                                </div>
                            </div>
                            <div class="calculation__select calculation__select_4 ">
                                <h3 class="calculation__select-title calculation__select-title_4">Тип работ</h3>
                                <div class="calculation__select-header">
                                    <span class="calculation__select-current">Полный переобув</span>
                                    <div class="calculation__select-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="calculation__select-body">
                                    <div class="calculation__select-item">Полный переобув</div>
                                    <div class="calculation__select-item">Полный переобув</div>
                                    <div class="calculation__select-item">Полный переобув</div>
                                    <div class="calculation__select-item">Полный переобув</div>
                                </div>
                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span>Балансировка</span>
                                </label>
                            </div>
                            <div class="calculation__select calculation__select_5">
                                <h3 class="calculation__select-title calculation__select-title_5">Количество колес</h3>
                                <div class="form_radio_btn">
                                    <input id="radio-1" type="radio" name="radio" value="1" checked>
                                    <label for="radio-1">1</label>
                                </div>

                                <div class="form_radio_btn">
                                    <input id="radio-2" type="radio" name="radio" value="2">
                                    <label for="radio-2">2</label>
                                </div>

                                <div class="form_radio_btn">
                                    <input id="radio-3" type="radio" name="radio" value="3">
                                    <label for="radio-3">3</label>
                                </div>
                                <div class="form_radio_btn">
                                    <input id="radio-4" type="radio" name="radio" value="4">
                                    <label for="radio-4">4</label>
                                </div>
                            </div>
                            <div class="calculation__result">
                                <p class="calculation__result_text">Стоимость услуг:</p>
                                <p class="calculation__result_number">3500
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <g clip-path="url(#clip0_1_1626)">
                                            <path d="M11.4277 11.1112C12.6376 11.1411 13.81 10.69 14.6879 9.85693C15.5658 9.02381 16.0775 7.87661 16.111 6.66679C16.0775 5.45696 15.5658 4.30976 14.6879 3.47664C13.81 2.64353 12.6376 2.19247 11.4277 2.22234H6.66656C6.51922 2.22234 6.37791 2.28087 6.27372 2.38506C6.16953 2.48925 6.111 2.63056 6.111 2.7779V10.0001H4.99989C4.85255 10.0001 4.71124 10.0587 4.60705 10.1628C4.50287 10.267 4.44434 10.4083 4.44434 10.5557C4.44434 10.703 4.50287 10.8443 4.60705 10.9485C4.71124 11.0527 4.85255 11.1112 4.99989 11.1112H6.111V12.2223H4.99989C4.85255 12.2223 4.71124 12.2809 4.60705 12.3851C4.50287 12.4892 4.44434 12.6306 4.44434 12.7779C4.44434 12.9252 4.50287 13.0665 4.60705 13.1707C4.71124 13.2749 4.85255 13.3335 4.99989 13.3335H6.111V17.2223C6.111 17.3697 6.16953 17.511 6.27372 17.6152C6.37791 17.7194 6.51922 17.7779 6.66656 17.7779C6.8139 17.7779 6.95521 17.7194 7.05939 17.6152C7.16358 17.511 7.22211 17.3697 7.22211 17.2223V13.3335H12.2221C12.3695 13.3335 12.5108 13.2749 12.615 13.1707C12.7191 13.0665 12.7777 12.9252 12.7777 12.7779C12.7777 12.6306 12.7191 12.4892 12.615 12.3851C12.5108 12.2809 12.3695 12.2223 12.2221 12.2223H7.22211V11.1112H11.4277ZM7.22211 3.33345H11.4277C12.3426 3.30492 13.2316 3.63938 13.9008 4.26385C14.57 4.88832 14.9651 5.75212 14.9999 6.66679C14.9666 7.58195 14.5719 8.44662 13.9024 9.07139C13.2328 9.69617 12.3429 10.0301 11.4277 10.0001H7.22211V3.33345Z"
                                                  fill="#171717"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_1626">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </p>
                            </div>
                            <div class="calculation__result-btn"><p>Полный расчёт</p></div>
                        </div>
                        <div class="calculation__img">
                            <img src="<?php the_field('calculation-img'); ?>" alt="car">
                        </div>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <?php if (get_field('employees-visible')) { ?>
            <section class="employees">
                <div class="block__content block__content_employees">
                    <h2 class="employees__title">
                        <?php the_field('employees-titile'); ?>
                    </h2>
                    <p class="employees__subtitle"><?php the_field('employees-subtitle'); ?></p>
                    <div class="employees__slider">
                        <?php
                        if (have_rows('employees-slider')):
                            while (have_rows('employees-slider')) : the_row(); ?>

                                <div class="employees__slider-item">
                                    <img src="<?php the_sub_field('employees-item'); ?>"
                                         alt="employer">
                                </div>

                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
    </div>
<?php if (get_field('reviews-visible')) { ?>
    <section class="reviews">
        <div class="block__content block__content_reviews">
            <h2 class="reviews__title">
                <?php the_field('reviews-title'); ?>
            </h2>
            <div class="reviews__slider-wrapper">
                <div class="reviews__slider">
                    <?php
                    if (have_rows('reviews-slider')):
                        while (have_rows('reviews-slider')) : the_row(); ?>
                            <div class="white-el-wrapper">
                                <div class="white-el"></div>
                                <div class="reviews__slider-item">
                                    <h3 class="reviews__name">
                                        <?php the_sub_field('reviews-slider-name'); ?>
                                    </h3>
                                    <p class="reviews__feedback">
                                        <?php the_sub_field('reviews-slider-text'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </section>
<?php }; ?>
    <section class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a53c984f88b1d5500b7221c149089d50c445600b3cc80493419b90cb99b1ba9&amp;source=constructor"
                width="100%" height="653" frameborder="0"></iframe>
    </section>
<?php if (get_field('contacts-visible')) { ?>
    <section class="contacts">
        <div class="block__content block__content_contacts">
            <h2 class="contacts__title"><?php the_field('contacts-title'); ?></h2>
            <div class="contacts__grid">
                <div class="contacts__grid-item contacts__grid-item_1">
                    <h4 class="contacts__item-1-title"><?php the_field('contacts-subtitle-address'); ?></h4>
                    <div class="contacts__item-1-info">
                        <?php
                        if (have_rows('contacts-create-address')):
                            while (have_rows('contacts-create-address')) : the_row(); ?>
                                <p class="contacts__info-first-address">
                                    <?php the_sub_field('contacts-address'); ?>
                                </p>

                                <a href="tel:<?php the_sub_field('contacts-num-link'); ?>" class="contacts__phone">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <path d="M12.1492 4.44035C12.9909 4.60425 13.7644 5.01511 14.3708 5.62033C14.9772 6.22556 15.3888 6.99761 15.5531 7.83769M12.1492 1C13.8979 1.19389 15.5286 1.97549 16.7735 3.21645C18.0184 4.45741 18.8035 6.08398 19 7.82909M18.1383 14.6926V17.2728C18.1392 17.5124 18.0901 17.7495 17.9939 17.969C17.8978 18.1884 17.7568 18.3854 17.5799 18.5474C17.4031 18.7093 17.1943 18.8326 16.967 18.9093C16.7396 18.9861 16.4987 19.0146 16.2597 18.993C13.608 18.7054 11.0608 17.8011 8.82292 16.3526C6.74082 15.032 4.97557 13.2701 3.65252 11.192C2.19617 8.94824 1.28985 6.3936 1.00699 3.73508C0.98546 3.49723 1.01378 3.25752 1.09015 3.0312C1.16652 2.80488 1.28927 2.59691 1.45059 2.42054C1.6119 2.24416 1.80824 2.10324 2.02711 2.00675C2.24598 1.91026 2.48258 1.86031 2.72185 1.86009H5.30705C5.72525 1.85598 6.13069 2.00379 6.44778 2.27597C6.76487 2.54815 6.97198 2.92612 7.03051 3.33944C7.13963 4.16518 7.34199 4.97595 7.63373 5.75628C7.74967 6.06413 7.77476 6.39869 7.70603 6.72034C7.63731 7.04198 7.47764 7.33722 7.24595 7.57106L6.15155 8.66337C7.37827 10.8166 9.16456 12.5995 11.322 13.8239L12.4164 12.7316C12.6506 12.5003 12.9465 12.341 13.2687 12.2724C13.591 12.2038 13.9262 12.2288 14.2346 12.3445C15.0164 12.6357 15.8288 12.8377 16.6561 12.9466C17.0747 13.0055 17.457 13.216 17.7303 13.5379C18.0035 13.8598 18.1488 14.2708 18.1383 14.6926Z"
                                              stroke="#F08E2B" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <?php the_sub_field('contacts-num'); ?>
                                </a>

                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>

                </div>
                <div class="contacts__grid-item contacts__grid-item_2">
                    <h4 class="contacts__item-2-title"><?php the_field('contacts-subtitle-time'); ?></h4>
                    <?php
                    if (have_rows('contacts-create-time')):
                        while (have_rows('contacts-create-time')) : the_row(); ?>
                            <p><?php the_sub_field('contacts-time'); ?></p>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="contacts__grid-item contacts__grid-item_3">
                    <h4 class="contacts__item-3-title"><?php the_field('contacts-subtitle-sosial'); ?></h4>
                    <div class="contacts__item-3-socials">
                        <?php
                        if (have_rows('contacts-create-sosial')):
                            while (have_rows('contacts-create-sosial')) : the_row(); ?>
                                <a class="" href="<?php the_sub_field('contacts-sosial-link'); ?>">
                                    <img src="<?php the_sub_field('contacts-sosial-icon'); ?>"
                                         alt="social">
                                </a>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }; ?>

<?php get_footer(); ?>
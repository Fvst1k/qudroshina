<section class="services solo-address">
    <div class="services__bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
    </div>
    <div class="services__bg services__bg_opacity">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="background">
    </div>
    <div class="block__content block__content_services">
        <h2 class="services__title tl__title">
            <?php the_title(); ?>
        </h2>
        <div class="solo-address__subtitle">
            <?php the_field('solo-address-subtitle'); ?>
        </div>
        <a href="tel:<?php the_field('solo-address-num-link'); ?>" class="solo-address__num-group hover_scale">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_259_89)">
                    <path d="M11.9146 3.95841C12.6878 4.10928 13.3984 4.48745 13.9555 5.04453C14.5126 5.60161 14.8908 6.31225 15.0416 7.0855M11.9146 0.791748C13.5211 0.970218 15.0191 1.68964 16.1628 2.83188C17.3065 3.97412 18.0278 5.4713 18.2083 7.07758M17.4166 13.3951V15.7701C17.4175 15.9906 17.3724 16.2088 17.284 16.4108C17.1957 16.6128 17.0662 16.7942 16.9037 16.9432C16.7412 17.0923 16.5494 17.2058 16.3406 17.2764C16.1317 17.347 15.9104 17.3733 15.6908 17.3534C13.2547 17.0887 10.9147 16.2563 8.85872 14.923C6.94591 13.7075 5.32419 12.0858 4.10872 10.173C2.77078 8.1077 1.93816 5.75629 1.6783 3.30925C1.65852 3.09033 1.68454 2.86968 1.7547 2.66137C1.82486 2.45305 1.93763 2.26163 2.08582 2.09928C2.23402 1.93694 2.4144 1.80723 2.61547 1.71841C2.81654 1.6296 3.0339 1.58362 3.25372 1.58341H5.62872C6.01292 1.57963 6.38539 1.71569 6.6767 1.96621C6.968 2.21674 7.15828 2.56464 7.21205 2.94508C7.31229 3.70513 7.4982 4.45141 7.76622 5.16966C7.87273 5.45302 7.89578 5.76097 7.83264 6.05703C7.7695 6.35308 7.62282 6.62484 7.40997 6.84008L6.40455 7.8455C7.53153 9.82747 9.17258 11.4685 11.1546 12.5955L12.16 11.5901C12.3752 11.3772 12.647 11.2305 12.943 11.1674C13.2391 11.1043 13.547 11.1273 13.8304 11.2338C14.5486 11.5019 15.2949 11.6878 16.055 11.788C16.4395 11.8423 16.7907 12.036 17.0418 12.3323C17.2929 12.6286 17.4263 13.0068 17.4166 13.3951Z"
                          stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                    <clipPath id="clip0_259_89">
                        <rect width="19" height="19" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
            <p class="solo-address__num-link">
                <?php the_field('solo-address-num'); ?>
            </p>
        </a>
        <div class="solo-address_table">
            <div class="solo-address_item solo-address_item-text">
                <?php the_field('solo-address-text-1'); ?>
            </div>
            <div class="solo-address_item solo-address_item-text">
                <?php the_field('solo-address-text-2'); ?>
            </div>
            <?php
            if (have_rows('solo-address-item-repeater')):
                while (have_rows('solo-address-item-repeater')) : the_row(); ?>

                    <div class="solo-address_item">
                        <img src="<?php the_sub_field('solo-address-img'); ?>"
                             alt="<?php the_sub_field('solo-address-img-alt'); ?>" title="<?php the_sub_field('solo-address-img-title'); ?>">
                    </div>

                <?php endwhile;
            else :
            endif;
            ?>

        </div>
        <div class="solo-address__btn-down">
            <a href="<?php the_field('solo-address-left-link'); ?>"
               class="hero__btn solo-address__btn_left"><?php the_field('solo-address-left'); ?></a>
            <a href="tel:<?php the_field('solo-address-right-link'); ?>"
               class="hero__btn"><?php the_field('solo-address-right'); ?></a>
        </div>


    </div>
</section>
<section class="map">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a53c984f88b1d5500b7221c149089d50c445600b3cc80493419b90cb99b1ba9&amp;source=constructor"
            width="100%" height="653" frameborder="0"></iframe>
</section>




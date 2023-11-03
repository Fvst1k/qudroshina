<section class="services">
    <div class="services__bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
    </div>
    <div class="services__bg services__bg_opacity">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
    </div>
    <div class="block__content block__content_services">

        <h2 class="services__title tl__title">
            <?php the_title(); ?>
        </h2>
        <div class="services-single__wrapper">
            <div class="services-single__text">
                <?php the_field('services-single-text'); ?>
            </div>
            <div class="services-single__img-group">
                <div class="services-single__bg-elem">

                </div>
                <div class="services-single__img">
                    <img src="<?php the_field('services-single__img-1'); ?>" alt="img">
                </div>
                <div class="services-single__img_absolute">
                    <img src="<?php the_field('services-single__img-2'); ?>" alt="img">
                </div>

            </div>
        </div>

    </div>

    </div>
</section>



<?php
?>
<section class="blog">
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
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

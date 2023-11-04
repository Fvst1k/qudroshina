<?php
/*
Template Name: address
*/
?>
<?php get_header() ?>
<section class="address">
    <div class="services__bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
    </div>
    <div class="services__bg services__bg_opacity">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
    </div>
    <div class="block__content block__content_address">

        <h2 class="address__title tl__title">
            <?php the_title(); ?>
        </h2>
        <div class="address__table-1">
            <?php
            $id = 303;
            $post = get_post($id);
            $content = $post->post_content; ?>

            <a class="address__table-city hover_scale" href="<?php the_permalink(); ?>">
                <h3 class="address__city-name"><?php the_title(); ?></h3>
                <p class="address__city-link">Подробнее</p>
            </a>
            <?php get_header() ?>
            <?php
            global $post;
            $myposts = get_posts([
                'numberposts' => -1,
                'category' => '20',
            ]);
            if ($myposts) { ?>
                <?php
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    ?>

                    <a href="<?php the_permalink(); ?>" class="address__table-address hover_scale">
                        <h3 class="address__address-name"><?php the_title(); ?></h3>
                        <div class="address__table-arrow">
                            <p class="address__address-link">Подробнее</p>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8335 14.1668L15.0002 10.0002L10.8335 5.8335" stroke="#E78B2F"
                                      stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 14.1668L9.16667 10.0002L5 5.8335" stroke="#E78B2F" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                    <?php
                }
            }
            wp_reset_postdata(); ?>

        </div>
        <!--        <div class="address__table-2">-->
        <!--            <div class="address__table-city">-->
        <!--                <h3 class="address__city-name">Пушкин</h3>-->
        <!--                <a href="#" class="address__city-link">Подробнее</a>-->
        <!--            </div>-->
        <!--            <div class="address__table-address">-->
        <!--                <h3 class="address__address-name">Адрес 1</h3>-->
        <!--                <div class="address__table-arrow">-->
        <!--                    <a href="#" class="address__address-link">Подробнее</a>-->
        <!--                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M10.8335 14.1668L15.0002 10.0002L10.8335 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                        <path d="M5 14.1668L9.16667 10.0002L5 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                    </svg>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="address__table-address">-->
        <!--                <h3 class="address__address-name">Адрес 1</h3>-->
        <!--                <div class="address__table-arrow">-->
        <!--                    <a href="#" class="address__address-link">Подробнее</a>-->
        <!--                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M10.8335 14.1668L15.0002 10.0002L10.8335 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                        <path d="M5 14.1668L9.16667 10.0002L5 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                    </svg>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="address__table-address">-->
        <!--                <h3 class="address__address-name">Адрес 1</h3>-->
        <!--                <div class="address__table-arrow">-->
        <!--                    <a href="#" class="address__address-link">Подробнее</a>-->
        <!--                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                        <path d="M10.8335 14.1668L15.0002 10.0002L10.8335 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                        <path d="M5 14.1668L9.16667 10.0002L5 5.8335" stroke="#E78B2F" stroke-width="2"-->
        <!--                              stroke-linecap="round" stroke-linejoin="round"/>-->
        <!--                    </svg>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</section>
<?php get_footer(); ?>









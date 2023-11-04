<?php
/*
Template Name: address-group
*/
?>
<?php
/*
Template Name: services
*/
?>
<?php get_header() ?>
<?php
global $post;
$myposts = get_posts([
    'numberposts' => -1,
    'category' => '20',
]);
if ($myposts) { ?>
<section class="services">
    <div class="services__bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
    </div>
    <div class="services__bg services__bg_opacity">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
    </div>
    <div class="block__content block__content_services">

        <h2 class="services__title tl__title"><?php the_title();?></h2>

        <div class="address__table-1 address__table-1_group">

            <?php
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
              <a href="<?php the_permalink(); ?>" class="services__tablet-item hover_scale">
                    <div href="" class="services__tablet-item-link">
                        <h4 class="services__tablet-title"><?php the_title(); ?></h4>
                        <div class="services__tablet-group">
                            <p class="services__tablet-link">Подробнее</p>
                            <div class="services__tablet-arrow">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8335 14.1668L15.0002 10.0002L10.8335 5.8335" stroke="#E78B2F"
                                          stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 14.1668L9.16667 10.0002L5 5.8335" stroke="#E78B2F" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
            }
            }
            wp_reset_postdata(); ?>

        </div>
    </div>

    </div>
</section>


<?php get_footer(); ?>






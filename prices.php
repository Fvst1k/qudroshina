<?php
/*
Template Name: price
*/
?>
<?php get_header() ?>
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
        <div class="prices__img-wrapper">
            <?php
            if( have_rows('prices-repeater') ):
                while ( have_rows('prices-repeater') ) : the_row(); ?>
                    <img src="<?php the_sub_field('prices-img') ;?>" alt="<?php the_sub_field('prices-img-alt');?>" title="<?php the_sub_field('prices-img-title');?>">
               <?php endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</section>
<section class="map">
    <?php the_field('map');?>
</section>
<?php get_footer(); ?>


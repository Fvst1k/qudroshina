<?php get_header(); ?>
<?php
if ( have_posts() ) { the_post(); rewind_posts(); }
if ( in_category(3)) { include(TEMPLATEPATH . '/single-constructor.php'); }
elseif ( in_category(19)) { include(TEMPLATEPATH . '/single-constructor.php'); }
elseif ( in_category(20)) { include(TEMPLATEPATH . '/single-constructor.php'); }
else {
    ?>
    <section class="blog">
        <div class="services__bg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
        </div>
        <div class="services__bg services__bg_opacity">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
        </div>
        <div class="block__content block__content_services">
            <div class="services-single__wrapper services-single__wrapper_blog">
                <?php the_title();?>
                <?php the_content();?>
            </div>
        </div>
    </section>
<?php
}
?>

<?php get_footer(); ?>

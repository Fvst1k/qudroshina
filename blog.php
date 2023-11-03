<?php
/*
Template Name: blog
*/
?>
<?php get_header() ?>
<section class="blog">
    <div class="blog__bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-background.png" alt="background">
    </div>
    <div class="blog__bg blog__bg_opacity">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/protector-hero.png" alt="bg">
    </div>
    <?php
    global $post;
    $myposts = get_posts([
        'numberposts' => -1,
        'category' => '19',
    ]);
    if ($myposts) { ?>
    <div class="block__content block__content_blog">
        <h2 class="blog__title tl__title">
            <?php the_title();?>
        </h2>
        <div class="blog__table">
            <?php
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>

                    <a class="blog__table-item" href="<?php the_permalink($post); ?>">
                        <div class="blog__item-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="blog__item-content">
                            <h3 class="blog__item-title"><?php the_title(); ?></h3>
                            <div class="blog__item-text">
                                <?php the_excerpt(); ?>
                            </div>
                            <time class="blog__item-time">
                                <?php
                                $mypost_date = the_time('j.F.Y');
                                echo $mypost_date;
                                ?>
                            </time>
                        </div>
                    </a>

                <?php
            }
            }
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>






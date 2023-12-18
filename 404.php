<?php
/*
Template Name:404-not-found
*/
?>
<?php get_header('404'); ?>
    <main class="main__not-found">
        <section class="not-found">
            <a href="<?php the_permalink(8); ?>" class="not-found__container">
                <h4 class="not-found__title">404</h4>
                <p class="not-found__text">
                    Такой страницы нет, зато есть много других...
                </p>
            </a>
        </section>
    </main>
<?php get_footer(); ?>
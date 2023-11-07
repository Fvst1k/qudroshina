<!-- Footer -->
<footer class="footer">
    <?php wp_head(); ?>
    <?php $front_id = get_option('page_on_front'); ?>
    <div class="block__content block__content_footer">
        <div class="header__row footer__row">
            <div class="header__logo hover_scale">
                <?php the_custom_logo(); ?>
            </div>
            <div class="header__menu_wrapper">
                <nav class="header__menu">
                    <?php wp_nav_menu() ?>
                </nav>
                <a class="footer__politics" href="#">Политика обработки персональных данных</a>
            </div>

                <a href="tel:<?php the_field('info-num-link', $front_id); ?>" class="header__links-phone hover_scale">
                    <p class="header-link header-link_footer"><?php the_field('info-num', $front_id); ?></p>
                </a>

        </div>
    </div>

    </div>
</footer>
<!-- /Footer -->
</div>


<?php wp_footer(); ?>
</body>
</html>
<!-- Footer -->
<footer class="footer">
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

            <a href="tel:+79999999999" class="header__links-phone hover_scale">
                <p class="header-link header-link_footer">+7 (812) 939-46-47</p>
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
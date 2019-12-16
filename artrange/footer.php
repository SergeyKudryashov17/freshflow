<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <a href="<?php echo get_field('link_vk_page'); ?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a href="<?php echo get_field('link_facebook_page'); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="<?php echo get_field('link_youtube'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="<?php echo get_field('link_instagram'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 d-md-block d-sm-none d-none relative"></div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="artrange">
                    <a href="https://artrange.ru/sozdanie-sajtov-pod-klyuch/" alt="Создание сайтов и презентаций" title="Создание сайтов и презентаций">
                        Разработка сайта <img src="<?php echo get_template_directory_uri() ?>/img/logo_artrange.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_template_part('template/yandex-metrika');
wp_footer();
?>
</body>
</html>
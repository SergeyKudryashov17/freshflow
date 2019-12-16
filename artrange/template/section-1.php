<div class="section" id="section-1">
    <video id="myVideo" loop muted data-autoplay width="100%" height="100%" playsinline>
        <source src="<?php echo get_template_directory_uri() ?>/img/dum.mp4" type="video/mp4">
    </video>
    <div class="layer">
        <h1 class="main_headline">
            <?php echo get_field('main_headline') ?>
        </h1>
        <div class="decs_headline">
            <?php echo get_field('caption_headline') ?>
        </div>
        <?php get_template_part('template/feedback-form'); ?>
    </div>
    <img class="scroll_icon" src="<?php echo get_template_directory_uri() ?>/img/scroll_icon.gif" alt="">
</div>
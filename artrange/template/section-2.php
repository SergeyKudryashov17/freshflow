<div class="section" id="section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
            <div class="col-md-8 col-sm-10 col-12">
                <div class="title_slide"><?php echo get_field('headline_slide2') ?></div>
            </div>
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
            <div class="col-md-8 col-sm-10 col-12">
                <div class="slider_video">
                    <?php
                    $videos = get_field('video-slider');
                    foreach ($videos as $video) {
                        echo '
                            <div class="videoItem">
                                <iframe width="100%" height="350" src="'.$video['videoItem'].'" frameborder="0" allowfullscreen></iframe>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
        </div>
    </div>
</div>
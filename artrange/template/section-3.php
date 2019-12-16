<div class="section" id="section-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-2 col-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-9 col-10">
                <h2 class="title_slide"><?php echo get_field('headline_slide3'); ?></h2>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 d-none"></div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-3 col-sm-2 col-2"></div>
            <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                <div class="slider_features">
                    <?php
                    $features = get_field('slider_features');
                    foreach ($features as $feature){
                        echo '
                            <div class="itemFeature">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-5 col-12">
                                        <span class="nameFeature">'.$feature['feature'].'</span>
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-sm-7 col-12">
                                        <img src="'.$feature['picture'].'">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </div>
</div>
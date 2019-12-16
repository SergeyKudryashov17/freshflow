<div class="section" id="section-5">
    <video id="myVideo2" loop muted data-autoplay playsinline>
        <source src="<?php echo get_template_directory_uri() ?>/img/Promo%202.mp4" type="video/mp4">
    </video>
    <div class="bg-shadow"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-md-10 col-sm-10 col-12">
                <div class="subtitle_slide"><?php echo get_field('headline_slide5') ?></div>
                <div class="slier_promo">
                    <?php
                    $services = get_field('slider_services');
                    foreach ($services as $service){
                        echo '
                            <div class="itemPromo">
                               <div class="wrp">
                                   <h2 class="title_slide">'.$service['name_service'].'</h2>
                                ';
                        if($service['buttons'][0]['acf_fc_layout'] == 'feedback_form'){
                            get_template_part('template/feedback-form');
                        }
                        else if($service['buttons'][0]['acf_fc_layout'] == 'button_link'){
                            echo '
                                   <div class="group_btn">
                                       <div class="BtnSend">
                                           <a href="'.$service['buttons'][0]['link_for_button'].'" target="_blank">'.$service['buttons'][0]['name_link_button'].'</a>
                                       </div>
                                   </div>
                            ';
                        }
                        echo '
                                </div>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </div>
</div>
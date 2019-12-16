<?php get_header(); ?>
    <div id="fullpage">
        <?php
        $struct_site = array();
        $block1 = get_field('first-block');
        $block2 = get_field('second-block');
        $block3 = get_field('third-block');
        $block4 = get_field('fourth-block');
        $block5 = get_field('fifth-block');
        $block6 = get_field('sixth-block');

        array_push(
            $struct_site,
            $block1[0]['acf_fc_layout'],
            $block2[0]['acf_fc_layout'],
            $block3[0]['acf_fc_layout'],
            $block4[0]['acf_fc_layout'],
            $block5[0]['acf_fc_layout'],
            $block6[0]['acf_fc_layout']
        );

        foreach ($struct_site as $item ){
            switch ($item) {
                case 'main_slide':
                    get_template_part('template/section-1');
                    break;
                case 'overview_hookah' :
                    get_template_part('template/section-2');
                    break;
                case 'features_hookah':
                    get_template_part('template/section-3');
                    break;
                case 'advantages':
                    get_template_part('template/section-4');
                    break;
                case 'services':
                    get_template_part('template/section-5');
                    break;
                case 'feedback':
                    get_template_part('template/section-6');
                    break;
            }
        }

        ?>
    </div>
<?php get_footer(); ?>
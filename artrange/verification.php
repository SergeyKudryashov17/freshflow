<?php
/*
 * Template Name: Заглушка Возраст
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Подтверждение возраста</title>
    <?php wp_head(); ?>
    <style>
        #verification {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 1010;
            color: #fff;
            text-align: center;
        }
        .center-text {
            font-size: 25px;
            height: 100%;
            transform: translate(-50%,0);
            position: absolute;
            top: 25%;
            left: 50%;
        }
        .center-text span {
            display: block;
            margin-top: 15px;
        }
        .error_message {
            display: none;
        }
    </style>
</head>
<body>
    <div id="verification">
        <div class="center-text">
            <div class="info_block_verif">
                <div>
                    <img src="<?php echo get_field('logo') ?>" style="width: 150px; display: block; margin: 0 auto;">
                    <img src="<?php echo get_field('name_comp') ?>" alt="Fresh Flow" class="logo_text">
                </div>
                <span><?php echo get_field('text_action'); ?></span>
                <div class="group_btn">
                    <div class="leftBtnSend">
                        <button>Да</button>
                    </div>
                    <div class="rightBtnSend">
                        <button>Нет</button>
                    </div>
                </div>
            </div>
            <div class="error_message">
                <span><?php echo get_field('error_text'); ?></span>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
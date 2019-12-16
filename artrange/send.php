<?php
    $phone = $_REQUEST['number'];
    if(!empty($phone)) {
        $to = 'Kiselevng@yandex.ru';
        $subject = 'Новая заявка с сайта Fresh FLow';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Fresh Flow <info@freshflow.ru    >\r\n";

        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Номер телефона: '.$phone.'</p>                                             
                    </body>
                </html>
                ';

        mail($to, $subject, $message, $headers);
    }
?>
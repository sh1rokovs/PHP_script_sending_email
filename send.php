    <?php
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
        $message = 'Имя: ' . $_POST['name'] . ' ';
        $message .= 'Телефон: ' . $_POST['phone'] . ' ';
      if(!empty($_POST['text'])) {
        $message = 'Текст: ' . $_POST['text'] . ' ';
      }
        $mailTo = "test@yandex.ru"; // Ваш e-mail
        $subject = "Письмо с сайта"; // Тема сообщения
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: test2@gmail.com \r\n";
        if(mail($mailTo, $subject, $message, $headers)) {
            echo "Спасибо, ".$_POST['name'].", мы свяжемся с вами в самое ближайшее время!"; 
        } else {
            echo "Сообщение не отправлено!"; 
        }
    }
    ?>
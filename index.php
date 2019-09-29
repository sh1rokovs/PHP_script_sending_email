<html>
<head>
<title>Форма заявки с сайта</title>
 
</head>
<body>
    <form id="feedback-form" action="">
      <input type="text" name="name" required placeholder="Ваше имя">
      <input type="tel" name="phone" required placeholder="Ваш телефон">
      <textarea name="text" placeholder="Ваш текст"></textarea>
      <input type="submit" name="submit" value="Отправить">
    </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>    $(document).ready(function () {
        $("form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
          type: "POST",
          url: '/send.php',
          data: formNm.serialize(),
          beforeSend: function () {
            // Вывод текста в процессе отправки
            $(formNm).html('<p style="text-align:center">Отправка...</p>');
          },
          success: function (data) {
            // Вывод текста результата отправки
            $(formNm).html('<p style="text-align:center">'+data+'</p>');
          },
          error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $(formNm).html(error);
          }
        });
        return false;
      });
    });
   </script>
</body>
</html>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>отправка писем с помощью функции php - mail()</title>
 </head> 
 <body>
...................... 
<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) { 
        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично 
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'test@test.ru'; 
        // $from - от кого 
        $from='test@test.ru'; 
        // функция, которая отправляет наше письмо. 
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
?> 
<form action="" method=post> 

<p>Вводный текст перед формой <p> 
              <div align="center"> 
              Teма<br /> 
              <input type="text" name="title" size="40"><br /> 
              Сообщение<br /> 
              <textarea name="mess" rows="10" cols="40"></textarea> 
              <br /> 
              <input type="submit" value="Отправить" name="submit"></div> 
</form> 
 </body>
</html>
Тег <input>

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег INPUT</title>
 </head>
 <body>

 <form name="test" method="post" action="input1.php">
  <p><b>Ваше имя:</b><br>
   <input type="text" size="40">
  </p>
  <p><b>Каким браузером в основном пользуетесь:</b><Br>
   <input type="radio" name="browser" value="ie"> Internet Explorer<Br>
   <input type="radio" name="browser" value="opera"> Opera<Br>
   <input type="radio" name="browser" value="firefox"> Firefox<Br>
  </p>
  <p>Комментарий<Br>
   <textarea name="comment" cols="40" rows="3"></textarea></p>
  <p><input type="submit" value="Отправить">
   <input type="reset" value="Очистить"></p>
 </form>

 </body>
</html>
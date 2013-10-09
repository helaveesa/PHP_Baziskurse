Тег <textarea>

Атрибуты
accesskey
Переход к полю с помощью сочетания клавиш.
autofocus
Автоматическое получение фокуса.
cols
Ширина поля в символах.
disabled
Блокирует доступ и изменение элемента.
form
Связывает текстовое поле с формой по её идентификатору.
maxlength
Максимальное число введенных символов.
name
Имя поля, предназначено для того, чтобы обработчик формы мог его идентифицировать.
placeholder
Указывает замещающийся текст.
readonly
Устанавливает, что поле не может изменяться пользователем.
required
Обязательное для заполнения поле.
rows
Высота поля в строках текста.
tabindex
Порядок перехода между элементами при нажатии на клавишу Tab.
wrap
Параметры переноса строк.

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег TEXTAREA</title>
 </head>
 <body>

  <form action="textarea1.php" method="post">
    <br><b>Введите ваш отзыв:</b>
    </br>
    <textarea rows="10" cols="45" name="text"></textarea>
    <input type="submit" value="Отправить">
  </form>

 </body>
</html>
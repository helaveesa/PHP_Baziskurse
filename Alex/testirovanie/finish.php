<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Тестирование</title>
</head>

<body>
Уважаемый, <?php echo $_GET[name]; ?>!<br>
Ваш результат:<br>
<?php
$prav=0; // счетчик правильных ответов
$neprav=0; // счетчик неправильных ответов
if($_GET[v1]==2) $prav++; else $neprav++; // если ответ на первый вопрос - Москва, увеличиваем счетчик правильных ответов, иначе добавляем единицу к неправильным
if($_GET[v2]==1) $prav++; else $neprav++; // аналогично с другими вопросами...
if($_GET[v3]==4) $prav++; else $neprav++;
echo "$prav правильных ответов <br> $neprav неправильных ответов";
?>
</body>
</html>

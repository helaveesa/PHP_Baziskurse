﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Подключение файлов</title>
</head>

<body>
<!-- когда я создаю какой-то проект на php то, главным файлом всегда будет файл index.php
в него уже в последующее время можно будет подключать фрагменты кода, так как
иногда проект разрастается до очень больших размеров и в нем становится сложно ориентироваться
для этого есть спец. функции в php см. IMG 
можно разбить файлы:
шапка сайта
подвал сайта
меню сайта
статьи из БД для сайта 
главный файл index.php, в который будет все это подключено и в нем же написан скелет 
расширение этих файлов должно быть .php к вопросу о безопасности сайта 

include - подключить файл
если эта функция не найдет файл, который нужно подключить то, она просто выведет предупреждение об этом в окне браузера и работа программы продолжится, и сама работа сайта
includ_once - подключить один раз

require - затребовать/ или обязательно подключить файл
если эта функция не найдет файл - она выведет фатальную ошибку и остановит работу веб-сайта
в случае, если в файле который нужно открыть лежит важная инфа - то лучше не дать
пользователю открыть файл, а сразу остановить всю работу, в целях безопасности
require_once - затребовать один раз

берут содержимое внешнего файла и вклеивают в то место, где была прописана инструкция-->

<?php

?>
</body>
</html>
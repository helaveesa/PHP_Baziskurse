﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Встроенные функции: PHPINFO</title>
</head>

<body>
<?php
/* Два типа встроенных функций: 1- функции встроенные в само ядро языка php, самые базовые функции, которые входят в любую установку языка, на любом хостинге; 2 -функции входящие в дополнительное расширение языка php, это отдельные библиотеки с функциями, которые подключаются к языку php в момент подключения к хостингу (например работа с архивами, работа с графикой, с pdf файлами и т.д.) этот набор будет различен, так как у всех разный хостинг. */

// рассмотрим встроенную функцию phpinfo, она дает инфу о версии php и о библиотеках, которые доступны и прочее

phpinfo();

?>
</body>
</html>
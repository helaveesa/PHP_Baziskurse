<!DOCTYPE html> 
<html>
 <head>
   <title>Sessions</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
/* протокол http не сохраняет постоянное соединение. протокол ftp - захожу на него, с помощью некой программы то,я обязательно указываю мыло, логин, пароль и пр. для доступа на ftp
следователньо я могу работать с этим протоколом,  и мое соединение сохраняется. но соединение может быть прервано в случае бездействия. при использовании протокола http, например при авторизации на сайте если не было сессий и куков, то мне бы каждый раз при переходе на новую стр. приходилось вновь вводить логин пароль и так далее */

// функция для сессии

session_start (); // стартует сессия ее нужно писать на каждой странице, где нужно сохранять авторизацию, для поддержания соединения
/* сессия будет проверять, а существует ли текущий идентификатор сессии (начата ли сессия) и подтверждение, что да существует, значит будем ее использовать
сессии можно передавать прямо в адресную строку, но лучше хранить в куках, так ссылка будет короче так правильнее, но если у пользователя куки будут отключены, тогда 
сессия не будет работать; сессии для обмена информацией между страницами */
$_SESSION['username'] = 'Helen'; // глобальный массив SESSION с его помощью можно записывать (присвоить) пару значение - данные
echo 'Hello,' . $_SESSION['username'] . ' '; // обращение к массиву выведет Привет Helen

// удаление сессии
unset ($_SESSION['username']); // функция unset удаляет переменные сессии и саму сессию
session_destroy (); // закрываем сессию (соединение) с помощью функции session_destroy 
/* используем удаление сессии, когда например юзер нажал кнопку выход */

?>
  </body> 
</html>
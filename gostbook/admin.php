<?php
	session_start ();
	if (isset ($_POST[s1])) {
			if ($_POST[lg] = "Testesteroid"	and $_POST[pwd] == "666") {		
				$_SESSION[admin] = "s1";
				header ("location: index.php");
			}
			else
			echo "Введен неверный логин или пароль";
		}
	# обязательно пишем эту функцию, если собираемся работать с сессиями
	# обработчик формы админа  сессии
	
# начинается с php кода, так как session_start должно быть помещено до вывода, а иначе ничего не будет работать
	if (isset ($_POST[s1])) {   # форма для админа
		echo "Введите Ваш Логин:<br> $_POST[lg]<br>";		
		echo "Введите Ваш Пароль:<br> $_POST[pwd]<br>";
		echo "<br>: $_POST[s1]";
	}
?>

<!DOCTYPE html> 
<html>
 <head>
   <title>Админка</title>
  <meta charset="utf-8">
  </head>
 <body>
 <!-- форма авторизации админа -->
 <form method = "post">
	<table cellspacing="0" border="2">
		<td><input type = "text" name = "lg"><br>Введите Ваш логин</td>
		<td><input type = "password" name = "pwd"><br>Введите Ваш пароль</td>
		<td><input type = "submit" name = "s1" value = "OK"><br></td>
 </form>
	
 </body> 
</html>
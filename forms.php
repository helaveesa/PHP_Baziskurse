<!DOCTYPE html> 
<html>
 <head>
   <title>Форма авторизации</title>
  <meta charset="utf-8">
  </head>
 <body>
 <table border = "1" width = "100">
	<tr>
		<td><form method = "post"></td>
		<td><input type = "text" name = "lg"><br></td>
		<td><input type = "password" name = "pwd"><br></td>
		<td>М <input type = "radio" name = "v" value="мужской"><br></td>
		<td>Ж <input type = "radio" name = "v" value="женский"><br></td>
		<td><select name = "strana"><br>
			<option value = "Россия"> Россия </option><br>
		</select><br></td>    
		<td><input type = "comment" name = "com"><br></td>
		<td><input type = "checkbox" name = "box"><br></td>
		<td><input type = "submit" name = "s1" value = "OK"><br></td>
	<?php
	if (isset ($_POST[s1])) {
	echo "Логин: $_POST[lg]";
	
	echo "Пароль: $_POST[pwd]";
	
	echo "Пол: $_POST[v]";
	
	echo "Страна: $_POST[strana]";	
	
	echo "Комментарий: $_POST[com]";
	
	echo "С условием согласен: $_POST[box]";
	
	echo "Условия?: $_POST[s1]";
	}
	?>
 </body> 
</html>
<!DOCTYPE html> 
<html>
 <head>
   <title>Передача переменных через формы HTML-страница с формой</title>
  <meta charset="utf-8">
  </head>
<body>
    <h1>Введите ваше имя</h1>

	<form method="post" action="handler.php">
	<input type="text" name="username">
	<input type="submit">
	</form>
    
<?php
/* Запрашивание данных формы с помощью PHP */

echo "<h1>Привет, " . $_POST["username"] . "</h1>";
  
?>
</body> 
</html>





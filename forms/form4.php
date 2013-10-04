<!DOCTYPE html> 
<html>
 <head>
   <title>Форма контактной информации</title>
  <meta charset="utf-8">
  </head>
<body>
    <h1>Форма контактной информации</h1>

	<form method="post" action="handler.php">
	<p>Субъект:<br /><input type="text" name="subject" /></p>
	<p>Сообщение:<br /><textarea name="message"></textarea></p>
	<input type="submit">
	</form>
    
<?php

	// Получатель (измените на ваш e-mail адрес)
	$strEmail = "name@mydomain.com";

	// Получить пользовательские вводы
	$strSubject = $_POST["subject"];
	$strMessage = $_POST["message"];

	mail($strEmail,$strSubject,$strMessage);
	echo "Mail Sent.";
	 
	
	?>
?>
</body> 
</html>





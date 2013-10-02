<!DOCTYPE html> 
<html>
 <head>
   <title>Форма авторизации голосовая книга</title>
  <meta charset="utf-8">
  </head>
 <body><form method = "post">
 <table border = "1" width = "100">
	<tr>
		<td></td>
		<td><input type = "text" name = "name"><br>Введите имя</td>
		<td><input type = "password" name = "email">Введите e-mail<br></td>   текстовое поле
		<textarea name = "txt"> </textarea> <!-- тег для сообщения -->
		<td><input type = "submit" name = "s1" value = "OK">Вход<br></td>
		</form>
<?php
	if (isset ($_POST[s1])) {
		$name = strip_tags ($_POST[name]);  
		$name = trim ($name);
		
		$email = strip_tags ($_POST[email]);
		$email = trim ($email);
		
		$txt = strip_tags ($_POST[txt]);
		$txt = trim ($txt);
		
		$txt = str_replace ("\n", "<br>", "$txt");

				// условие проверки на заполнение полей
	
		if (!empty ($name) and !empty ($email) and !empty ($txt)) {   
	    $f1 = fopen ("gost.txt", "a"); # a - самостоятельно создаст файл gost.txt
		fwrite ($f1, "$name \t $email \t $txt \n");
		fclose ($f1);
		}
	
	else echo "Не заполнены поля формы";
	}
		echo "Логин: $_POST[name]";	
		echo "Пароль: $_POST[email]";	
		echo "Текст сообщения: $_POST[text]";	
		echo "Вход: $_POST[s1]";
	
	
	// вывод всех сообщений
	
	$mas = file ("gost.txt");
	# перевернем массив
	
	$mas = array_reverse ($mas);
	
	# выводим циклом for, так как нам потом понадобится счетчик
	
	for ($i=0; $i < count($mas); $i++) {   # count — Подсчитывает количество элементов массива
		list ($n, $m, $t)= explode ("\t", $mas[$i]);		
		echo "$n $m <hr> $t <br><br>";
	}
	?>

 </body> 
</html>
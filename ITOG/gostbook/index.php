<?php
/*  обработчик формы: добавление сообщения данный код мы добавляем, чтобы увидеть работу обработчика для admin.php */
# функция session
session_start ();
	if (isset ($_SESSION[admin])) {
		echo "Hello, Admin! <a href = '?quit=ok'> Выход </a>";
		}

	if (isset ($_GET[quit])) { # ВЫХОД
		unset ($_SESSION[admin]);
		}
	if (isset ($_POST[s1])) {   
	# если нажата кнопка, isset() - Определяет, была ли установлена переменная значением отличным от NULL
    
		$name = strip_tags ($_POST[name]);  
		# strip_tags — Удаляет HTML и PHP-теги из строки (для безопасности и форматирования)
		
		$name = trim ($name); 
		# trim — Удаляет пробелы (или другие символы) из начала и конца строки
		
		$email = strip_tags ($_POST[email]);
		$email = trim ($email);
		
		$txt = strip_tags ($_POST[txt]);
		$txt = trim ($txt);
		
		$txt = str_replace ("\n", "<br>", "$txt"); 
		#\n- перевод строки; str_replace — Заменяет все вхождения строки поиска на строку замены т.е. в данном случае мы заменяем "<br>" на "\n" 
        
		if (!empty ($name) and !empty ($email) and !empty ($txt)) {     
		# условие проверки на заполнение полей  !empty— Проверяет, не пуста ли переменная
		
			$f1 = fopen ("gost.txt", "a");                            # открыть файл и дозаписать в него
 /*"a" - самостоятельно создаст файл gost.txt, 
 Открывает файл только для записи; 
помещает указатель в конец файла. 
Если файл не существует - пытается его создать*/

			fwrite ($f1, "$name \t $email \t $txt \n");               # fwrite — Бинарно-безопасная запись в файл
			fclose ($f1);                                            # Закрывает открытый дескриптор файла
/*Возвращает TRUE в случае успешного завершения 
 или FALSE в случае возникновения ошибки.*/
		}
	    else { 
		echo "Не заполнены поля формы";
		}
	}
		echo "Логин: $_POST[name]";	
		echo "Пароль: $_POST[email]";	
		echo "Текст сообщения: $_POST[text]";	
		echo "Вход: $_POST[s1]";
	
/* вывод всех сообщений*/

        $mas = file ("gost.txt");       
        $mas = array_reverse ($mas);  # перевернем массив, чтобы последнее сообщ отображалось первым
		
		$kol_on_page = 2;  #задаем ко-во сообщений на странице, если создано мало сообщений, то и вводим поменьшне число, а так можно любое число ввести
		$vsego = count($mas); #считаем сколько всего сообщений в гостевой книге
		$kol_page = ceil ($vsego /$kol_on_page); # вычисляем кол-во страниц
		
		if (isset ($_GET[page])) {
			$page = $_GET[page];
		}
		else { 
			$page = 1;
		}
			$ot = ($page - 1) * $kol_on_page;
			$do = $page * $kol_on_page - 1;
		
				
      	
		for ($i=0; $i < count($mas); $i++) {   # count — Подсчитывает количество элементов массива
         /* выводим наш массив циклом for так как нам в дальнейшем понадобится счетчик*/
											
		if ($i < $ot or $i > $do) continue;
		
			list ($n, $m, $t)= explode ("\t", $mas[$i]); 
/*   list- Присваивает переменным из списка значения подобно массиву; 
 explode — Разбивает строку с помощью разделителя, 
 в данном случае это разделитель по символу табуляции "\t"    */
			
		echo "$n $m";
			# ссылка на удаление конкретного сообщения, которое мы проидентифицируем по $i
			if (isset ($_SESSION[admin]))
				echo "<a href ='?del=$i'> Удалить</a>";
				echo"     <hr> $t <br><br>";
		}
		# обработчик удаления конкретного сообщения только для администратора, то есть использовать session
		if (isset ($_GET[del])) and isset($_SESSION[admin])){  #чтобы удалить нельзя было сообщ из адресной строки
			$mas = file ("gost.txt"); # разбиваем файл в массив
			$mas = array_reverse ($mas);  # переворачиваем массив
		
		 for ($i= 0; $i < count ($mas); $i++) {
			if ($i!=$_GET[del]) # если значение переменной $i неравно удаляемому номеру массива
			$mas2[] = $mas[$i];
		}
		
			$mas2 = array_reverse($mas2);
			$f1 = fopen ("gost.txt", "w");
		 foreach ($mas2 as $per) {
			fwrite ($f1, $per);
		}
		 fclose ($f1);
		}	
		# ссылка на удаление конкретного сообщения, которое мы проидентифицируем по $i
		if (isset ($_SESSION[admin]))
		for ($i = 1; $i <= $kol_page; $i++) {  
			echo "<a href = 'index.php?page=$i'> $i </a>   ";
		}
?>


<!DOCTYPE html>
<!-- помещаем форму авторизации в конец документа, 
так как у нас идет работа с сессиями, 
а sesion не будет работать, если эту функцию поместить после вывода --> 
<html>
 <head>
   <title>Форма авторизации голосовая книга</title>
  <meta charset="utf-8">
  </head>
  <body>
  
<!-- Форма авторизации -->
<h3>Форма авторизации голосовая книга</h3>
     <form method = "post">
        <table border = "1" width = "100">
         <tr>
            <td><p><input type = "text" name = "name" required placeholder = "Введите Ваше имя"></p></td><br>  
            <!-- одна строка - одно сообщение -->
            <td><textarea name = "email"> </textarea> Введите свой e-mail</td><br>         
            <td><textarea name = "txt"> </textarea> Введите сообщение</td><br>   
            <!-- тег для сообщения: текстовое поле -->
            <td><input type = "submit" name = "s1" value = "Вход"></td><br><br>
         </tr>
       </table>
	</form>
 </body> 
</html>
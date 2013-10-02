<!DOCTYPE html> 
<html>
 <head>
   <title>Форма авторизации голосовая книга</title>
  <meta charset="utf-8">
  </head>
  <body>
  
<!-- Форма авторизации -->
     <form method = "post">
        <table border = "1" width = "100">
         <tr>
            <td><p><input type = "text" name = "name" required placeholder = "Введите Ваше имя"></p></td><br>  <!-- одна строка - одно сообщение -->
            <td><textarea name = "email"> </textarea> Введите свой e-mail</td><br>         
            <td><textarea name = "txt"> </textarea> Введите сообщение</td><br>   <!-- тег для сообщения: текстовое поле -->
            <td><input type = "submit" name = "s1" value = "OK">Вход</td><br><br>
         </tr>
	</form>

    
<!-- обработчик формы: добавление сообщения-->
<?php
	if (isset ($_POST[s1])) {   # если нажата кнопка, isset() - Определяет, была ли установлена переменная значением отличным от NULL
    
		$name = strip_tags ($_POST[name]);  # strip_tags — Удаляет HTML и PHP-теги из строки (для безопасности и форматирования)
		$name = trim ($name); # trim — Удаляет пробелы (или другие символы) из начала и конца строки
		
		$email = strip_tags ($_POST[email]);
		$email = trim ($email);
		
		$txt = strip_tags ($_POST[txt]);
		$txt = trim ($txt);
		
		$txt = str_replace ("\n", "<br>", "$txt"); #\n- перевод строки; str_replace — Заменяет все вхождения строки поиска на строку замены т.е. в данном случае мы заменяем "<br>" на "\n" 
        
		if (!empty ($name) and !empty ($email) and !empty ($txt)) {     # условие проверки на заполнение полей  !empty— Проверяет, не пуста ли переменная
	    $f1 = fopen ("gost.txt", "a");                                  # открыть файл и дозаписать в него
                                                    /*"a" - самостоятельно создаст файл gost.txt, 
                                                    Открывает файл только для записи; 
                                                    помещает указатель в конец файла. 
                                                    Если файл не существует - пытается его создать*/
		fwrite ($f1, "$name \t $email \t $txt \n");                     # fwrite — Бинарно-безопасная запись в файл
		fclose ($f1);                                                   # Закрывает открытый дескриптор файла
                                                    /*Возвращает TRUE в случае успешного завершения 
                                                    или FALSE в случае возникновения ошибки.*/
    else 
        echo "Не заполнены поля формы";
	}
		echo "Логин: $_POST[name]";	
		echo "Пароль: $_POST[email]";	
		echo "Текст сообщения: $_POST[text]";	
		echo "Вход: $_POST[s1]";
	
/* вывод всех сообщений*/

        $mas = file ("gost.txt");       
        $mas = array_reverse ($mas);  # перевернем массив
      	
	for ($i=0; $i < count($mas); $i++) {   # count — Подсчитывает количество элементов массива
                                            /* выводим наш массив циклом for так как нам в дальнейшем понадобится счетчик*/
		list ($n, $m, $t)= explode ("\t", $mas[$i]); 
                                                    /*   list- Присваивает переменным из списка значения подобно массиву; 
                                                    explode — Разбивает строку с помощью разделителя, 
                                                    в данном случае это разделитель по символу табуляции "\t"    */
		echo "$n $m <hr> $t <br><br>";
	}
	?>
 </body> 
</html>
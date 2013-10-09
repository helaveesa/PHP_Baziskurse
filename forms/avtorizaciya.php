<!DOCTYPE html> 
<html>
 <head>
   <title>Форма авторизации</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
  <form method = "post">
  	  <tr>
		<td><input type = "text" name = "lg"><br>Введите Ваш логин</td>
        
		<td><input type = "password" name = "pwd"><br>Введите Ваш пароль</td>
        
		<td>М <input type = "radio" name = "v" value="мужской"><br></td>
		<td>Ж <input type = "radio" name = "v" value="женский"><br></td>
		
        <td>
        <select name = "strana"></br>
                <option value = "strn"> Австралия </option></br>
                <option value = "strn"> Барбадос </option></br>
                <option value = "strn"> Бельгия </option></br>
                <option value = "strn"> Бонэйр </option></br>
                <option value = "strn"> Бразилия </option></br>
                <option value = "strn"> Ватикан </option></br>
                <option value = "strn"> Великобритания </option></br>
                <option value = "strn"> Гвинея-Бисау </option></br>
                <option value = "strn"> Индия </option></br>
                <option value = "strn"> Испания </option></br>
                <option value = "strn"> Италия </option></br>
                <option value = "strn"> Кабо-Верде </option></br>
                <option value = "strn"> Мальта </option></br>
                <option value = "strn"> Непал </option></br>
                <option value = "strn"> Россия </option></br>
                <option value = "strn"> Сальвадор </option></br>
                <option value = "strn"> Сингапур </option></br>
                <option value = "strn"> Таиланд </option></br>
                <option value = "strn"> Уганда </option></br>
                <option value = "strn"> Фиджи </option></br>
                <option value = "strn"> Франция </option></br>
                <option value = "strn"> Япония </option></br>
		    </select><br>Выбрать страну из списка:
            </td>  
              
            <td><input type = "comment" name = "com"><br>Ваш комментарий</td>
            <td><input type = "checkbox" name = "box"><br>Согласен:</td>
            <td><input type = "submit" name = "s1" value = "OK"><br></td>
          </tr>
        </form>
	<?php
	if (isset ($_POST[s1])) {
	echo "Введите Ваш Логин: $_POST[lg]";
	
	echo "Введите Ваш Пароль: $_POST[pwd]";
	
	echo "Укажите Ваш Пол: $_POST[v]";
	
	echo "Ваша страна: $_POST[strana]";	
	
	echo "Комментарий: $_POST[com]";
	
	echo "С условием согласен: $_POST[box]";
	
	echo "Условия?: $_POST[s1]";
	}
	?>
 </body> 
</html>
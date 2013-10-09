<!DOCTYPE html> 
<html>
 <head>
   <title>Форма авторизации</title>
  <meta charset="utf-8">
  </head>
 <body>
 <h1>Форма личной информации</h1>
<form method = "post">
 <table border = "1" width = "100">
		<td><input type = "text" name = "lg">Введите логин<br></td>
		<td><input type = "password" name = "pwd">Введите пароль<br></td>
        
		<td>М <input type = "radio" name = "v" value="мужской"><br></td>
		<td>Ж <input type = "radio" name = "v" value="женский"><br></td>
        
        <td><select name = "strana">
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
		    </select>Выбрать страну из списка:</td>  
               
        <td><p>Комментарий:<br /><textarea name="com"></textarea></p></td>
		<td><input type = "checkbox" name = "box"><br></td>
		<td><input type = "submit" name = "s1" value = "OK"></br></td>
   </table>
 </form>
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
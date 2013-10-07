<?php
if(isset($_POST[ok])) // если нажата кнопка
{
	if($_POST[login]=="Admin" and $_POST[pass]=="123") // проверяем логин и пароль
	{
		session_start();// инициализируем механизм работы с сессиями
		$_SESSION[admin]="ok"; // устанавливаем переменную сессии и таким образом отмечаем администратора
		header("location:index.php"); // редирект на основной файл гостевой книги
	} else $error="Неверный логин/пароль!";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Вход администратора</title>
</head>

<body>
<table align="center"><tr><td>
<fieldset><legend>Вход администратора:</legend>
<form method="post">
<table>
<tr>
	<td>Логин:</td>
    <td><input type="text" name="login" /></td>
</tr>
<tr>
	<td>Пароль:</td>
    <td><input type="password" name="pass" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="ok" value="Вход" />
    <font color="#FF0000"><?php echo $error; ?></font></td>
</tr>
</table>
</form>
</fieldset>
</td></tr></table>
</body>
</html>
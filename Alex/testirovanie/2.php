<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Тестирование</title>
</head>

<body>
<form action="3.php">
Столица Украины:<br />
<input type="radio" name="v2" value="1" /> Киев<br />
<input type="radio" name="v2" value="2" /> Подпорожье<br />
<input type="radio" name="v2" value="3" /> Нью-Йорк<br />
<input type="radio" name="v2" value="4" /> Минск<br />
<input type="hidden" name="name" value="<?php echo $_GET[name]; ?>" />
<input type="hidden" name="v1" value="<?php echo $_GET[v1]; ?>" />
<input type="submit" name="ok" value="Далее" />
</form>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>������������</title>
</head>

<body>
<form action="2.php">
������� ��:<br />
<input type="radio" name="v1" value="1" /> �����-���������<br />
<input type="radio" name="v1" value="2" /> ������<br />
<input type="radio" name="v1" value="3" /> ����������<br />
<input type="radio" name="v1" value="4" /> �����������<br />
<input type="hidden" name="name" value="<?php echo $_GET[name]; ?>" />
<input type="submit" name="ok" value="�����" />
</form>
</body>
</html>

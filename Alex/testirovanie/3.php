<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>������������</title>
</head>

<body>
<form action="finish.php">
������� ��������:<br />
<input type="radio" name="v3" value="1" /> ���������<br />
<input type="radio" name="v3" value="2" /> ������<br />
<input type="radio" name="v3" value="3" /> �������<br />
<input type="radio" name="v3" value="4" /> �����<br />
<input type="hidden" name="name" value="<?php echo $_GET[name]; ?>" />
<input type="hidden" name="v1" value="<?php echo $_GET[v1]; ?>" />
<input type="hidden" name="v2" value="<?php echo $_GET[v2]; ?>" />
<!--������� ���� ����� ��������� ������ � �������� ������� �� ����� ���������� ��� ����� ���� ������. � ����� ������, ��� ���������� �� ���������� ������ ���, ����� �� ������ 1 � ����� �� ������ 2-->
<input type="submit" name="ok" value="�����" />
</form>
</body>
</html>

<?php
if(isset($_POST[ok])) // ���� ������ ������
{
	if($_POST[login]=="Admin" and $_POST[pass]=="123") // ��������� ����� � ������
	{
		session_start();// �������������� �������� ������ � ��������
		$_SESSION[admin]="ok"; // ������������� ���������� ������ � ����� ������� �������� ��������������
		header("location:index.php"); // �������� �� �������� ���� �������� �����
	} else $error="�������� �����/������!";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>���� ��������������</title>
</head>

<body>
<table align="center"><tr><td>
<fieldset><legend>���� ��������������:</legend>
<form method="post">
<table>
<tr>
	<td>�����:</td>
    <td><input type="text" name="login" /></td>
</tr>
<tr>
	<td>������:</td>
    <td><input type="password" name="pass" /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="ok" value="����" />
    <font color="#FF0000"><?php echo $error; ?></font></td>
</tr>
</table>
</form>
</fieldset>
</td></tr></table>
</body>
</html>
<?php
require("templates/header.php");
if($_POST[ok_reg])
{
	$sql="SELECT * FROM users WHERE email='$_POST[email]'";
	$rez=mysql_query($sql);
	if(mysql_num_rows($rez)==0)
	{
		if($_POST[pwd]==$_POST[pwd2])
		{
			$pwd=md5($_POST[pwd].SALT);
			$sql="INSERT INTO users(email,pwd,fio,phone) VALUES('$_POST[email]','$pwd','$_POST[fio]','$_POST[phone]')";	
			mysql_query($sql);
			$_SESSION[id]=mysql_insert_id();
			if($_SESSION[id]==1) 
			{
				$_SESSION[admin]=true;
				echo "<script>location.replace('admin/index.php');</script>";
			}
			echo "<script>location.replace('index.php');</script>";
		} else echo "������ �� ���������!";
	} else echo "����� ���� ��� ����!";
}
?>
<h2>�����������</h2>
<form method="post">
E-Mail: <input type="text" name="email"><br>
������: <input type="password" name="pwd"><br>
��� ���: <input type="password" name="pwd2"><br>
���: <input type="text" name="fio"><br>
�������: <input type="text" name="phone"><br>
<input type="submit" name="ok_reg" value="�����������">
</form>
<?php
require("templates/footer.php");
?>    
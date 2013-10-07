<?php
session_start(); // �������������� �������� ������ � ��������
if(isset($_GET[quit])) 
{
	unset($_SESSION[admin]); // ����� ��������������
	header("location:index.php");
}
if(isset($_POST[ok])) // ���������� ���������
{
	$name=trim(strip_tags($_POST[name])); // ������� ���� � ������� �� �����
	$email=trim(strip_tags($_POST[email])); // ������� ���� � ������� �� ������
	$txt=trim(strip_tags($_POST[txt]));	 // ������� ���� � ������� �� ������ ���������
	if(empty($name) or empty($email) or empty($txt)) // ���� ���-�� ��������� ������...
	{
		$error="�� ��������� ������������ ���� �����!";	// ��������� ����� ���������, ������� ��������� ��� ������
	} else // ���� ��� ��������� ���������...
	{
		$txt=str_replace("\n","<br>",$txt); // ������ ������� �������� ������ �� <br>
		$f1=fopen("gost.txt","a"); // ��������� ���� ��� ��������
		fwrite($f1,"$name\t$email\t$txt\n"); // ���������� ��� ��������� ��������� ����� ��������� (\t) � � ����� ������ \n ��� ����, ����� ��������� ��������� �������� � ����� ������
		fclose($f1); // ��������� ����
		header("location:index.php"); // ������ �������� ��� ������� ������� $_POST � ����� �������������� ���������� ���������� ��������� ��� ���������� ��������.
	}
}
if(isset($_GET[del]) and isset($_SESSION[admin])) // ���������� ��������
{
	$mas=file("gost.txt"); //��������� ���� � ������
	$mas=array_reverse($mas); // �������������� ������ ��� �������� � ��� ��������, ������� ��� �� ������
	for($i=0;$i<count($mas);$i++) // �������� ������ �� �������...
	{
		if($i!=$_GET[del]) $mas2[]=$mas[$i];	// � ������� ������ ������, ���� ������ ��� ��������, ����� ������� �� ����� ����������
	}
	$mas2=array_reverse($mas2); // ������ ������ ����� �������������� � �������� ���������
	$f1=fopen("gost.txt","w"); // ��������� ���� ��� ����������
	foreach($mas2 as $per) // � ������ ���������� ���� ������ ������
	{
		fwrite($f1,$per);	
	}
	fclose($f1); // ��������� ����
	header("location:index.php"); // ������� ������ $_GET
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>�������� �����</title>
</head>

<body>
<?php
if(isset($_SESSION[admin])) // �������� ������������� ��������������
	echo "����������, �����! <a href='?quit=ok'>�����</a>";
?>
<table align="center"><tr><td>
<fieldset><legend>��������:</legend>
<form method="post">
<table>
  <tr>
    <td>���:</td>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>�����:</td>
    <td><textarea name="txt"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="submit" name="ok" value="��������">
    <div style="color:red;"><?php echo $error; ?></div>
    </td>
  </tr>
</table>
</form>
</fieldset>
</td></tr></table>
<?php
$mas=file("gost.txt"); // ��������� ���� ��������� � ���������� ������ ������ � ��������� ������� �������
$mas=array_reverse($mas); // �������������� ������ ��� ����, ����� ��������� ��������� ������������ ������
$kol_on_page=10; // ������ ���������� ��������� �� ��������
$vsego=count($mas); // ��������� ������� ����� ��������� � �������� �����
$kol_pages=ceil($vsego/$kol_on_page); // �������� ���������� �������
if(isset($_GET[page])) $page=$_GET[page]; else $page=1; // �������� ����� ��������
$ot=($page-1)*$kol_on_page; // ������ ����� ���������
$do=$page*$kol_on_page-1; // ������ ����� ���������
for($i=0;$i<count($mas);$i++) // ��������� ���� ������� �� ���� ����������
{
	if($i<$ot or $i>$do) continue; // ���� ��������� �� ������ � �������� - ���������� ���� ��� ������
	list($n,$m,$s)=explode("\t",$mas[$i]); // ��������� ������ ������� ������� �� \t � ���������� ������������ ������ � ��������� ����������
	echo "$n $m ";
	if(isset($_SESSION[admin])) echo "<a href='?del=$i'>�������</a>"; // ����� ������ �� ��������
	echo "<hr> $s <br><br>";	// ����� ���������
}
for($i=1; $i<=$kol_pages;$i++) // ���� ������ ������ �� ��������
{
	echo "<a href='?page=$i'>$i</a> ";	 // ������ �������� ������� GET �������� �� ����� page, ������� �������� - ����� ��������
}
?>
</body>
</html>
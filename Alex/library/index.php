<?php
require("config.php");
if(isset($_GET[ok]))
{
	$sql="INSERT INTO books(nazv, author, god_izd, izdat) VALUES('$_GET[nazv]','$_GET[author]','$_GET[god_izd]','$_GET[izdat]')";
	mysql_query($sql);
}
if(isset($_GET[del]))
{
	$sql="DELETE FROM books WHERE id=$_GET[del]";
	mysql_query($sql);
}
if(isset($_GET[ok_edit]))
{
	$sql="UPDATE books SET author='$_GET[author]', nazv='$_GET[nazv]', god_izd='$_GET[god_izd]', izdat='$_GET[izdat]' WHERE id=$_GET[id]";
	mysql_query($sql);
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>���������� | �����</title>
</head>

<body>
<!------------����� ����������---------------->
<table align="center"><tr><td>
<fieldset><legend>�������� �����:</legend>
<form>
<table>
  <tr>
    <td>��������:</td>
    <td><input type="text" name="nazv"></td>
  </tr>
  <tr>
    <td>�����:</td>
    <td><input type="text" name="author"></td>
  </tr>
  <tr>
    <td>��� �������:</td>
    <td><select name="god_izd">
    <?php
    for($i=2013;$i>1901;$i--)
    {
        echo "<option value=$i>$i</option>";
    }
    ?>
    </select></td>
  </tr>
  <tr>
    <td>������������:</td>
    <td><input type="text" name="izdat"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="ok" value="��������"></td>
  </tr>
</table>
</form>
</fieldset></td></tr></table>
<form>
    <input type="text" name="search">
    <input type="submit" name="ok_search" value="�����!">
</form>
<?php
if(isset($_GET[sort])) $sort=$_GET[sort]; else $sort="id"; // ����������
if(isset($_GET[search]))	// �����
{
	$search=strtolower($_GET[search]); // �������� � ������ �������
	$usl = "WHERE LCASE(author) LIKE '%$search%'"; // ��������� SQL-������� ��� ������ � ������ �������� ������ ��������� ��������� �����
}
$kol_on_page=10;	// ���������� ��� ������������� ������
$sql="SELECT COUNT(id) FROM books";	// ������ �� ����� ���-�� ����
$vsego=mysql_result(mysql_query($sql),0); // ��������� ������� � $vsego
$kol_pages=ceil($vsego/$kol_on_page);	// ���-�� �������
if(isset($_GET[page])) $page=$_GET[page]; else $page=1;	// ����� ��������
$ot=($page-1)*$kol_on_page;	// ��������� ����� ���������
echo $sql="SELECT * FROM books $usl ORDER BY $sort LIMIT $ot,$kol_on_page";
/* � �������:
$usl - ������� ������ (���� ����������)
$sort - ������� ���������� (���� ����������, ����� id)
$ot, $kol_on_page - ����������� ������ ��������� ���� ��� ������� ������ ��������
*/
$rez=mysql_query($sql);
echo "<table border=1 cellpadding=10 cellspacing=0 align=center>
	<tr>
		<th><a href='?sort=id'>id</a></th>
		<th><a href='?sort=author'>�����</a></th>
		<th><a href='?sort=nazv'>��������</a></th>
		<th><a href='?sort=god_izd'>��� �������</a></th>
		<th><a href='?sort=izdat'>������������</a></th>
		<th>&nbsp;</th>
		</tr>";
while($books=mysql_fetch_array($rez))
{
	echo "<tr>
		<td>$books[id]</td>
		<td>$books[author]</td>
		<td>$books[nazv]</td>
		<td>$books[god_izd]</td>
		<td>$books[izdat]</td>
		<td><a href='?del=$books[id]'>�������</a> <a href='?edit=$books[id]'>���.</a></td>
		</tr>";	
}
echo "</table>";
for($i=1; $i<=$kol_pages; $i++)	// ����� ������-������� �������
{
	echo "<a href='?page=$i'>$i</a> ";	
}
if(isset($_GET[edit]))
{
	$sql="SELECT * FROM books WHERE id=$_GET[edit]";
	$rez=mysql_query($sql);
	$book=mysql_fetch_array($rez);
	?>
    <!------------����� ��������������---------------->
    <table align="center"><tr><td>
    <fieldset><legend>������������� �����:</legend>
    <form>
    <table>
      <tr>
        <td>��������:</td>
        <td><input type="text" name="nazv" value="<?php echo $book[nazv]; ?>"></td>
      </tr>
      <tr>
        <td>�����:</td>
        <td><input type="text" name="author" value="<?php echo $book[author]; ?>"></td>
      </tr>
      <tr>
        <td>��� �������:</td>
        <td><select name="god_izd">
        <?php
        for($i=2013;$i>1901;$i--)
        {
			if($i==$book[god_izd]) $sl="selected"; else $sl="";
            echo "<option value=$i $sl>$i</option>";
        }
        ?>
        </select></td>
      </tr>
      <tr>
        <td>������������:</td>
        <td><input type="text" name="izdat" value="<?php echo $book[izdat]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input type="submit" name="ok_edit" value="�������������">
        <input type="hidden" name="id" value="<?php echo $book[id]; ?>"></td>
      </tr>
    </table>
    </form>
    </fieldset></td></tr></table>
    <?php	
}
?>
</body>
</html>
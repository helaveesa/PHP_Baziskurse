<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>

<body>
<!-- ����� ������ -->
<form>
<input type = "text" name "search">
<input type = "submit" name "ok_search" value = "�����">
</form>
<!--����� ���������� �����-->
<h3>�������� �����:</h3>
	<form method="get">
	<td><input type = "text" name = "nazv"><br>��������:</td>
	<td><input type = "text" name = "author"><br>�����:</td>
    <td><input type = "text" name = "izdat"><br>������������:</td>
    <select name = "god_izd">
    <option value = "2013">2013</option>>
    </select>
    <td><input type="submit" name = "s1" value="��������" /></td>
    </form>
    
<?php
// ���� ���������� s1
if (isset ($_GET[s1])) {
	// ���������� �������� 
	$sql="DELET FROM books WHERE id=$_GET[del]";
	mysql_query($sql);
}
	// ���������� ��������������
	if (isset ($_GET[s1_edit])) {
		$sql="UPDATE books SET author='$_GET[author]', '$_GET[nazv]', '$_GET[god_izd]', '$_GET[izdat]' WHERE id=$_GET[id]";
	    mysql_query($sql);
	}
	
	// ���������� ���������� �����
	$sql="INSET INTO books (nazv, author, god_izd, izdat)
	VALUE ('$_GET[nazv]', '$_GET[author]', '$_GET[god_izd]', '$_GET[izdat]')";
	mysql_query($sql);
	
	// ����� �� �����
	echo "��������: $_POST[nazv]";
	echo "����� $_POST[autor]";
	echo "������������ $_POST[izdat]";
	// ���������� ������
	echo '<select name = "god_izd">';
	for ($i = 1920; $i<=2013; $i++) {
		echo "<option value = '$i' >$i</option>";
	}
	echo '</select>';
	

// �����
if (isset($_GET[search])) { 
	$search = strtolower ($_GET[search]);
	$usl = "WHERE LCASE (author) LIKE '%$search%'";
}


// ����������� �������� �����
require ("config.php");
if (isset($_GET[sort])) $x=$_GET[sort]; else $x="id";
echo $sql = "SELECT *FROM books $usl ORDER BY $x";
$rez = mysql_query($sql);

// ������ ���� �� ��
echo "<table border = 1 width = 100>
	<tr>
	<th><a href='?sort=id'> id </a></th>  
	<th><a href='?sort=author'>= author</a></th>  
	<th><a href='?sort=nazv'> nazv</a></th>  
	<th><a href='?sort=god_izd'> god_izd</a></th>  
	<th><a href='?sort=izdat'>izdat </a></th>
	<th>$nbsp</th>
	</tr> ";
 
while ($books = mysql_fetch_array ($rez))
{
	
	echo "<br><tr>
	<td>$books[id]</td>  
	<td>$books[author]</td>
	<td>$books[nazv]</td>
	<td>$books[god_izd]</td>
	<td>$books[izdat]</td>
	<td><a href ='?del= $books[id]'>�������</a> <a href ='?edit= $books[id]'>���.</a></td>
	</tr>";
	
}
echo '</table>';

// ���������� ��������������
if (isset ($_GET[edit])) {
	$sql="SELECT * FROM books WHERE id=$_GET[edit]";
	$rez= mysql_query($sql);
	$book=mysql_fetch_array($sql);
}
?>

<!--����� �������������� -->
<form method="get">
    <td>��������</td>
	<td><input type = "text" name = "nazv" value = "<?php echo $book[nazv]; ?>" />
    <td>�����:</td>
	<input type = "text" name = "author" value = "<?php echo $book[autor]; ?>" /> 
    <td>������������</td>
    <input type = "text" name = "izdat" value = "<?php echo $book[izdat]; ?>" /> 
    <td>��� �������</td>

    
<?php 
	echo '<td><select name = "god_izd">';
	for ($i = 2013; $i>=1920; $i--) {
		if ($i==$book[god_izd]) $sl="selected" ;
		else $sl="";
		echo "<option value = '$i' $sl>$i</option>";
	}

	'</select></td>';
  ?>  
    <input type="submit" name = "s1_edit" value="�������������" />
    <input type="hidden" name = "id" value="<?php echo $book[id]; ?>" /></td>
</form> 

</body>
</html>
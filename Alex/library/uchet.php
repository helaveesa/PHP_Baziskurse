<?php
require("config.php");
if(isset($_GET[ok]))	// добавление записи в uchet
{
	$date_s=date("Y-m-d",time()+14*24*60*60); // узнаем, что будет через 2 недели
	$sql="INSERT INTO uchet(id_chit,id_book,date_s) VALUES('$_GET[id_chit]','$_GET[id_book]','$date_s')";
	mysql_query($sql);	
}
if(isset($_GET[prodl]))
{
	$new_date_s=date("Y-m-d",time()+14*24*60*60); // узнаем, что будет через 2 недели
	$sql="UPDATE uchet SET date_s='$new_date_s' WHERE id=$_GET[prodl]";
	mysql_query($sql);
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Библиотека | Учет</title>
</head>

<body>
<form>
Кто: <select name="id_chit">
	<?php
	$sql="SELECT * FROM chitately ORDER BY fio";
	$rez=mysql_query($sql);
	while($chit=mysql_fetch_array($rez))
	{
		echo "<option value='$chit[id]'>$chit[fio]</option>";	
	}
	?>
</select><br>
Что: <select name="id_book">
	<?php
	$sql="SELECT * FROM books ORDER BY author";
	$rez=mysql_query($sql);
	while($books=mysql_fetch_array($rez))
	{
		echo "<option value='$books[id]'>$books[author] &quot;$books[nazv]&quot;</option>";	
	}
	?>
</select><br>
<input type="submit" name="ok" value="   OK   ">
</form>
<table border="1">
<tr>
	<th>Кто</th>
    <th>Что</th>
    <th>Когда</th>
    <th>&nbsp;</th>
</tr>
<?php
$sql="SELECT uchet.* , books.author, books.nazv, chitately.fio, chitately.phone, DATE_FORMAT(date_s,'%d.%m.%Y') AS date_f
FROM uchet, books, chitately
WHERE books.id = uchet.id_book
AND chitately.id = uchet.id_chit";
$rez=mysql_query($sql);
while($uchet=mysql_fetch_array($rez))
{
	echo "<tr>
			<td>$uchet[fio] ($uchet[phone])</td>
			<td>$uchet[author] &quot;$uchet[nazv]&quot;</td>
			<td>$uchet[date_f]</td>
			<td>
				<a href='?del=$uchet[id]'>сдать</a> 
				<a href='?prodl=$uchet[id]'>продлить</a>
			</td>
	      </tr>";	
}
?>
</table>
</body>
</html>
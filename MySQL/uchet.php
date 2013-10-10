<?php
require ("config.php");
if (isset ($_GET[s1])) {
	$date_s= date("Y-m-d", time() +14*24*60*60);
	$sql="INSERT INTO uchet (id_chit, id_book, date_s)
	VALUE ('$_GET[id_chit]', '$_GET[id_book]', '$_GET[date_s]')";
	mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Учет книг по пользователям</title>
</head>

<body>
<form>
<br>Читатель <select name = "id_chit">

<?php
$sql = "SELECT *FROM chitately  ORDER BY fio";
$rez = mysql_query($sql);
while ($chitately = mysql_fetch_array ($rez)) {
	echo "<option value '$chitately[id]'> $chitately[fio]</option>";
}
?>
</select>
Книги <select name = "id_book">
<?php
$sql = "SELECT *FROM books  ORDER BY author";
$rez = mysql_query($sql);
while ($books = mysql_fetch_array ($rez)) {
	echo "<option value '$books[id]'> $books[nazv]</option>";
}
?>
<td><input type="submit" name = "s1" value="Добавить" /></td>
</select>
</form>

<!-- таблица вывода книга-читатель -->
<br>
<br>
<?php
if (isset($_GET[sdat])) {
	$sdat = "DELET FROM uchet WHERE id=$_GET[uchet]";
	mysql_query($sql);
}

$sql = "SELECT uchet.*, books.author, books.nazv, chitately.fio, chitately.phone, 
DATE_FORMAT (date_s, '%d.%m.%Y') AS date_f  
FROM uchet, books, chitately 
WHERE books.id=uchet.id_book
AND chitately.id = uchet.id_chit";
$rez = mysql_query($sql);
while ($uchet = mysql_fetch_array ($rez)) {
	echo "<table border = 1 width = 100>
		<tr>
			<td>$uchet[fio] ($uchet[phone])</td>
			<td>$uchet[author] $quote; $uchet[nazv]$quote</td>
			<td>$uchet[date_f] </td>
			
			<td><a href = '?sdat = $uchet[$id]'>Сдать</a>
				<a href = '?prodl = $uchet[$id]'>Продлить</a>
			</td>			
		 </tr>";
}
?>
</body>
</html>
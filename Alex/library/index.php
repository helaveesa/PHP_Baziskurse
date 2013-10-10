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
<title>Библиотека | Книги</title>
</head>

<body>
<!------------ФОРМА ДОБАВЛЕНИЯ---------------->
<table align="center"><tr><td>
<fieldset><legend>Добавить книгу:</legend>
<form>
<table>
  <tr>
    <td>Название:</td>
    <td><input type="text" name="nazv"></td>
  </tr>
  <tr>
    <td>Автор:</td>
    <td><input type="text" name="author"></td>
  </tr>
  <tr>
    <td>Год издания:</td>
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
    <td>Издательство:</td>
    <td><input type="text" name="izdat"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="ok" value="Добавить"></td>
  </tr>
</table>
</form>
</fieldset></td></tr></table>
<form>
    <input type="text" name="search">
    <input type="submit" name="ok_search" value="Найти!">
</form>
<?php
if(isset($_GET[sort])) $sort=$_GET[sort]; else $sort="id"; // сортировка
if(isset($_GET[search]))	// поиск
{
	$search=strtolower($_GET[search]); // опускаем в нижний регистр
	$usl = "WHERE LCASE(author) LIKE '%$search%'"; // формируем SQL-условие для поиска в нижнем регистре автора вхождения поисковой фразы
}
$kol_on_page=10;	// переменные для постраничного вывода
$sql="SELECT COUNT(id) FROM books";	// запрос на общее кол-во книг
$vsego=mysql_result(mysql_query($sql),0); // результат запроса в $vsego
$kol_pages=ceil($vsego/$kol_on_page);	// кол-во страниц
if(isset($_GET[page])) $page=$_GET[page]; else $page=1;	// номер страницы
$ot=($page-1)*$kol_on_page;	// начальное число диапазона
echo $sql="SELECT * FROM books $usl ORDER BY $sort LIMIT $ot,$kol_on_page";
/* в запросе:
$usl - условие поиска (если существует)
$sort - условие сортировки (если существует, иначе id)
$ot, $kol_on_page - ограничение вывода диапазона книг для данного номера страницы
*/
$rez=mysql_query($sql);
echo "<table border=1 cellpadding=10 cellspacing=0 align=center>
	<tr>
		<th><a href='?sort=id'>id</a></th>
		<th><a href='?sort=author'>Автор</a></th>
		<th><a href='?sort=nazv'>Название</a></th>
		<th><a href='?sort=god_izd'>Год издания</a></th>
		<th><a href='?sort=izdat'>Издательство</a></th>
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
		<td><a href='?del=$books[id]'>удалить</a> <a href='?edit=$books[id]'>ред.</a></td>
		</tr>";	
}
echo "</table>";
for($i=1; $i<=$kol_pages; $i++)	// вывод ссылок-номеров страниц
{
	echo "<a href='?page=$i'>$i</a> ";	
}
if(isset($_GET[edit]))
{
	$sql="SELECT * FROM books WHERE id=$_GET[edit]";
	$rez=mysql_query($sql);
	$book=mysql_fetch_array($rez);
	?>
    <!------------ФОРМА РЕДАКТИРОВАНИЯ---------------->
    <table align="center"><tr><td>
    <fieldset><legend>Редактировать книгу:</legend>
    <form>
    <table>
      <tr>
        <td>Название:</td>
        <td><input type="text" name="nazv" value="<?php echo $book[nazv]; ?>"></td>
      </tr>
      <tr>
        <td>Автор:</td>
        <td><input type="text" name="author" value="<?php echo $book[author]; ?>"></td>
      </tr>
      <tr>
        <td>Год издания:</td>
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
        <td>Издательство:</td>
        <td><input type="text" name="izdat" value="<?php echo $book[izdat]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input type="submit" name="ok_edit" value="Редактировать">
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
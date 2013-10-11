<?php
require("../config.php");
if(!$_SESSION[admin]) die("Доступ запрещен!");
if($_GET[quit])
{
	unset($_SESSION[id]);
	unset($_SESSION[admin]);
	session_destroy();
	header("location:../index.php");
}
// если кнопка "добавить" нажата
if($_GET[ok_add])
{
	$sql="INSERT INTO category(nazv) VALUES('$_GET[nazv]')";
/* INSERT — оператор языка SQL, который позволяет добавить строки в таблицу, заполняя их значениями. Значения можно вставлять перечислением с помощью слова values и перечислив их в круглых скобках через запятую или оператором select.*/
	mysql_query($sql);
	header("location:category.php");
}
// удаление
if($_GET[del])
{
	$sql="DELETE FROM category WHERE id=$_GET[del]";
/* DELETE — в языках, подобных SQL, DML-операция удаления записей из таблицы. Критерий отбора записей для удаления определяется выражением where. В случае, если критерий отбора не определён, выполняется удаление всех записей.*/
	mysql_query($sql);
	header("location:category.php");
}
// редактирование или обновление, о чем и говорит запрос MySQL
if($_GET[ok_edit])
{
	$sql="UPDATE category SET nazv='$_GET[nazv]' WHERE id=$_GET[id]";
	mysql_query($sql);
	header("location:category.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Категории</title>
</head>

<body>
<!-- меню-ссылки на документы заказы, категории, товар, выход -->
<a href="index.php">ЗАКАЗЫ</a> 
<a href="category.php">Категории</a>
<a href="tovary.php">Товары</a>
<a href="?quit=ok">Выход</a>
<hr>
<?php
// редактирование обработчик
if($_GET[edit])
{
	$sql="SELECT * FROM category WHERE id=$_GET[edit]";
/* SELECT (англ., означает «выбрать») — оператор DML языка SQL, возвращающий набор данных (выборку) из базы данных, удовлетворяющих заданному условию.
В большинстве случаев, выборка осуществляется из одной или нескольких таблиц. В последнем случае говорят об операции слияния — JOIN. В тех СУБД, где реализованы представления (англ. view) и хранимые процедуры (англ. stored procedure), также возможно получение соответствующих наборов данных.
WHERE — используется для определения, какие строки должны быть выбраны или включены в GROUP BY*/
	$rez=mysql_query($sql);
	$cat=mysql_fetch_array($rez);
	// $cat - переменная категорий
	?>
    <form>
    <input type="text" name="nazv" value="<?php echo $cat[nazv]; ?>">
    <input type="hidden" name="id" value="<?php echo $cat[id]; ?>">
    <input type="submit" name="ok_edit" value="Сохранить">
    </form>
    <?php
} else
{
	?>
    <form>
    <input type="text" name="nazv">
    <input type="submit" name="ok_add" value="Добавить">
    </form>
	<?php
}
?>
<hr>
<ul>
	<?php
	$sql="SELECT * FROM category ORDER BY nazv";
	// запрос к БД MySQL
	
/* SELECT (англ., означает «выбрать») — оператор DML языка SQL, возвращающий набор данных (выборку) из базы данных, удовлетворяющих заданному условию.
В большинстве случаев, выборка осуществляется из одной или нескольких таблиц. В последнем случае говорят об операции слияния — JOIN. В тех СУБД, где реализованы представления (англ. view) и хранимые процедуры (англ. stored procedure), также возможно получение соответствующих наборов данных.
WHERE — используется для определения, какие строки должны быть выбраны или включены в GROUP BY.
ORDER BY — используется для определения, какие столбцы используются для сортировки результирующего набора данных. 
DESC результат будет отсортирован в обратном порядке (Z-A) */
	$rez=mysql_query($sql);
	while($cat=mysql_fetch_array($rez))
	{
		// ссылки на удаление и редактирование
		echo "<li>$cat[nazv] <a href='?edit=$cat[id]'>ред.</a> <a href='?del=$cat[id]'>удалить</a></li>";
	}
	?>
</ul>
</body>
</html>
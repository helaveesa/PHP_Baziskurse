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
if($_POST[ok_add])
{
	$sql="INSERT INTO tovary(nazv,cena,id_cat,spec,opis,photo) VALUES('$_POST[nazv]','$_POST[cena]','$_POST[id_cat]','$_POST[spec]','$_POST[opis]','i.jpeg')";
/* INSERT — оператор языка SQL, который позволяет добавить строки в таблицу, заполняя их значениями. Значения можно вставлять перечислением с помощью слова values и перечислив их в круглых скобках через запятую или оператором select.*/
	mysql_query($sql);
	if($_FILES[photo][name]) // условие: $_FILES-Переменные файлов, загруженных по HTTP
	{
		$id=mysql_insert_id();
		// mysql_insert_id --  Возвращает ID, сгенерированный при последнем INSERT-запросе
		
		list($x,$ext)=explode("/",$_FILES[photo][type]);
		// list --  Присвоить переменным из списка значения подобно массиву
		// explode -- Разбивает строку на подстроки
		
		if($ext=="pjpeg") $ext="jpeg"; // сравнение
		
		move_uploaded_file($_FILES[photo][tmp_name],"../photos/$id.$ext");
		// move_uploaded_file() - Перемещает загруженный файл в новое место
		
		$sql="UPDATE tovary SET photo='$id.$ext' WHERE id=$id";
//в таблице товары назначить статус такой-то в строке с id таким-то
// tovary- <объект> — объект, над которым выполняется действие (таблица или представление)
// UPDATE — оператор языка SQL, позволяющий обновить значения в заданных столбцах табл.
/*SET — после ключевого слова должен идти список полей таблицы, которые будут обновлены и непосредственно сами новые значения в виде
имя поля="значение" <присваивание> — присваивание, которое будет выполняться при каждом выполнении условия <условие>, или для каждой записи, если отсутствует раздел WHERE */
// WHERE <условие> — условие выполнения команды

	
/* В случаях (INSERT, UPDATE, DELETE, DROP, и т.п.), mysql_query() возвращает TRUE в случае успешного запроса и FALSE в случае ошибки. Значение не равное FALSE говорит о том, что запрос был выполнен успешно. Он не говорит о количестве затронутых или возвращённых рядов. Вполне возможна ситуация, когда успешный запрос не затронет ни одного ряда.*/
		mysql_query($sql);
	}
	header("location:tovary.php");
}
// удаление
if($_GET[del])
{
	$sql="DELETE FROM tovary WHERE id=$_GET[del]";
/* DELETE — в языках, подобных SQL, DML-операция удаления записей из таблицы. Критерий отбора записей для удаления определяется выражением where. В случае, если критерий отбора не определён, выполняется удаление всех записей.*/
	mysql_query($sql);
	header("location:tovary.php");
}
// редактирование
if($_POST[ok_edit])
{
	$sql="UPDATE tovary SET nazv='$_POST[nazv]', cena='$_POST[cena]', opis='$_POST[opis]', id_cat='$_POST[id_cat]', spec='$_POST[spec]' WHERE id=$_POST[id]";
	mysql_query($sql);
	if($_FILES[photo][name])
	{
		$id=$_POST[id];
		list($x,$ext)=explode("/",$_FILES[photo][type]);
		if($ext=="pjpeg") $ext="jpeg";
		move_uploaded_file($_FILES[photo][tmp_name],"../photos/$id.$ext");
		$sql="UPDATE tovary SET photo='$id.$ext' WHERE id=$id";
		mysql_query($sql);
	}
	header("location:tovary.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Категории</title>
</head>

<body>
<a href="index.php">ЗАКАЗЫ</a> 
<a href="tovary.php">Категории</a>
<a href="tovary.php">Товары</a>
<a href="?quit=ok">Выход</a>
<hr>
<?php
if($_GET[edit])
{
	$sql="SELECT * FROM tovary WHERE id=$_GET[edit]";
/* SELECT (англ., означает «выбрать») — оператор DML языка SQL, возвращающий набор данных (выборку) из базы данных, удовлетворяющих заданному условию.
В большинстве случаев, выборка осуществляется из одной или нескольких таблиц. В последнем случае говорят об операции слияния — JOIN. В тех СУБД, где реализованы представления (англ. view) и хранимые процедуры (англ. stored procedure), также возможно получение соответствующих наборов данных.
WHERE — используется для определения, какие строки должны быть выбраны или включены в GROUP BY*/
	$rez=mysql_query($sql);
	$tov=mysql_fetch_array($rez);
/*mysql_fetch_array --  Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба*/
	?>
    <form method="post" enctype="multipart/form-data">
<!-- это составной тип содержимого, чаще всего использующийся для отправки HTML-форм с бинарными (не-ASCII) данными методом POST протокола HTTP. Указывается в поле заголовка Content-Type (тип содержимого) и следует правилам для составных MIME-данных в соответствии с RFC 2045 -->

    Название: <input type="text" name="nazv" value="<?php echo $tov[nazv]; ?>"><br>
    Категория: <select name="id_cat">
    			<?php
				$sql="SELECT * FROM category";
				$rez=mysql_query($sql);
				while($cat=mysql_fetch_array($rez))
				{
					if($cat[id]==$tov[id_cat]) $sl="selected"; else $sl="";
					// условие со сравнением
					echo "<option value='$cat[id]' $sl>$cat[nazv]</option>";
				}
				?>
    		   </select><br>
	Цена: <input type="text" name="cena" value="<?php echo $tov[cena]; ?>"> р.<br>
	Описание: <textarea name="opis"><?php echo $tov[opis]; ?></textarea><br>
	Фото: <input type="file" name="photo"><br>
	<input type="checkbox" name="spec" value="1" <?php if($tov[spec]) echo "checked"; ?>> Спецпредложение<br>
    <input type="hidden" name="id" value="<?php echo $tov[id]; ?>">
    <input type="submit" name="ok_edit" value="Редактировать">
    </form>
    <?php
} else
{
	?>
    <form method="post" enctype="multipart/form-data">
    Название: <input type="text" name="nazv"><br>
    Категория: <select name="id_cat">
    			<?php
				$sql="SELECT * FROM category";
				$rez=mysql_query($sql);
				while($cat=mysql_fetch_array($rez))
				{
					echo "<option value='$cat[id]'>$cat[nazv]</option>";
				}
				?>
    		   </select><br>
	Цена: <input type="text" name="cena"> р.<br>
	Описание: <textarea name="opis"></textarea><br>
	Фото: <input type="file" name="photo"><br>
	<input type="checkbox" name="spec" value="1"> Спецпредложение<br>
    <input type="submit" name="ok_add" value="Добавить">
    </form>
	<?php
}
?>
<hr>
<ul>
	<?php
	$sql="SELECT * FROM tovary ORDER BY nazv";
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
<?php
//-------------ЗАГРУЗКА ФОТО-------------------------
if(isset($_POST[ok]))
{
	if($_FILES[photo]['size']<=2*1024*1024) // если размер файла подходящий
	{
		if(stripos($_FILES[photo][type],"image")!==false) // отсеиваем все ненужные файлы
		{
			$d=opendir("photos"); // открываем папку photos
			$max=0; // задаем начальное значение максимума
			while($file=readdir($d)) // читаем папку
			{
				list($n,$b)=explode(".",$file); // отсеиваем только имена файлов
				if($n>$max) $max=$n;	// и сравниваем их с максимумом. Если имя файла численно больше текущего максимума - переписываем значение максимума
			}
			closedir($d); // закрываем папку
			$name=$max+1; // увеличиваем максимум на 1 - это и будет будущее имя файла
			list($x,$ext)=explode("/",$_FILES[photo][type]); // получаем расширение из MIME-типа файла
			if($ext=="pjpeg") $ext="jpeg"; 
			move_uploaded_file($_FILES[photo][tmp_name],"photos/$name.$ext"); // и загружаем клиентский файл на сервер в папку photos
			header("location:index.php");
		} else $error="Недопустимый формат файла!";
	} else $error="Превышен размер файла!";
}
// -----------------УДАЛЕНИЕ ФОТО-----------------------
if(isset($_GET[del]))
{
	unlink("photos/$_GET[del]");
	header("location:index.php");	
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Фотогалерея</title>
</head>

<body>
<center>
<?php
//---------------ВЫВОД ФОТОГРАФИЙ-----------------------
$d=opendir("photos"); // открываем папку photos
while($file=readdir($d)) // читаем ее
{
	list($name,$ext)=explode(".",$file);
	if($ext=="jpg" or $ext=="gif" or $ext=="png" or $ext=="jpeg")
	{
		$photos[]=$file;	// только нужные файлы записываются в массив $photos
	}
}
closedir($d); // закрываем папку
$kol_on_page=4; // задаем количество фото на странице
$vsego=count($photos); // вычисляем сколько всего фото
$kol_pages=ceil($vsego/$kol_on_page); // вычислям количество страниц
if(isset($_GET[page])) $page=$_GET[page]; else $page=1; // получаем номер страницы
$ot=($page-1)*$kol_on_page; // первое число диапазона
$do=$page*$kol_on_page-1; // второе число диапазона
echo "<table>";
for($i=0;$i<count($photos);$i++) // запускаем цикл прохода по всему массиву имен фотографий
{
	if($i<$ot or $i>$do) continue; // если фото НЕ входит в диапазон - продолжаем цикл без вывода
	if($i%2==0) echo "<tr>"; // если номер фото - четный выводим начало строки
	echo "<td align=center><img src='photos/$photos[$i]' width='200'><br />
<a href='?del=$photos[$i]'>удалить</a></td>";
	if($i%2==1) echo "</tr>"; // если номер фото - нечетный закрываем строку
}
echo "</table>";
if($kol_pages>1) // если кол-во страниц больше одной
{
	for($i=1; $i<=$kol_pages;$i++) // цикл вывода ссылок на страницы
	{
		if($i==$page) echo "<b>$i</b> "; // если номер страницы равен текущей - выводим его без ссылки полужирным начертанием
		else echo "<a href='?page=$i'>$i</a> ";	 // ссылки отсылают методом GET параметр по имени page, имеющий значение - номер страницы
	}
}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" name="ok" value="Загрузить"><br>
<font color="#FF0000"><?php echo $error; ?></font>
</form>
</center>
</body>
</html>
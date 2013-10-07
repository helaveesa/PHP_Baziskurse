<?php
if(isset($_COOKIE[golos])) // если существует кука...
{
	// вывод
	$f1=fopen("golos.txt","r"); // открываем файл для чтения
$str=fread($f1,filesize("golos.txt")); // читаем его в $str
fclose($f1); // закрываем файл
$mas=explode(":",$str); // разбиваем строку в массив
$max=0; // максимум=0
foreach($mas as $per)
{
	if($per>$max) $max=$per;	// если элемент массива больше, чем текущий максимум, мы его присваиваем максимуму
}
foreach($mas as $per) // цикл создания массива ширин в процентном отношении к максимуму
{
	$wdt[]=$per*100/$max;	
}
echo "<table width='400'>
  <tr>
    <td>Отлично:</td>
    <td width=100%><div style='width:$wdt[0]%; background:red;'>&nbsp;</div></td>
    <td>$mas[0]</td>
  </tr>
  <tr>
    <td>Хорошо:</td>
    <td><div style='width:$wdt[1]%; background:yellow;'>&nbsp;</div></td>
    <td>$mas[1]</td>
  </tr>
  <tr>
    <td>Нормально:</td>
    <td><div style='width:$wdt[2]%; background:green;'>&nbsp;</div></td>
    <td>$mas[2]</td>
  </tr>
  <tr>
    <td>Плохо:</td>
    <td><div style='width:$wdt[3]%; background:blue;'>&nbsp;</div></td>
    <td>$mas[3]</td>
  </tr>
  <tr>
    <td>Ужасно:</td>
    <td><div style='width:$wdt[4]%; background:cyan;'>&nbsp;</div></td>
    <td>$mas[4]</td>
  </tr>
</table>
";
} else // если ее нет...
{
	if(isset($_GET[ok])) // если была нажата кнопка...
	{
		// ДОБАВЛЕНИЕ
		$f1=fopen("golos.txt","r"); // открываем файл для чтения
		$str=fread($f1,filesize("golos.txt")); // читаем его в $str
		fclose($f1); // закрываем файл
		$mas=explode(":",$str); // разбиваем строку в массив
		$golos=$_GET[golos]; // получаем значение из формы
		$mas[$golos]++; // и увеличиваем на 1 соответствующее значение массива
		$str=implode(":",$mas); // собираем массив обратно в строку
		$f1=fopen("golos.txt","w"); // открываем файл для перезаписи. При этом все стирается...
		fwrite($f1,$str); // и записываем в чистый файл новое значение счетчика
		fclose($f1); // закрываем файл
		setcookie("golos","ok"); // ставим куку
		header("location:index.php");// КОНЕЦ ДОБАВЛЕНИЯ
	} else // если нет куки и кнопка не нажималась...
    {
		// форма
		echo '<form>
Оцените мой сайт:<br />
<input type="radio" name="golos" value="0" checked="checked" /> Отлично<br />
<input type="radio" name="golos" value="1" /> Хорошо<br />
<input type="radio" name="golos" value="2" /> Нормально<br />
<input type="radio" name="golos" value="3" /> Плохо<br />
<input type="radio" name="golos" value="4" /> Ужасно<br />
<input type="submit" name="ok" value="Оценить" />
</form>';
	}
}
?>
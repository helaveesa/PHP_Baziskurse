<?php
if (isset ($_GET[del])) {		
		unlink ("photos/$_GET[del]");
		header ("location:indexph.php");
	}
# РћР±СЂР°Р±РѕС‚С‡РёРє 
	if (isset ($_POST[z1])) {
		if($_FILES[photo][size] <= 2*1024*1024) {  #РµСЃР»Рё СЂР°Р·РјРµСЂ С„Р°Р№Р»Р° РїРѕРґС…РѕРґСЏС‰РёР№ 
		if (stripos ($_FILES[photo][type], "image") !== false)  #РїРѕРёСЃРє РґРёСЂРµРєС‚РѕСЂРёРё image, С‡С‚РѕР±С‹ РїРѕ РЅРµР№ РѕС‚СЃРµРёРІР°С‚СЊ РЅРµРЅСѓР¶РЅС‹Рµ С„Р°Р№Р»С‹
		# СѓРЅРёРєР°Р»СЊРЅРѕСЃС‚СЊ РёРјРµРЅРё С„Р°Р№Р»Р° Рё РѕС‚РєСЂС‹С‚РёРµ РїР°РїРєРё, С‡С‚РѕР±С‹ Р·Р°РїРёСЃР°С‚СЊ С‚СѓРґР° РЅРѕРІС‹Р№ С„Р°Р№Р»
			{
			$d = opendir ("photos"); #РѕС‚РєСЂС‹РІР°РµРј РїР°РїРєСѓ
			$max=0; # Р·Р°РґР°РµРј РїРµСЂРІРѕРЅР°С‡Р°Р»СЊРЅРѕ РјР°РєСЃРёРјР°Р»СЊРЅРѕРµ Р·РЅР°С‡РµРЅРёРµ
			while ($file = readdir ($d)) {  # С‡С‚РµРЅРёРµ РїР°РїРєРё
				list ($n, $t)= explode (".", $file); # СЃСЂР°РІРЅРёРІР°РµРј С‡РёСЃР»Рѕ СЃ РјР°РєСЃРёРјСѓРјРѕРј, РµСЃР»Рё РёРјСЏ С‚РµРєСѓС‰ С„Р°Р№Р»Р° Р±РѕР»СЊС€Рµ СЃРѕ СЃСЂР°РІРЅРёРІР°РµРјС‹Рј, С‚Рѕ РїРµСЂРµРїРёСЃС‹РІР°РµРј Р·РЅР°С‡РµРЅРёРµ РјР°РєСЃРёРјСѓРјР°
					if ($n > $max) $max = $n;
				}
				closedir ($d); # Р·Р°РєСЂС‹РІР°РµРј РїР°РїРєСѓ
				$name = $max +1; # СѓРІРµР»РёС‡. РїРµСЂРµРј. РёР°РєСЃРёРјСѓРјР° РЅР° РµРґРёРЅРёС†Сѓ, СЌС‚Рѕ Рё Р±СѓРґРµС‚ РёРјСЏ РЅРѕРІРѕРіРѕ С„Р°Р№Р»Р°
				
				list ($x, $ext) = explode ("/", $_FILES[photo][type]); # РїРѕР»СѓС‡Р°РµРј СЂР°С€РёСЂРµРЅРёРµ С„Р°Р№Р»Р° РёР· MIME С‚РёРїР°, СЂР°Р·Р±РёС‚СЊ С„Р°Р№Р» РїРѕ СЃР»РµС€Сѓ
				// СѓСЃР»РѕРІРёРµ РѕС‚СЃРµРёРІР°РЅРёСЏ
					if ($ext == "pjpeg") $ext = "jpeg";
					
				move_uploaded_file($_FILES[photo][tmp_name], "photos/$name.$ext");  
				# tmp_name- РёРјСЏ РІСЂРµРјРµРЅРЅРѕР№ РїР°РїРєРё РєСѓРґР° Р±СѓРґРµС‚ Р·Р°РіСЂСѓР¶РµРЅРѕ РёР·РѕР±СЂР°Р¶РµРЅРёРµ
				# Р·Р°РіСЂСѓР¶Р°РµРј С„Р°Р№Р» РЅР° СЃРµСЂРІРµСЂ РІ РїР°РїРєСѓ photos
			} else 
			echo "Недопустимый формат файла";
		} else
		echo "Превышен размер файла";
	}
	
	/* создание фотогалереи */
	
?>

<!DOCTYPE html>
<html>
 <head>
   <title>Загрузка файлов</title>
  <meta charset="utf-8">
  </head>
  <body>
  
	<!-- Р¤РѕСЂРјР° Р·Р°РіСЂСѓР·РєРё -->
     <form method = "post" enctype = "multipart/form-data"> <!-- form-data пишется, через дефис -->
        <table border = "1" width = "100">
         <tr>
            <td><input type = "file" name = "photo"></td><br>          
            <td><input type = "submit" name = "z1" value = "Загрузить"></td><br><br>
         </tr>
        </table>
	</form>
	<?php
	$d = opendir ("photos"); # открываем папку photos
	
	# читаем ее
	while ($file = readdir ($d)) {
		list ($n, $t) = explode (".", $file);
		if ($t == "jpeg" or $t == "gif" or $t == "png" or $t == "jpg")
			$mas[] = $file;
		}
		closedir ($d);
		// постраничный вывод фотографий
		$kol_on_page = 4;
		$vsego = count($mas); #считаем сколько всего сообщений в гостевой книге
		$kol_page = ceil ($vsego /$kol_on_page); # вычисляем кол-во страниц
		
		if (isset ($_GET[page])) {
			$page = $_GET[page];
		}
		else { 
			$page = 1;
		}
			$ot = ($page - 1) * $kol_on_page;
			$do = $page * $kol_on_page - 1;
			
	
		
				
    echo "<table cols="4" width="1" border="2">";
		for ($i=0; $i < count($mas); $i++) {   # count — Подсчитывает количество элементов массива
      /* выводим наш массив циклом for так как нам в дальнейшем понадобится счетчик*/
											
		if ($i < $ot or $i > $do) continue;
		
		if ($i%2==0) echo "<tr>";
		// если номер фото четный выводим начало строки
		
		// формируем таблицу
		echo "<td align= center><img src='photos/$mas[$i]' width = '200' <br />
				<a href = '?del=$mas[$i]'>Удалить</a><br></td>";
				
		if ($i%2==1) echo "</tr>";
	}
	echo "</table>";
	?>
 </body> 
</html>
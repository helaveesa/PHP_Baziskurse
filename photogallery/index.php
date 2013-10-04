<!DOCTYPE html>
<html>
 <head>
   <title>Форма загрузки и обработчик</title>
  <meta charset="utf-8">
  </head>
  <body>
  
<!-- Форма загрузки -->
     <form method = "post" enctype = "multipart/form_data">
        <table border = "1" width = "100">
         <tr>
            <td><input type = "file" name = "photo"></td><br>          
            <td><input type = "submit" name = "z1" value = "OK">Загрузить файл</td><br><br>
         </tr>
	</form>
	
	<!-- Обработчик -->
<?php
	if (isset ($_POST[z1])) {
	move_uploaded_file($_FILES[photo][tmp_name]), 'photos/1.jpg'  # tmp_name- имя временной папки куда будет загружено изображение
	}
?>
 </body> 
</html>
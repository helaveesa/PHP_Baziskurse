<?php
 
  // ПУТЬ к папке с изображениями ОТНОСИТЕЛЬНЫЙ
  $imgDir   = 'img/';
   
  // ИМЯ папки с превьюшками 
  //(должна находиться внутри папки с изображениями):
  $thumbDir = 'thumbs/';
   
  //  Получает файлы, расположенные в директории 
  //  @param $path : String - путь к директории с файлами, 
  //  return Array - индексный массив, содержащий файлы
  function getFiles(/*string*/$path)
  {
    // результат выполнения функции is_dir кэшируется,
    // поэтому сбрасываем кэш.
    clearstatcache();
     
    $files = scandir($path);
     
    for($i = 0, $length = count($files); $i < $length; $i++)
    {
      // Исключаем из списка директории:
      if( is_dir($path.$files[$i]) )
      {
        unset($files[$i]);
      }
    }
    return $files; //array
  }
?>
 
<!DOCTYPE HTML>
<html lang="ru">
  <head>
   
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
  <title>Пример галереи</title>    
  <style type="text/css">
  .small, #full_img{margin:4px; border: solid 1px orange; padding: 5px}
  </style>
   
  </head>
   
  <body> 
    <div >
      <p><img id="full_img" src="<?php echo $imgDir.( array_shift( getFiles($imgDir) ) ) ?>" width="400px" height="400px" /></p>
      <?php
        foreach( getFiles($imgDir) as $file )
        {
          echo '<img class="small" src="'.$imgDir.$thumbDir.$file.'" width="50px" height="50px" onclick="document.getElementById(\'full_img\').src = \''.$imgDir.$file.'\'" />';
        }
      ?>
    </div>      
  </body>
   
</html>
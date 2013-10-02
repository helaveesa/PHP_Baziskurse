<!DOCTYPE html> 
<html>
 <head>
   <title>List2</title>
  <meta charset="utf-8">
  </head>
 <body>
 <option value = "2012"> 1920 </option>
 <?php
echo '<select name = "god">';
for ($i=1920; $i<=2012; $i++)
{
echo "<option value = '$i'> $i </option>";
}
echo '</select>';
?>
  </body> 
</html>

/* написать список по убыванию и по возрастанию*/
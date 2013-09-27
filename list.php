<!DOCTYPE html> 
<html>
 <head>
   <title>List</title>
  <meta charset="utf-8">
  </head>
 <body>
 <option value = "2012"> 2012 </option>
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
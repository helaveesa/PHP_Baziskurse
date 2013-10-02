<!DOCTYPE html> 
<html>
 <head>
   <title>Table2</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
echo '<table border = 1 width = 100>';
for ($i=0; $i<=10; $i++)
{
if ($i%2==0)
echo "<tr>";
echo "<td>$i</td>";
if ($i%2==1)
echo "</tr>";
}
echo '</table>';
?>
  </body> 
</html>

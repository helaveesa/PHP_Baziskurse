<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Days</title>
</head>

<body>
<?PHP 
//$iDayNum получено ранее
switch($iDayNum)
{
   case 1:
      echo("Понедельник");
      break;
   case 2:
      echo("Вторник");
      break;
   case 3:
      echo("Среда");
      break;
   case 4:
      echo("Четверг");
      break;
   case 5:
      echo("Пятница");
      break;
   case 6:
      echo("Суббота");
      break;
   case 7:
      echo("Воскресенье");
      break;
   default:
      echo("А у нас в неделе только 7 дней...");
}
?>
</body>
</html>
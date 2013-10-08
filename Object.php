<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Object</title>
</head>

<body>
<?PHP 
// Определяем что такое машины, что она умеет делать и как.
class moto
{
    var $color = 'Red';
    function tut_tut()    {  echo "BIp BIp";  }
}
$honda = new moto; // присваиваем переменной honda объект - moto
echo $honda->color; // Выводим свойство машины - цвет 
?>
</body>
</html>
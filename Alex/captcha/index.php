<?php
if(isset($_POST[ok]))
{
	$fi = $_POST[fi]; $f = fopen("temp/$fi","r"); $newcode = fgets($f); fclose($f);
   	unlink("temp/$fi");
	$mycode = $_POST['prov']; $mycode = trim($mycode); $mycode = strip_tags($mycode);
	if($mycode!=$newcode) $error="Неверно введены цифры"; else $error="Все ОК!";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Untitled Document</title>
</head>

<body>
<?php
mt_srand((double)microtime()*1000000);
$rnd = mt_rand(1000,9999); $fi = mt_rand(1000,9999);
$f = fopen("temp/$fi","w"); fwrite($f,$rnd); fclose($f);
?>
<form method="post">
Цифры с картинки: <input type="text" name="prov" style="width:50px"  />
<? echo "<img src='temp/rand_png.php?fi=$fi'>"; ?>
<input type="hidden" name="fi" value="<?php echo $fi; ?>" />
<input type="submit" name="ok" value="OK" /><br />
<?php echo $error; ?>
</form>
</body>
</html>

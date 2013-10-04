<!DOCTYPE html> 
<html>
 <head>
   <title>Форма Пользовательский ввод и условия: имя+ представление на фоне любимого цвета</title>
  <meta charset="utf-8">
  </head>
<body>

<body style="background: 
<?php 
echo $strBackgroundColor; 
?>;">

<?php 
echo $strHeading;
?>

    <form method="post" action="handler.php">

        <p>Как вас зовут:</p>
        <input type="text" name="username"></p>

        <p>Ваш любимый цвет:
        <input type="radio" name="favoritecolor" value="r" /> Красный 
        <input type="radio" name="favoritecolor" value="g" /> Зелёный 
        <input type="radio" name="favoritecolor" value="b" /> Синий </p>

        <input type="submit" value="Submit" />

	</form>
<?php
/*   */

$strUsername = $_POST["username"];
	 
	if ($strUsername != "") {
	    $strHeading = "<h1>Привет, " . $_POST["username"] . "</h1>";
	}
	else {
	    $strHeading = "<h1>Привет, незнакомец!</h1> ";
	}

	switch ($_POST["favorite color"]) {
	case "r":
		$strBackgroundColor = "rgb(255,0,0)";
		break;
	case "g";
		$strBackgroundColor = "rgb(0,255,0)";
		break;
	case "b":
		$strBackgroundColor = "rgb(0,0,255)";
		break;
	default:
		$strBackgroundColor = "rgb(255,255,255)";
		break;
	}

?>
</body> 
</html>
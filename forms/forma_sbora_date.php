<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<h4> Пример формы для сбора данных </h4>
<form action = "process.php" method = "post">

<b>Please take a moment to tell us what you think about our site:</b><p>

<b>Name:</b><br>

<input type="text" name="name" size="15" maxlength="25" value=""><br>

<b>Email:</b><br>

<input type="text" name="email" size="15" maxlength="45" value=""><br>

<b>How frequently do you visit our site?:</b><br>

<select name="frequency">

<option value="">Site frequency:

<option value="0">This is my first time

<option value="l">&lt; 1 time a month

<option value="2">Roughly once a month

<option value="3">Several times a week

<option value="4">Every day

<option va1ue-"5">I'm addicted

</select><br>

<b>I frequently purchase the following products from our site:</b><br>

<input type="checkbox" name="software" value="software">Software<br>

<input type="checkbox" name="cookware" value="cookware">Cookware<br>

<input type="checkbox" name="hats" value="hats">Chef's Hats<br>

<b>0ur site's greatest asset is:</b><br>

<input type="radio" name="asset" value="products">Product selection<br>

<input type="radio" name="asset" value="design">Cool design<br>

<input type="radio" name="asset" value="service">Customer Service<br>

<b>Comments:</b><br>

<textarea name="comments" rows="3" cols="40"></textarea><br>

<input type="submit" value="Submit!">

</form>
</body>
</html>
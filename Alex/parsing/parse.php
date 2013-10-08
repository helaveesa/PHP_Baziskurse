<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Документ без названия</title>
</head>

<body>
<?php
include("simple_html_dom.php");
$file="http://www.fontanka.ru/";
$dom = file_get_html($file);
$a=$dom->find('#mainnews');
foreach($a as $b) echo $b->getElementByTagName('img');
?>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������� ����������</title>
</head>

<body>
<?php
    include("simple_html_dom.php"); //���������� ���������� ������ ���� � ����
        $file="http://www.fontanka.ru/"; // ����������, � ������� ������������ ������ �� ����, ������� �� �������� �������
        $dom = file_get_html($file); 
        /*file_get_contents � ������ ���������� ����� � ������; ���������� ���������� ����� � ������, ������� � ���������� �������� offset � �� maxlen ����. � ������ �������, file_get_contents() ����� FALSE */
        $a=$dom->find('#mainnews'); // $dom ���������� � mainnews; #- ���� ������� ������� � ���, ��� id � php ���������� �� ������� http://www.w3schools.com/cssref/css_selectors.asp
        foreach($a as $b)  // cikl for vivoda massiva na ekran
    echo $b->getElementByTagName('img');  // vivod img (iskomyi file) na ekran
?>
</body>
</html>
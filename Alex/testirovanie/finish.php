<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>������������</title>
</head>

<body>
���������, <?php echo $_GET[name]; ?>!<br>
��� ���������:<br>
<?php
$prav=0; // ������� ���������� �������
$neprav=0; // ������� ������������ �������
if($_GET[v1]==2) $prav++; else $neprav++; // ���� ����� �� ������ ������ - ������, ����������� ������� ���������� �������, ����� ��������� ������� � ������������
if($_GET[v2]==1) $prav++; else $neprav++; // ���������� � ������� ���������...
if($_GET[v3]==4) $prav++; else $neprav++;
echo "$prav ���������� ������� <br> $neprav ������������ �������";
?>
</body>
</html>

<?php
require("templates/header.php");
if($_GET[ok_zakaz])
{
	for($i=0;$i<count($_SESSION[id_tov]);$i++)
	{
		$sql="INSERT INTO zakaz(date_add, status, fio, phone, adres, id_tovar, kol) VALUES(NOW(), '0', '$_GET[fio]', '$_GET[phone]', '$_GET[adres]', '".$_SESSION[id_tov][$i]."', '".$_SESSION[kol_tov][$i]."')";
		mysql_query($sql);
	}
	$id=mysql_insert_id();
	$_SESSION[id_tov]=array();
	$_SESSION[kol_tov]=array();
	echo "<p>������� �� �����. �������� ���������� ��� ��������� ������������. ����� ������ ������ - <strong>$id</strong></p>";
}
if(count($_SESSION[id_tov])>0)
{
?>
<h2>�������</h2>
<table border="1" width="100%">
<tr>
	<th>#</th>
	<th>������������:</th>
    <th>���-��:</th>
    <th>����:</th>
    <th>�����:</th>
    <th>&nbsp;</th>
</tr>
<?php
$itogo=0;
for($i=0;$i<count($_SESSION[id_tov]);$i++)
{
	$sql="SELECT * FROM tovary WHERE id=".$_SESSION[id_tov][$i];
	$rez=mysql_query($sql);
	$tov=mysql_fetch_array($rez);
	$num=$i+1;
	$sum=$_SESSION[kol_tov][$i]*$tov[cena];
	$itogo+=$sum; // $itogo=$itogo+$sum;
	echo "<tr>
			<td>$num</td>
			<td>$tov[nazv]</td>
			<td>".$_SESSION[kol_tov][$i]." ��.</td>
			<td>$tov[cena] �.</td>
			<td>$sum �.</td>
			<td><a href='?del=$i'>&times;</a></td>
		  </tr>";
}
echo "<tr><th colspan=6 align=right>$itogo �.</th></tr>";
?>
</table>
<a href="?clear_cart=ok">��������</a>
<?php
if($_SESSION[id])
{
	$sql="SELECT * FROM users WHERE id=$_SESSION[id]";
	$rez=mysql_query($sql);
	$user=mysql_fetch_array($rez);
}
?>
<form>
���: <input type="text" name="fio" value="<?php echo $user[fio]; ?>"><br>
�������: <input type="text" name="phone" value="<?php echo $user[phone]; ?>"><br>
�����: <textarea name="adres"></textarea><br>
<input type="submit" name="ok_zakaz" value="��������">
</form>
<?php
} else echo "<p>������� �����!</p>";
require("templates/footer.php");
?>    
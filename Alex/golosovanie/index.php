<?php
if(isset($_COOKIE[golos])) // ���� ���������� ����...
{
	// �����
	$f1=fopen("golos.txt","r"); // ��������� ���� ��� ������
$str=fread($f1,filesize("golos.txt")); // ������ ��� � $str
fclose($f1); // ��������� ����
$mas=explode(":",$str); // ��������� ������ � ������
$max=0; // ��������=0
foreach($mas as $per)
{
	if($per>$max) $max=$per;	// ���� ������� ������� ������, ��� ������� ��������, �� ��� ����������� ���������
}
foreach($mas as $per) // ���� �������� ������� ����� � ���������� ��������� � ���������
{
	$wdt[]=$per*100/$max;	
}
echo "<table width='400'>
  <tr>
    <td>�������:</td>
    <td width=100%><div style='width:$wdt[0]%; background:red;'>&nbsp;</div></td>
    <td>$mas[0]</td>
  </tr>
  <tr>
    <td>������:</td>
    <td><div style='width:$wdt[1]%; background:yellow;'>&nbsp;</div></td>
    <td>$mas[1]</td>
  </tr>
  <tr>
    <td>���������:</td>
    <td><div style='width:$wdt[2]%; background:green;'>&nbsp;</div></td>
    <td>$mas[2]</td>
  </tr>
  <tr>
    <td>�����:</td>
    <td><div style='width:$wdt[3]%; background:blue;'>&nbsp;</div></td>
    <td>$mas[3]</td>
  </tr>
  <tr>
    <td>������:</td>
    <td><div style='width:$wdt[4]%; background:cyan;'>&nbsp;</div></td>
    <td>$mas[4]</td>
  </tr>
</table>
";
} else // ���� �� ���...
{
	if(isset($_GET[ok])) // ���� ���� ������ ������...
	{
		// ����������
		$f1=fopen("golos.txt","r"); // ��������� ���� ��� ������
		$str=fread($f1,filesize("golos.txt")); // ������ ��� � $str
		fclose($f1); // ��������� ����
		$mas=explode(":",$str); // ��������� ������ � ������
		$golos=$_GET[golos]; // �������� �������� �� �����
		$mas[$golos]++; // � ����������� �� 1 ��������������� �������� �������
		$str=implode(":",$mas); // �������� ������ ������� � ������
		$f1=fopen("golos.txt","w"); // ��������� ���� ��� ����������. ��� ���� ��� ���������...
		fwrite($f1,$str); // � ���������� � ������ ���� ����� �������� ��������
		fclose($f1); // ��������� ����
		setcookie("golos","ok"); // ������ ����
		header("location:index.php");// ����� ����������
	} else // ���� ��� ���� � ������ �� ����������...
    {
		// �����
		echo '<form>
������� ��� ����:<br />
<input type="radio" name="golos" value="0" checked="checked" /> �������<br />
<input type="radio" name="golos" value="1" /> ������<br />
<input type="radio" name="golos" value="2" /> ���������<br />
<input type="radio" name="golos" value="3" /> �����<br />
<input type="radio" name="golos" value="4" /> ������<br />
<input type="submit" name="ok" value="�������" />
</form>';
	}
}
?>
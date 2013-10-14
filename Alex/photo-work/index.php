<?php
// ������� ��������� ������� �����������. �������� ��� ���� ����������
function img_resize($src, $dest, $width, $height, $rgb=0xFFFFFF, $quality=100)
{
  if (!file_exists($src)) return false;
  $size = getimagesize($src);
  if ($size === false) return false;
  $format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1));
  $icfunc = "imagecreatefrom" . $format;
  if (!function_exists($icfunc)) return false;
 if($height==100)
  {
	  if($size[0]>$size[1])
	  {
		$width_temp=$height;
		$height=$width;
		$width=$width_temp;
	  } 
  } 	
  if($size[0]>$size[1]) 
  {
	$size[0]=($size[1]*$width)/$height;  
	$size[1]=($size[0]*$height)/$width;
  }
  else
  {
	$size[1]=($size[0]*$height)/$width;
	$size[0]=($size[1]*$width)/$height; 
  }  
  $x_ratio = $width / $size[0];
  $y_ratio = $height / $size[1];
  $ratio       = min($x_ratio, $y_ratio);
  $use_x_ratio = ($x_ratio == $ratio);
  $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
  $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
  $new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2);
  $new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);
  $isrc = $icfunc($src);
  $idest = imagecreatetruecolor($width, $height);
  imagefill($idest, 0, 0, $rgb);
  imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0, 
    $new_width, $new_height, $size[0], $size[1]);
  imagejpeg($idest, $dest, $quality);
  imagedestroy($isrc);
  imagedestroy($idest);
  return true;
}
function LoadJpeg($imgname)
{
    $im = @imagecreatefromjpeg($imgname); /* Attempt to open */
    if (!$im) { /* See if it failed */
        $im  = imagecreatetruecolor(150, 30); /* Create a black image */
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
        /* Output an errmsg */
        imagestring($im, 1, 5, 5, "Error loading $imgname", $tc);
    }
    return $im;
}
function LoadPNG($imgname)
{
    $im = @imagecreatefrompng($imgname); /* Attempt to open */
    if (!$im) { /* See if it failed */
        $im  = imagecreatetruecolor(150, 30); /* Create a blank image */
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
        /* Output an errmsg */
        imagestring($im, 1, 5, 5, "Error loading $imgname", $tc);
    }
    return $im;
}

if($_POST[ok])
{
	$photo="1.jpg"; // �������� ��� �����
	if (move_uploaded_file($_FILES['photo']['tmp_name'], $photo))
		{		
			//------------------------��������� �������----------------------------
			$size = getimagesize($photo); // ������ ������� ����
			$width_new=400; // ������ ����� ������...
			$height_new=($width_new*$size[1])/$size[0]; // ... � ��������������� ����� ������
			$photo_resized="resized/$photo";
			img_resize($photo, $photo_resized, $width_new, $height_new); // �������� ������ ��� ������ �������
			//-------------------------��������� ��������------------------------------
			$photo_for_logo=$photo_resized; // ������ ��� ���� ��� ��������� ��������
			$logo="logo.png"; // ���� PNG � ���������
			$img = LoadJpeg($photo_for_logo); // ������ ���� JPEG (���� ������������� ������ �� JPEG.....)
			$imgLogo = LoadPNG($logo); // ������ ���� PNG
			imagecopy ($img, $imgLogo, 0, 0, 0, 0, imagesx($imgLogo), imagesy($imgLogo)); // �������� ����������� � ���������� (��������� ��. php.net)
			imagejpeg($img,$photo_for_logo); // ������������ ����� �����������
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>��������� �������� ���� � ��������� �� ��� ��������</title>
</head>

<body>
<h1 align="center">��������� �������� ���� � ��������� �� ��� ��������</h1>
<form method="post" enctype="multipart/form-data">
<input type="file" name="photo" />
<input type="submit" name="ok" value="��" />
</form>

<?php
if($_POST[ok])
{
	echo "<img src='$photo_resized'>";
}
?>
</body>
</html>

<?
 $im = ImageCreateFromPng("rand.png");
 $color = imagecolorallocate($im,255,0,0);

 $fi = $_GET[fi]; $f = fopen("$fi","r"); $rnd = fgets($f); fclose($f);

 imagestring($im,5,10,3,$rnd,$color);

 Header("Content-type: image/png");

 ImagePng($im);
 ImageDestroy($im);
?>
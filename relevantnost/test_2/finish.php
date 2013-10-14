<!DOCTYPE html> 
<html>
 <head>
   <title>Test</title>
  <meta charset="utf-8">
  </head>
 <body>
 Подсчитан средний результат по каждому типу оценки всех обрабатываемых источников<br>
 <br />
 <br />
 Результат составил:<br />
 - по оперативности<?php echo "$srq1"; ?><br />
 - по достоверности<?php echo  "$srq2"; ?><br />
 - по полноте<?php echo "$srq3"; ?><br />
 - по оригинальности<?php echo "$srq4"; ?><br />
  <br />
 
 <?php
 $oper = 0;
 $dost= 0;
 $poln= 0;
 $orig= 0;
 $nv = 0;
 // условия для всех правильных ответов на три вопроса
 
 // первый вопрос оперативность
 if ($_GET[v1]==1)
 $oper1+5;
 else $nv++; 
 if ($_GET[v1]==2)
 $oper2+4;
 else $nv++;
 if ($_GET[v1]==3)
 $oper3+3;
 else $nv++;
 if ($_GET[v1]==4)
 $oper4+2; 
 else $nv++;
 if ($_GET[v1]==5)
 $oper5+1; 
 else $nv++;
 if ($_GET[v1]==6)
 $oper6+0; 
 else $nv++;
 $srq1= (($oper1+$oper2+$oper3+$oper4+$oper5+$oper6)/6);
 
 // второй вопрос достоверность
 if ($_GET[v2]==1)
 $dost1+4;
 else $nv++;
 if ($_GET[v2]==2)
 $dost2+3;
 else $nv++;
 if ($_GET[v2]==3)
 $dost3+1;
 else $nv++;
 $srq2=(($dost1+$dost2+$dost3)/3);
 
 // третий вопрос полнота
 if ($_GET[v3]==1)
 $poln1+3;
 else $nv++;
 if ($_GET[v3]==2)
 $poln2+2;
 else $nv++;
 if ($_GET[v3]==3)
 $poln3+1;
 else $nv++;
 $srq3=(($poln1+$poln2+$poln3)/3);
 
 // четвертый вопрос оригинальность
 if ($_GET[v4]==1)
 $orig1+3;
 else $nv++;
 if ($_GET[v4]==2)
 $orig2+2;
 else $nv++;
 if ($_GET[v4]==3)
 $orig3+1;
 else $nv++;
 $srq4=(($orig1+$orig2+$orig3)/3);
 
echo "$srq1, $srq2, $srq3, $srq4 средние значения по четырем типам оценки <br> $nv введены неверные данные";
?>

Перейти на страницу с визуальным представлением данных анализа источников СМИ  <br />
<input type = "submit" name = "s1" value = "Перейти"><br>

  </body> 
</html>
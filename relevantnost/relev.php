<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form method = "post">
<title>Релевантность источников</title>
<style type="text/css">
   TD {
    vertical-align: top; /* Выравнивание по верхнему краю ячейки */
   }
   #id {
    width: 20%; /* Ширина первой колонки */
    background: #fc0; /* Цвет фона первой колонки */
   }
   #name {
    width: 40%; /* Ширина второй колонки */
    background: #f0f0f0; /* Цвет фона второй колонки */
   }
   #itog {
    width: 40%; /* Ширина третьей колонки */
    background: #fc0; /* Цвет фона третьей колонки */
   }
  </style>
</head>

<body>
<!-- отчетная таблица по ОПЕРАТИВНОСТИ -->
<h3>Отчетная таблица по оперативности источников</h3>
<table width="90%" cellpadding="5" cellspacing="0">
  <tr>
      <td id="id">ID_Источника</td>    
      <td id="name">Наименование источника<p>Всего:<br><?php echo "$kol_prof";?></p></td>    
      <td id="itog">Итоговый ранг источника по оперативности 
                    за отчетный период (среднее значение)</td>
        
   </tr>
   <tr>
   <!-- профсоюзные источники -->
  <td id="col1">20</td>    
  <td id="col2"><?php echo $mas_prof[id_20];?></td>    
  <td id="col3"><?php echo "$srznach_20 = ";?></td>   <!-- написать формулу -->
   </tr>
   <tr>
  <td id="col1">28</td>    
  <td id="col2"><?php echo $mas_prof[id_28];?></td>    
  <td id="col3"><?php echo "$srznach_28 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">30</td>    
  <td id="col2"><?php echo $mas_prof[id_30];?></td>    
  <td id="col3"><?php echo "$srznach_30 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">35</td>    
  <td id="col2"><?php echo $mas_prof[id_35];?></td>    
  <td id="col3"><?php echo "$srznach_35 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">55</td>    
  <td id="col2"><?php echo $mas_prof[id_55];?></td>    
  <td id="col3"><?php echo "$srznach_55 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">124</td>    
  <td id="col2"><?php echo $mas_prof[id_124];?></td>    
  <td id="col3"><?php echo "$srznach_124 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">112</td>    
  <td id="col2"><?php echo $mas_prof[id_112];?></td>    
  <td id="col3"><?php echo "$srznach_112 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">43</td>    
  <td id="col2"><?php echo $mas_prof[id_43];?></td>    
  <td id="col3"><?php echo "$srznach_43 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">46</td>    
  <td id="col2"><?php echo $mas_prof[id_46];?></td>    
  <td id="col3"><?php echo "$srznach_46 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">53</td>    
  <td id="col2"><?php echo $mas_prof[id_53];?></td>    
  <td id="col3"><?php echo "$srznach_53 = ";?></td>    
   </tr>
   <!-- общественно-политические источники -->
   <tr>
  <td id="col1">9</td>    
  <td id="col2"><?php echo $mas_op[id_9];?></td>    
  <td id="col3"><?php echo "$srznach_9 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">19</td>    
  <td id="col2"><?php echo $mas_op[id_19];?></td>    
  <td id="col3"><?php echo "$srznach_19 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">22</td>    
  <td id="col2"><?php echo $mas_op[id_22];?></td>    
  <td id="col3"><?php echo "$srznach_22 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">10</td>    
  <td id="col2"><?php echo $mas_op[id_10];?></td>    
  <td id="col3"><?php echo "$srznach_10 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">26</td>    
  <td id="col2"><?php echo $mas_op[id_26];?></td>    
  <td id="col3"><?php echo "$srznach_26 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">33</td>    
  <td id="col2"><?php echo $mas_op[id_33];?></td>    
  <td id="col3"><?php echo "$srznach_33 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">15</td>    
  <td id="col2"><?php echo $mas_op[id_15];?></td>    
  <td id="col3"><?php echo "$srznach_15 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">59</td>    
  <td id="col2"><?php echo $mas_op[id_59];?></td>    
  <td id="col3"><?php echo "$srznach_59 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">62</td>    
  <td id="col2"><?php echo $mas_op[id_62];?></td>    
  <td id="col3"><?php echo "$srznach_62 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">73</td>    
  <td id="col2"><?php echo $mas_op[id_73];?></td>    
  <td id="col3"><?php echo "$srznach_73 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">74</td>    
  <td id="col2"><?php echo $mas_op[id_74];?></td>    
  <td id="col3"><?php echo "$srznach_74 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">85</td>    
  <td id="col2"><?php echo $mas_op[id_85];?></td>    
  <td id="col3"><?php echo "$srznach_85 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">86</td>    
  <td id="col2"><?php echo $mas_op[id_86];?></td>    
  <td id="col3"><?php echo "$srznach_86 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">117</td>    
  <td id="col2"><?php echo $mas_op[id_117];?></td>    
  <td id="col3"><?php echo "$srznach_117 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">144</td>    
  <td id="col2"><?php echo $mas_op[id_144];?></td>    
  <td id="col3"><?php echo "$srznach_144 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">29</td>    
  <td id="col2"><?php echo $mas_op[id_29];?></td>    
  <td id="col3"><?php echo "$srznach_29 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">18</td>    
  <td id="col2"><?php echo $mas_op[id_18];?></td>    
  <td id="col3"><?php echo "$srznach_18 = ";?></td>    
   </tr>
   <!-- деловые источники -->
   <tr>
  <td id="col1">16</td>    
  <td id="col2"><?php echo $mas_del[id_16];?></td>    
  <td id="col3"><?php echo "$srznach_16 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">32</td>    
  <td id="col2"><?php echo $mas_del[id_32];?></td>    
  <td id="col3"><?php echo "$srznach_32 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">64</td>    
  <td id="col2"><?php echo $mas_del[id_64];?></td>    
  <td id="col3"><?php echo "$srznach_64 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">25</td>    
  <td id="col2"><?php echo $mas_del[id_25];?></td>    
  <td id="col3"><?php echo "$srznach_25 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">61</td>    
  <td id="col2"><?php echo $mas_del[id_61];?></td>    
  <td id="col3"><?php echo "$srznach_61 = ";?></td>    
   </tr>
   <!-- ОГВ источники -->
   <tr>
  <td id="col1">113</td>    
  <td id="col2"><?php echo $mas_del[id_113];?></td>    
  <td id="col3"><?php echo "$srznach_113 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">68</td>    
  <td id="col2"><?php echo $mas_del[id_68];?></td>    
  <td id="col3"><?php echo "$srznach_68 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">91</td>    
  <td id="col2"><?php echo $mas_del[id_91];?></td>    
  <td id="col3"><?php echo "$srznach_91 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">114</td>    
  <td id="col2"><?php echo $mas_del[id_114];?></td>    
  <td id="col3"><?php echo "$srznach_114 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">110</td>    
  <td id="col2"><?php echo $mas_del[id_110];?></td>    
  <td id="col3"><?php echo "$srznach_110 = ";?></td>    
   </tr>
   <tr>
  <td id="col1">108</td>    
  <td id="col2"><?php echo $mas_del[id_108];?></td>    
  <td id="col3"><?php echo "$srznach_108 = ";?></td>    
   </tr>
  </table>
 </form>
 
<!-- отчетная таблица по ДОСТОВЕРНОСТИ -->
<h3>Отчетная таблица по достоверности источников</h3>


<!-- отчетная таблица по ПОЛНОТЕ -->
<h3>Отчетная таблица по полноте источников</h3>
  

<!-- отчетная таблица по ОРИГИНАЛЬНОСТИ -->
<h3>Отчетная таблица по оригинальности источников</h3>

 

<?php
#ассоциативный массив профсоюзных источников
$mas_prof = array ("id_20"=>"Профсоюзы сегодня", 
"id_28"=>"Официальный сайт Федерации Независимых Профсоюзов России", 
"id_30"=>"Ленинградская Федерация Профсоюзов", 
"id_35"=>"Официальный сайт объединения Профсоюзов России СОЦПРОФ", 
"id_55"=>"Центральная профсоюзная газета Солидарность", 
"id_124"=>"Федерация профсоюзов Приморского края", 
"id_112"=>"Рабочая борьба", 
"id_43"=>"Межрегиональный профсоюз работников автопрома", 
"id_46"=>"Официальный сайт Общероссийского объединения Профсоюзов", 
"id_53"=>"НОВОЕ СЛОВО Газета профсоюзов Татарстана");
// вывод массива mas_prof источников на печать
foreach ($mas_prof as $per1) {
	echo "$per1";
}
// подсчет всех элементов массива mas_prof
$kol_prof = count ($mas_prof);
echo "$kol_prof";
	
#ассоциативный массив общественно-политических источников
$mas_op = array ("id_9"=>"Рабкор.Ру", 
"id_19"=>"Новый регион 2 Российское информационное агентство", 
"id_22"=>"Балтийское информационное агентство", 
"id_10"=>"Свободная Пресса", 
"id_26"=>"Интернет-газета", 
"id_33"=>"Росбалт", 
"id_15"=>"ФедералПресс Российское информационное агентство СЗФО", 
"id_59"=>"Накануне.RU", 
"id_62"=>"Уралполит.ру", 
"id_73"=>"Иркутскмедиа", 
"id_74"=>"Сибинфо", 
"id_85"=>"РИА Примамедиа", 
"id_86"=>"Восток-Медиа", 
"id_117"=>"ИА Regnum", 
"id_144"=>"Кавказский Узел", 
"id_29"=>"Официальный сайт КПРФ", 
"id_18"=>"Новая газета");
// вывод массива mas_op источников на печать
foreach ($mas_op as $per2) {
	echo "$per2";
}
// подсчет всех элементов массива mas_op
$kol_op = count ($mas_op);
echo "$kol_op";

#ассоциативный массив деловых источников
$mas_del = array ("id_16"=>"Издательский дом Коммерсант", 
"id_32"=>"Деловой Петербург", 
"id_64"=>"Деловой Квартал Екатеринбург", 
"id_25"=>"Эксперт", 
"id_61"=>"Уралбизнесконсалтинг");
// вывод массива mas_del источников на печать
foreach ($mas_del as $per3) {
	echo "$per3";
}
// подсчет всех элементов массива mas_prof
$kol_del = count ($mas_del);
echo "$kol_del";

#ассоциативный массив ОГВ источников
$mas_ogv = array ("id_113"=>"Генеральная прокуратура", 
"id_68"=>"Прокуратура уральского федерального округа", 
"id_91"=>"Прокуратура дальневосточного федерального округа", 
"id_114"=>"Прокуратура Северо-западного федерального округа", 
"id_110"=>"Государственная инспекция труда Санкт-Петербург", 
"id_108"=>"Государственная инспекция труда Москва");
// вывод массива mas_ogv источников на печать
foreach ($mas_jgv as $per4) {
	echo "$per4";
}
// подсчет всех элементов массива mas_ogv
$kol_ogv = count ($mas_ogv);
echo "$kol_ogv";

# расчет среднего значения для итогового ранга источника за отчетный период для всех категорий
// переменные расчета среднего значения с пн по пт
$srznpn = ;
echo "$srznpn";
$srznvt = ;
echo "$srznvt";
$srznsr = ;
echo "$srznsr";
$srzncht = ;
echo "$srzncht";
$srznpt = ;
echo "$srznpt";

// итоговый ранг среднего значения за отчетный период
$srznach = $srznpn + $srznvt + $srznsr + $srzncht + $srznpt;
echo "$srznach;"

# Время и дата 
// выведем время
$tp = time ();
echo "$tp";

// выведем дату
$d = date ("d.m.Y");
echo "$d";

# ОЦЕНКИ и КАТЕГОРИИ
// оценка источника по категории оперативность
$ocenka_oper = 0;
$switch ($ocenka_oper) {
	case 5: echo "Публикация в течение первых суток"; break;
	case 4: echo "Публикация в течение двух суток"; break;
	case 3: echo "Публикация в течение трех суток"; break;
	case 2: echo "Более трех суток до недели"; break;
	case 1: echo "Не более недели"; break;
	case 0: echo "Более месяца"; break;
	default: echo "Неверные данные";
}
// оценка источника по категории достоверность
$ocenka_dost = 0;
$switch ($ocenka_dost) {
	case 4: echo "Полностью достоверно"; break;
	case 3: echo "В основном достоверно"; break;
	case 1: echo "Частично достоверно"; break;
	default: echo "Неверные данные";
}
// оценка источника по категории полнота
$ocenka_poln = 0;
$switch ($ocenka_poln) {
	case 3: echo "Информация полна"; break;
	case 2: echo "Информация содержит основные данные"; break;
	case 1: echo "Информация содержит лишь некоторые данные"; break;
	default: echo "Неверные данные";
}
// оценка источника по категории оригинальность
$ocenka_orig = 0;
$switch ($ocenka_orig) {
	case 3: echo "Информация оригинальна"; break;
	case 2: echo "Информация является компиляцией"; break;
	case 1: echo "Информация неоригинальна"; break;
	default: echo "Неверные данные";
}

// обработчик формы источников
<form method = "post">

?>
</body>
</html>
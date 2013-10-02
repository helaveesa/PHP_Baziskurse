Тег <samp>

Элемент <samp> используется для отображения текста, который является результатом вывода компьютерной программы или скрипта. Браузеры обычно отображают текст в контейнере <samp> с помощью моноширинного шрифта. С помощью стилей можно задать свое собственное оформление.

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег SAMP</title>  
  <style>
   code {
    color: green; /* Цвет текста */
   }
   samp {
    color: maroon; /* Цвет текста */
   }
  </style>
 </head>
 <body>

  <p>Проверка, поддерживает браузер JavaScript 1.3 или нет.</p>
  <p><code> 
   &lt;script language=&quot;JavaScript1.3&quot;&gt; JS13 = 1; 
    &lt;/script&gt;<Br>
   &lt;script language=&quot;JavaScript&quot;&gt;<Br>
   if (window.JS13) document.write(&quot;Ваш браузер поддерживает JavaScript 
   1.3&quot;);<Br>
   &lt;/script&gt;
  </code></p>
  <p>В результате выполнения скрипта вы увидите текст <samp>Ваш 
    браузер поддерживает JavaScript 1.3</samp>, в том случае, если браузер 
    работает с версией 1.3.</p>

 </body>
</html>
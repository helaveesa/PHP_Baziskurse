<!DOCTYPE html> 
<html>
 <head>
   <title>Форма ввода даты с понедельника по пятницу</title>
  <meta charset="utf-8">
  </head>
<body>
<form action="form_data.php" method="post">
    <table class="container" width="100%">
        <tbody>
            <tr>
                <td class="leftcol">
                    <form class="ed-f-filter">
                        <input type="hidden" name="_filter" value="4">
                        <table class="ed-filter-tbl">
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="ed-filter ui-widget ui-state-default ui-corner-all">
                                            <li class="ui-widget ui-state-default ui-corner-all ui-widget-sub">
                                                <div class="ui-title">Дата:</div>
                                                <input type="text" class="datepicker hasDatepicker" name="dt1" value="" id="dp1380870265984">
                                                " —         "
                                                <input type="text" class="datepicker hasDatepicker" name="dt2" value="" id="dp1380870265985">
                                                <p><input type="submit" value="Отфильтровать"></p>                                                
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    
    
<?php
/* Обработчик формы вывода даты  */
    
?>
</body> 
</html>





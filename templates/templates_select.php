Тег <select>

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег SELECT</title>
 </head>
 <body>  
 
  <form action="select1.php" method="post">
   <p><select size="3" multiple name="hero[]">
    <option disabled>Выберите героя</option>
    <option value="Чебурашка">Чебурашка</option>
    <option selected value="Крокодил Гена">Крокодил Гена</option>
    <option value="Шапокляк">Шапокляк</option>
    <option value="Крыса Лариса">Крыса Лариса</option>
   </select></p>
   <p><input type="submit" value="Отправить"></p>
  </form>

 </body>
</html>
<!DOCTYPE html> 
<html>
 <head>
   <title>Регистрация</title>
  <meta charset="utf-8">
  </head>
 <body>
<?php
/* сессии работают между страницами, если я закрою браузер, а потом его снова открою - то все пропадет, введеные мною пароль и логин не сохранятся, 
чтобы такого не происходило - используют куки,то есть информация будет сохранена даже после выкл ПК и юзер сможет вкл ПК снова работать, пока сам не наждем кнопку выход */

$connect = mysql_connect ('localhost', 'root') or die (mysql_error());
mysql_select_db('tutorials');

if (isset ($_POST['submit'])) {
$username = $_POST['username'];
$login = $_POST['login'];
$password = $_POST['password'];
    if ($password ==$r_password) {
    $password = md5($password);
    $query = mysql_query("INSERT INTO users VALUES (", '$username', '$login', '$password'")") or die(mysql_error());
    }
    else {
    die ('password must match!');
    }
}
if (isset ($_POST['enter'])) {
$e_login = $_POST['e_login'];
$e_password = $_POST['e_password'];

$query = mysql_query("SELECT * FROM users WHERE login='$e_login'");
$user_data = mysql_fetch_array($query);

    if ($user_data['password'] == $e_password) {
    session_start();
    $_SESSION['name'] = $e_login;
    }
    else {
        echo "Wrong password or login";
    }
}

if (isset ($_POST['logout'])) {
unset($_SESSION['name']);
session_destroy();
}
?>

<form method = "post" action = "register.php">
    <input type = "text" name = "username" placeholder=" | Username" required /><br>
    <input type = "text" name = "login" placeholder=" | Login" required /><br>
    <input type = "password" name = "password" placeholder=" | Password" required /><br>
    <input type = "password" name = "r_password" placeholder=" | Repeat password" required /><br>
    <input type = "submit" name = "submit" value = "Register" />
</form>  

<?php
if (isset($_SESSION['name'])) {
    echo 'Youve already logged in!, <br>
        <form method = "post" action = "register.php">
            <input type = "submit" name = "logout" value = "logout" />
        </form>';
}
    else {
        echo '<form method = "post" action = "register.php">
                <input type = "text" name = "e_login" placeholder=" | Login" required /><br>
                <input type = "password" name = "e_password" placeholder=" | Password" required /><br>
                <input type = "submit" name = "enter" value = "Enter" />
            </form>';       
}
?>
  </body> 
</html>
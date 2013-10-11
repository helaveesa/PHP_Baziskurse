<?php
mysql_connect("localhost","root","") or die("Не могу присоединиться к БД");
mysql_select_db("eshop") or die("Не могу выбрать БД");
define(SALT,"jyglkupiohijij;oihp;uhliughygoukygoygpo");
session_start();
?>
/*Таблица пользователей users*/
create table users
(
 /*Определяем user_id как первичный ключ (целое число) с автоинкрементом (+1), который никогда не будет равен NULL*/
 user_id integer not null auto_increment primary key,
 user_name varchar(15), /*имя пользователя*/
 user_surname varchar(20), /*фамилия пользователя*/
 user_login varchar(20), /*логин пользователя в системе*/
 user_passwd varchar(5), /*пароль пользователя в системе*/
 user_email varchar(40) /*email пользователя в системе*/
);
 
/*Таблица сообщений messages*/
create table messages
(
 mess_id integer not null auto_increment primary key,
 /*создаем поле для первичного ключа пользователя, который отправил сообщение*/
 user_id_author integer,
 /*создаем еще одно поле для первичного ключа пользователя, который получил сообщение*/
 user_id_receiver integer,
 /*текст сообщения*/
 mess_text varchar(300)
);
 
/*Таблица заметок notes*/
create table notes
(
 note_id integer not null auto_increment primary key,
 user_id integer,
 note_text varchar(200)
);
<?php

/**
 * @author Evgeniy Popov
 * @copyright 2011
 */

         /* Настройки соединения */ 
         define(DB_HOST, 'localhost');
         define(DB_USER, 'root');
         define(DB_PASSWORD, '');
         define(DB_NAME, 'Hotels');
         
$connect = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) ;
mysql_select_db(DB_NAME); 
         /* Устанавливаем кодировку */
mysql_query('SET CHARACTER SET utf8');  
         mysql_query('SET NAMES utf8');
         /*  Установка русской локали соединения */
         mysql_query("SET lc_time_names = 'ru_RU'") ; 

?>
<?php
/*
created by zakaria lfatmi
facebook : http://www.facebook.com/zakaria.lfatmi
email : zakarialfatmi@gmail.com
http://www.zikohost.com

*/
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';
$db = mysql_connect($host, $user, $password) or die('Error : ' . mysql_error());
mysql_select_db($database) or die('bdd introuvable');
mysql_query('SET NAMES utf8');

?>

<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';
$db = mysql_connect($host, $user, $password) or die('Error : ' . mysql_error());
mysql_select_db('php') or die('bdd introuvable');
mysql_query('SET NAMES utf8');

?>

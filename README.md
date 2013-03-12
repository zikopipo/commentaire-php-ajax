/* commentaire-php-ajax
====================

commenter sans rafraichir la page */
<?php
$connect = mysql_connect('localhost','root','') or die('error connecter');
mysql_select_db('php') or die('error select');


if(isset($_POST['message'])&&isset($_POST['username']))
{
  $username = mysql_real_escape_string($_POST['username']);
	$message = mysql_real_escape_string($_POST['message']);

	$query = mysql_query("INSERT INTO livredor(id,username,message) VALUES('','$username','$message')") or die('error de insetr');
}

?>

/*
created by zakaria lfatmi
facebook : http://www.facebook.com/zakaria.lfatmi
email : zakarialfatmi@gmail.com
http://www.zikohost.com

*/
<?php
include('bdd.php');


if(isset($_POST['message'])&&isset($_POST['username']))
{
  $username = mysql_real_escape_string($_POST['username']);
	$message = mysql_real_escape_string($_POST['message']);

	$query = mysql_query("INSERT INTO livredor(id,username,message) VALUES('','$username','$message')") or die('error');
}

?>

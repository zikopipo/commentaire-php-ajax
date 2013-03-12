<html>
<head>
  <style type="text/css">
	#feedback{
		display: none;
	}
	#loader{
		display: none;
	}

	</style>

</head>
<body>
		<div id="feedback"></div>
	<?php
$connect = mysql_connect('localhost','root','') or die('error connecter');
mysql_select_db('php') or die('error select');

$query = mysql_query("SELECT * FROM livredor ORDER BY id DESC");

while($rows = mysql_fetch_assoc($query))
{
	echo "Poster par:".$rows['username']."<br/>".$rows['message']."<br/>";
}
	?>
	<form method="POST" action="index.php">
		<p>Pseudo :</p>
		<input type="text" id="username">
		<p>message :</p>
		<textarea rows="6" cols="30" id="message"></textarea><br/><br/>
		<input type="submit" id="submit" value="poster">
	</form>
	<div id="loader"><img src="loader.gif"></div>

<script src="jquery.js" type="text/javascript" ></script>
<script src="func.js" type="text/javascript" ></script>

</body>
</html>

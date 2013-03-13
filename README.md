commentaire-php-ajax
====================

commenter sans rafraichir la page 


1 - modifier les informations de la connexion avec la base de donnée sur index.php :
$connect = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('php') or die(mysql_error());

$query = mysql_query("SELECT * FROM livredor ORDER BY id DESC"); 

2 - modifier les informations de la connexion avec la base de donnée sur post.php :

$connect = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('php') or die(mysql_error());

$query = mysql_query("INSERT INTO livredor(id,username,message) VALUES('','$username','$message')") or die(mysql_error());

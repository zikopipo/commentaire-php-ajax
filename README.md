commentaire-php-ajax
====================

commenter sans rafraichir la page 


1 - modifier les informations de la connexion avec la base de donnée sur index.php :

$connect = mysql_connect('localhost','root','') or die(mysql_error());

mysql_select_db('php') or die(mysql_error());

$query = mysql_query("SELECT * FROM livredor ORDER BY id DESC"); 

pour le code html sur index.php :

changer la source de votre image : src="entrer le lien d'une image loader"

par exemple :

http://www.ajaxload.info/cache/FF/FF/FF/00/00/00/20-1.gif


2 - modifier les informations de la connexion avec la base de donnée sur post.php :

$connect = mysql_connect('localhost','root','') or die(mysql_error());

mysql_select_db('php') or die(mysql_error());

$query = mysql_query("INSERT INTO livredor(id,username,message) VALUES('','$username','$message')") or die(mysql_error());

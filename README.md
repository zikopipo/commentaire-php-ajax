commentaire-php-ajax
====================

commenter sans rafraichir la page 


comment ce script va travailler avec succes

1 - modifier les informations de la connexion avec la base de donnée 
$connect = mysql_connect('localhost','root','') or die('error connecter');
mysql_select_db('php') or die('error select');

$query = mysql_query("SELECT * FROM livredor ORDER BY id DESC");

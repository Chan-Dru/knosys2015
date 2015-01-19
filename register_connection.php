



<?php
/* $dbhost = "localhost";
$dbname	= "login";
$dbuser	= "root";
$dbpass	= "";*/
 
// database connection
$db=new PDO("mysql:host=localhost;dbname=login",'root','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


/*$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
*/


?>
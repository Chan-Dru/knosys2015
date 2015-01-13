<?php
try{
 session_start();
 $username = $_POST['name'];
 $password = ($_POST['pwd']);

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

$dsn = 'mysql:dbname=login;host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);




 
 /*$db=new PDO("mysql:host=localhost;dbname=login",'root','');*/
 $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
 $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
 $result =$db->query($sql);
 $result1=$result->fetch();
 $num_row = count($result1);
 $user=$result->fetchColumn(1);
 $id=$result->fetchColumn(0);
 if( $num_row >=1 ) {
  echo 'true';
  $_SESSION['user_name']=$user;
  $_SESSION['user_id']=$id;
 }
 else{
 echo 'false';
 }
}

catch(PDOException $e)
{
	$e->getMessage();
}
?>
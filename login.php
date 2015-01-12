<?php
 session_start();
 $username = $_POST['name'];
 $password = ($_POST['pwd']);

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));







 $mysqli=mysqli_connect('DB_HOST:DB_PORT','DB_USER','DB_PASS','login');
 $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
 $result = mysqli_query($mysqli,$query)or die(mysqli_error());
 $num_row = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
 if( $num_row >=1 ) {
  echo 'true';
  $_SESSION['user_name']=$row['username'];
 }
 else{
 echo 'false';
 }
?>
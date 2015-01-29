<?php 
include('register_connection.php');
if(isset($_POST['not']))
{
	$db->exec("UPDATE regis SET checked='false' WHERE k_id='$kid'");
}
header("Location:data.php");
?>
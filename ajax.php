

<?php
session_start();
if(isset($_SESSION['user_id'])){
$userId=$_SESSION["user_id"];
$userName=$_SESSION['user_name'];
    include('register_connection.php');
    $ename=$_POST['Event_Name'];
   
    $sql = "INSERT INTO event_regis(event_name,user_name,kid)VALUES('$ename','$userName','$userId')";
    
    $result4=$db->query($sql);


echo "Successfully registered.";
}else{
	echo "Please login.";
}
?>
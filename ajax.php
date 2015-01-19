

<?php
session_start();
if(isset($_SESSION['user_id'])){
$userId=$_SESSION["user_id"];
$userName=$_SESSION['user_name'];
    include('register_connection.php');
    $ename=$_POST['Event_Name'];

     $sql = "SELECT * FROM event_regis WHERE user_name='$username' AND event_name='$ename'";
 $result19 =$db->query($sql);
 $result31=$result19->fetch();
if($result31==null){   
    $sql = "INSERT INTO event_regis(event_name,user_name,kid)VALUES('$ename','$userName','$userId')";
    
    $result4=$db->query($sql);


echo "Successfully registered.";
}
}else{
	echo "Please login.";
}
?>


<?php
session_start();
if(isset($_SESSION['user_id'])){
$userId=$_SESSION["user_id"];
$userName=$_SESSION['user_name'];
    include('register_connection.php');
    $ename=$_POST['Event_Name'];

     $sql = "SELECT * FROM event_regis WHERE user_name='$userName' AND event_name='$ename'";
 $result19 =$db->query($sql);
 $result31=$result19->fetch();
if($result31==null){   
	
    $sql = "INSERT INTO event_regis(event_name,user_name,kid)VALUES('$ename','$userName','$userId')";
    
    $result4=$db->query($sql);
    if($ename=='CobWeb'){
		$sql1="SELECT * FROM regis WHERE k_id='$userId'";
		$result15=$db->query($sql1);
		$phone=$result15->fetch();
		$_SESSION['knosys']=$phone['phone'];
		echo "Successfully registered.<br>
  <form  action=\"http://cobweb.knosys.in/index.php\" method=\"POST\">
  <input type=\"hidden\" value=".$_SESSION["user_id"]." name=\"user_id\" />
  <input type=\"hidden\" value=".$_SESSION["knosys"]." name=\"knosys\" />
  <input type=\"hidden\" value=".$_SESSION["user_name"]." name=\"username\" />

<button class=\"\"  type=\"submit\" style=\"background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0)\"><img class=\"treasure-img\"  src=\"pins/treasure.png\"/></button>
</form>";
	}else{

	echo "Successfully registered.";
	}
}
}else{
	echo "Please login.";
}
?>
<?php
try{
include('register_connection.php');
$mem_id=$_POST['team_member'];

session_start();
	if(isset($_SESSION['user_id'])){
		
		$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
		$stmt->execute(array(':id'=>$_SESSION['user_id'],':event'=>$_POST['Event_Name']));

		$result=$stmt->fetchColumn(3);

		$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
		$stmt->execute(array(':id'=>$mem_id,':event'=>$_POST['Event_Name']));

		$result1=$stmt->fetchColumn(3);
			$stmt=$db->prepare('SELECT * FROM regis WHERE k_id=?');
			$stmt->bindParam(1,$mem_id,PDO::PARAM_STR,5);
			$stmt->execute();
			$mem_name=$stmt->fetchColumn(1);
		if($result==NULL && $result1==NULL ){
			if($mem_name!=NULL){
				$user=$_SESSION['user_id'];
				$name=$_SESSION['user_name'];
				$event=$_POST['Event_Name'];
				$team=$_POST['team_name'];
			$db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name) VALUES ('$user','$name','$event','$team')");
	        $db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name) VALUES ('$mem_id','$mem_name','$event','$team')");	

			echo '<div class="alert alert-success" role="alert">Successfully Registered for this event.</div>';
			}else{
				echo '<div class="alert alert-warning" role="alert">Your team mate has not registered.</div>';
			}
		}else{
			echo '<div class="alert alert-info" role="alert">Already registered for this event.</div>';
		}
	}else{
		echo '<div class="alert alert-warning" role="alert">Please Login.</div>';
	}

}catch(PDOException $e){
	$e->getMessage();
}

?>

















































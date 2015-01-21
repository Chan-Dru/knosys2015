<?php
try{
include('register_connection.php');
$mem_id=$_POST['team_member'];
if(!empty($_POST['team_member'])&&!empty($_POST['team_name'])){
session_start();
if(isset($_SESSION['user_id'])){
	/*$stmt=$db->prepare('SELECT * FROM regis WHERE kid=?');
	$stmt->bindParam(1,$mem_id,PDO::PARAM_STR,5);
	$stmt->execute();
	$result3=$stmt->fetchColumn(5);
	if($result3==NULL){
		echo 'invalid';
		header('Location:signupindex.php');
	}*/


	$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
	$stmt->execute(array(':id'=>$_SESSION['user_id'],':event'=>$_POST['Event_Name']));
	//$stmt->execute();
	$result=$stmt->fetchColumn(3);

	/*if($result!=NULL)
		echo 'me';*/

	$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
	$stmt->execute(array(':id'=>$mem_id,':event'=>$_POST['Event_Name']));
	//$stmt->execute();
	$result1=$stmt->fetchColumn(3);
	/*if($result1!=NULL)
		echo 'mem';*/
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
			$DD_num=$_POST['DD_number'];
		$db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name,DD_number) VALUES ('$user','$name','$event','$team','$DD_num')");
        $db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name,DD_number) VALUES ('$mem_id','$mem_name','$event','$team','$DD_num')");	

	/*$stmt=$db->prepare('UPDATE event_reg SET team_name=$_POST['team_name'] WHERE kid=? ');
	$stmt->bindParam(1,$_SESSION['user_id'],PDO::PARAM_STR,5);
	$stmt->execute();
	$stmt1=$db->prepare('UPDATE event_reg SET team_name=$_POST['team_name'] WHERE kid=?');
	$stmt1->bindParam(1,$mem_id,PDO::PARAM_STR,5);
	$stmt1->execute();*/
	echo '<div class="alert alert-success" role="alert">Successfully Registered for this event.</div>';
	}else{
echo '<div class="alert alert-warning" role="alert">Your team mate has not registered.</div>';
	}
	}
	else
	{
		echo '<div class="alert alert-info" role="alert">Already registered for this event.</div>';
	}

}
else{
	echo '<div class="alert alert-warning" role="alert">Please Login.</div>';
}
}else{
	echo '<div class="alert alert-warning" role="alert">Fields are empty.</div>';
}
}catch(PDOException $e){
	$e->getMessage();
}

?>

















































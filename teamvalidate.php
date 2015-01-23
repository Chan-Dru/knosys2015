<?php
try{
include('register_connection.php');
$mem_id=$_POST['team_member'];
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


			$user=$_SESSION['user_id'];
			$name=$_SESSION['user_name'];
			$event=$_POST['Event_Name'];
			$team=$_POST['team_name'];
	$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
	$stmt->execute(array(':id'=>$user,':event'=>$event));
		$result=$stmt->fetchColumn(3);

			
	/*if($result!=NULL)
		echo 'me';*/
	if($mem_id !=NULL){	

		$stmt=$db->prepare('SELECT * FROM event_regis WHERE kid=:id AND event_name=:event');
		$stmt->execute(array(':id'=>$mem_id,':event'=>$event));
		$result1=$stmt->fetchColumn(3);

		$stmt=$db->prepare('SELECT * FROM regis WHERE k_id=?');
		$stmt->bindParam(1,$mem_id,PDO::PARAM_STR,5);
		$stmt->execute();
		$mem_name=$stmt->fetchColumn(1);
		
		if( $mem_name!=NULL && $result1==NULL && $result==NULL){
			
			//$DD_num=$_POST['DD_number'];
		$db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name) VALUES ('$user','$name','$event','$team')");
        $db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name) VALUES ('$mem_id','$mem_name','$event','$team')");	
        echo 'done';
    }
    else if($mem_name==NULL){
    	echo 'notregis';

    }
    else if($result1!=NULL){
    	echo 'already';
    }
}
	if($mem_id==NULL){

    if($result==NULL){
    	$db->exec("INSERT INTO event_regis(kid, user_name, event_name, team_name) VALUES ('$user','$name','$event','$team')");
    	echo 'done';
    }
    else if($result!=NULL){
    	echo 'teamalready';
    }}
}

	/*$stmt=$db->prepare('UPDATE event_reg SET team_name=$_POST['team_name'] WHERE kid=? ');
	$stmt->bindParam(1,$_SESSION['user_id'],PDO::PARAM_STR,5);
	$stmt->execute();
	$stmt1=$db->prepare('UPDATE event_reg SET team_name=$_POST['team_name'] WHERE kid=?');
	$stmt1->bindParam(1,$mem_id,PDO::PARAM_STR,5);
	$stmt1->execute();*/
	
else{
	echo 'login';
}
}
catch(PDOException $e){
	$e->getMessage();
}


?>

















































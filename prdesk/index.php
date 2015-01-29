<!DOCTYPE html>
<html>
<head>

</head>
<?php 
if(isset($_POST['submit'])){
	include('register_connection.php');
	session_start();
	$kid=$_POST['kid'];
	$username=$_POST['username'];
	$stmt=$db->prepare("SELECT * FROM regis WHERE k_id= '$kid' or user_name ='$username' ");
	$stmt->execute();
	$result=$stmt->fetchAll();
	if($result == NULL)
		echo '<div class="alert alert-danger" style="color:red;font-size:30px;">'.$kid.' User has not registered for Knosys</div>';
	else{
		header("Location:data.php");	
		$_SESSION['kid']=$kid;
		$_SESSION['username']=$username;
	}

}



?>
<body style='background-color:lightgrey'>
	<div class='container-fluid'>
		<center>
			<h3><b>PR Desk</b></h3>
		</center>
		<div class='row'>
			<div class='col-md-12 col-sm-12'>
				<center>
					<form action='' method='POST'>
					<fieldset style='background-color:lightblue'>
						<legend><h4><b>Status:</b></h4></legend>
						Knosys ID:<input type='text'  name='kid'><br><br>
						<strong><center>or</center></strong><br>
						User Name:<input type='text' name='username'><br><br>
						<button type='submit' class='btn btn info' name='submit' >Submit</button>
					</fieldset> 
					</form>
				</center>

			</div>
		</div>
	</div>
</body>
</html>

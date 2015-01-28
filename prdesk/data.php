<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>
<?php
include('register_connection.php');
session_start();
$kid=$_SESSION['kid']; 
$username=$_SESSION['username'];
?>

<body style='background-color:#006666'>
	<div class='conatiner-fluid'>
		 <div style='position:absolute;top:30px;right:200px'><button class='btn btn primary' onClick="location.href='index.php'">Back</button></div>	
		<center>
	<h3 style='color:black'><b>PR DESK:</b></h3>
</center>



	


	<div class='row'>
		<div class='col-sm-2 col-md-2'>
		</div>
		<div class='col-sm-8 col-md-8'>
	




	<center>

		<table class=" table  table-hover table-bgordered table-stripped"  style="width:300px">                   <!-- guidlines -->
<center>
	
	<h3 style='color:black'><b>Events:</b></h3>
<thead style="font-size:18px" >
<tr style='background-color:grey' class="">
<th width=10%>SNo.</th>
<th width=10%>Event Name</th>
<th width=10%>Team Name</th>


<tr>
</thead>
</center>

<?php


//include('register_connect.php');
$stmt=$db->prepare("SELECT * FROM  event_regis  WHERE kid='$kid' or user_name='$username'");
$stmt->execute();
$result=$stmt->fetchAll();
$i=0;
foreach($result as $row)
{
	
	$i++;
echo"<center>";
	echo"<tbody style='font-size:15px'>";
	echo"<tr>";
	echo"<td  style='background-color:lightgrey;text-align:center;color:black;'><b>".$i."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['event_name']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['team_name']."</b></td>";
	
	
	echo"<tr>";
	echo"</tbody>";
	echo"</center>";
	
}
	

echo"
</table>
</center>


</div>";
?>
<div class='col-sm-2 col-md-2'>
		</div>
</div>

<div style='position:absolute;top:120px;left:60px;background-color:lightgrey;width:350px;height:200px'>
			<center>

				<div>
					<center>
						<h4><b>Profile:</b></h4>
					</center>
					<?php 
					
					$stmt=$db->prepare("SELECT * FROM regis WHERE k_id='$kid' or user_name='$username'");
					$stmt->execute();
					while($row=$stmt->fetch()){
						$kid=$row['k_id'];
						$name=$row['fullname'];
						$username=$row['user_name'];
						$phone=$row['phone'];
						$college=$row['college'];
						$email=$row['email'];

					}

					echo "<table>
					<tbody>
					<tr>
					<td><b>KID</b></td>
					<td>:<b> $kid</b></td>
					</tr>
					<tr>
					<td><b>Fullname</b></td>
					<td>: <b>$name</b></td>
					</tr>
					<tr>
					<td><b>User Name</b></td>
					<td>:<b> $username</b></td>
					</tr>
					<tr>
					<td><b>College</b></td> 
					<td>: <b>$college</b></td>
					</tr>
					<tr>
					<td><b>Email</b></td>
					<td>: <b>$email</b></td>  
					</tr>
					<tr>
					<td><b>Phone</b></td>
					<td>: <b>$phone</b></td> 
					</tr>";

					?>
				</div>
			</center>
		</div>
		<div style='position:absolute;top:240px;left:50px;background-color:lightgrey'>
			<center>
				<h3><b>Accomodation:</b></h3>
				<?php
				$stmt=$db->prepare("SELECT * FROM accomodation WHERE k_id= '$kid' ");
	$stmt->execute();
	$result=$stmt->fetchAll();
	if($result == NULL)
		echo "<h4><b>No</b></h4>";
	
	else
		echo "<h4><b>Yes</b></h4>";


				 ?>
						
				</center>
		</div>

	</div>
</body>



</html>

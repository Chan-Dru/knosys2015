<?php 
try{
/*$db=new PDO("mysql:host=localhost;dbname=login",'root','');
*/
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

$dsn = 'mysql:dbname=login;host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);
session_start();
$event=$_SESSION['event'];
?>
<html>
<body>
	<center>
<h2 style="text-align:center;color:black">Participants<h2>
	<h3 style="text-align:center;color:black"><?php echo $event ?><h3>
</center>
<center>
<table class=" table  table-hover table-bgordered table-stripped"  style="width:90%">                   <!-- guidlines -->
<center>
<thead style="font-size:18px" >
<tr style='background-color:grey' class="">
<th  width=10%>SNo</th>
<th width=10%>Id</th>
<th width=10%>Username</th>
<th width=20%>Full Name</th>
<th width=20%>College Name</th>
<th width=20%>E-mail Id</th>
<th width=10%>Phone No</th>

<?php if($event == 'ityuktha'){
echo"<th width=20%>Team Name</th>";
} ?>
<tr>
</thead>
</center>
<div style='position:absolute;top:40px;left:100px' ><h4><b>Welcome <?php echo $_SESSION['name'] ?> </b></h4></div>
<?php


//include('register_connect.php');
$stmt=$db->prepare("SELECT * FROM  event_regis INNER JOIN regis ON event_regis.kid = regis.k_id WHERE event_name='$event'");
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
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['kid']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['user_name']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['fullname']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['college']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['email']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['phone']."</b></td>";
	if($event == 'ityuktha')
	{
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['team_name']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['DD_number']."</b></td>";
	}
	echo"<tr>";
	echo"</tbody>";
	echo"</center>";
	
}
	

echo"
</table>
</center>

</div>
</div>";
?>
<div style='position:absolute;top:70px;right:90px'><button type='button' onClick="location.href='index.php'">Logout</button></div> 

<?php

}
catch(PDOException $e)
{
	$e->getMessage();
}
 ?>
</body>
 </html>

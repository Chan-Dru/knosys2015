<html>
	<head>
		<Title>Accomodation</title>
			<link rel="stylesheet" href="css/bootstrap.css"/>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.js"></script>

		  <style>
		  .accomo-background{
		  	width:50%;
		  }
		  </style>
		  <script>
		function validateForm()
		{
			var mob = /^[+][1-9]{1}[0-9]{11,14}$/;
			var mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			var name=/^[a-zA-Z]+$/;
			var y=document.forms["register"]["name"].value;
			if (y==null || y=="")
			{
				document.getElementById('a-status').innerHTML="<div class='alert alert-warning'>Your Name must be filled out</div>";
				return false;
			}	
			var y=document.forms["register"]["college"].value;
			if (y==null || y=="")
			{
				document.getElementById('a-status').innerHTML="<div class='alert alert-warning'>Your College name must be filled out</div>";
				return false;
			}
					
			var y=document.forms["register"]["phone"].value;
			if (y==null || y=="")
			{
				document.getElementById('a-status').innerHTML="<div class='alert alert-warning'>Phone number must be filled out</div>";
				return false;
			}
			var y=document.forms["register"]["email"].value;
			if (y==null || y=="")
			{
				document.getElementById('a-status').innerHTML="<div class='alert alert-warning'>Email must be filled out.</div>";
				return false;
			}
			if (mail.test(y) == false)
			{
				document.getElementById('a-status').innerHTML="<div class='alert alert-warning'>Enter valid email id</div>";
				return false;
			}			
		}
		
		</script>
	</head>
	<body>
		<br>
<?php
session_start();
if(isset($_SESSION['user_id']))
{
	$userid=$_SESSION['user_id'];

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

$dsn = 'mysql:dbname=login;host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);

/*
$db = new PDO("mysql:host=localhost;dbname=login", 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
*/	



if(isset($_POST['info_submitted']))
			{		
			
				$college=$_POST['college'];
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$sql="insert into accomodation values('$userid','$name','$college','$phone','$email')";
				$result = $db->query($sql);
				if(!$result)
				{
				die("Data Insertion error".$sql);
				}
 echo "<div  class='container alert alert-success'>Accomodation Registration is Successful.</div>";				
}else{
	
$stmt=$db->prepare("SELECT * FROM accomodation WHERE k_id='$userid'");
$stmt->execute();
$result1=$stmt->fetchColumn(0);

if($result1==NULL)
{	?>

		<div class="container accomo-background">
		<h2>Accomodation form</h2>
		<form name='register' action="" method="post" onsubmit="return validateForm(this);">
			<div class="form-group">
		    <label for="exampleInput1">Full Name</label>
		    <input type="text" class="form-control" id="a-name" name="name" placeholder="Enter your Full Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInput2">College Name</label>
		    <input type="text" class="form-control" id="a-college" name="college" placeholder="Enter your College Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInput3">Phone Number</label>
		    <input type="text" class="form-control" id="a-phone" name="phone" placeholder="Enter your Phone Number">
		  </div>
		 <div class="form-group">
		    <label for="exampleInput3">Email Address</label>
		    <input type="text" class="form-control" id="a-email" name="email" placeholder="example@mail.com">
		  </div>
		  <h4>Accomodation fee: Rs.100 per day</h4>
		<div id="a-status"></div>  
		  <input type="submit" class="submit btn btn-success" name="info_submitted" value="Submit"></button>
		</form>
		
		</div>


		<?php
		}
		else
			echo '<div  class="container alert alert-info">Already Registered for Accomodation.</div>';
		 }

}
else
{
header("Location:http://www.knosys.in");
}		?>
		</body>
</html>
	
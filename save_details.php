<?php
/*********************************************************************
* This script has been released with the aim that it will be useful.
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
* All Copy Rights Reserved by Vasplus Programming Blog
***********************************************************************/


//Validate the request brought
try{
if(isset($_POST["page"]) && !empty($_POST["page"]))
{

	$colg = trim(strip_tags($_POST['colg']));
	$phne = trim(strip_tags($_POST['phne']));
	$full_name = trim(strip_tags(strtolower($_POST["fullnames"])));
	$user_name = trim(strip_tags(strtolower($_POST["usernames"])));
	$email_address = trim(strip_tags($_POST['emails']));
	$password = trim(strip_tags($_POST['passs']));
	$encrypted_password = md5($password);
	
		
	if($full_name == "" || $user_name == "" || $email_address == "" || $password == "") //Be sure that all the fields are filled then proceed
	{
		echo "<div class='alert alert-warning'>Sorry, you have to fill in all the fields to proceed. Thanks.</div>";
	}
	else if(strlen($user_name) < 5)
	{
		echo "<div class='alert alert-warning'>Sorry, your username must not be less than 5 characters in length please. Thanks.</div>";
	}
	else if(preg_match('/[^A-Za-z0-9]/', $user_name))  //Be sure that username is properly formatted then proceed
	{
		echo "<div class='alert alert-danger'>Sorry, <font color='blue'>".$user_name."</font> is not in the proper format for a username. <br>Username should only contain letters and numbers.Example formats: <font color='blue'>blessy</font>, <font color='blue'>chandru18</font>, <font color='blue'>nikki29</font> etc</div>";
	}
	else
	{
		//Check your database for already existing Username and/or Email address to avoid duplicates and save this info to your database if you wish before you can then display a success message to your users as shown below
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

$dsn = 'mysql:dbname=login;host='.DB_HOST.';port='.DB_PORT;
$db = new PDO($dsn, DB_USER, DB_PASS);




/*
		$db=new PDO("mysql:host=localhost;dbname=login",'root','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
*/

		


		$sql1 = "SELECT user_name FROM regis WHERE user_name='$user_name'";
		 $result1 = $db->query($sql1);
		 $result2=$result1->fetchAll();
		 $num_row1=count($result2);

		 //$num_row1 = mysqli_num_rows($result1);
	
		 if($num_row1>=1)
		   {
		    echo"<div class='alert alert-danger'>Sorry, User Name already exists.</div>";
		   }
		 else
		    {

			$sql2 = "INSERT INTO regis (user_name,college,phone, email, com_code,fullname) VALUES ('$user_name','$colg','$phne','$email_address', '$encrypted_password','$full_name')";
  			$result2 = $db->exec($sql2); 

  			
  			$val=150000;
		$sql3 = "SELECT * FROM regis WHERE user_name='$user_name'";
		 $result5 = $db->query($sql3);
		 $result6=$result5->fetch();
		 $id=$result6['id'];
		 $temp=$id;
		 $temp=$val+$temp;
		 $kid="KS".$temp;

		 $sql4="UPDATE regis SET k_id='$kid' WHERE id='$id'";
		 $result4=$db->exec($sql4);




		?>
       
	       <div class="alert alert-success" >You have registered successfully .Welcome!!!</div>
	       

	          
	      
	        
	        
	        
	       
	        <?php
	    	
	    }
	}
}
else
{
	echo "<div class='info'>Sorry, the operation was unsuccessful.<br>Please try again or contact this website admin to report this error message if the problem persist. Thanks.</div>";
}
}
catch(PDOException $e)
{
	$e->getMessage();
}
?>
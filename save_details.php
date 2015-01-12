<?php
/*********************************************************************
* This script has been released with the aim that it will be useful.
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
* All Copy Rights Reserved by Vasplus Programming Blog
***********************************************************************/


//Validate the request brought
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	$full_name = trim(strip_tags(strtoupper($_POST["fullnames"])));
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

		  define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));


		
		$mysqli=mysqli_connect('DB_HOST:DB_PORT','DB_USER','DB_PASS','login') or die("Database Error");


		

		$sql1 = "SELECT username FROM user WHERE username='$user_name'";
		 $result1 = mysqli_query($mysqli,$sql1)or die(mysqli_error());
		 $num_row1 = mysqli_num_rows($result1);
	
		 if($num_row1>=1)
		   {
		    echo"<div class='alert alert-danger'>Sorry, User Name already exists.</div>";
		   }
		 else
		    {

			$sql2 = "INSERT INTO user (username, email, password, com_code) VALUES ('$user_name', '$email_address', '$password', '$encrypted_password')";
  			$result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error());






		?>
       
	       <div class="alert alert-success" >You have registered successfully and below are your User Name and Password!</div>
	       

	          
	        <div class="alert-info alert">
	        	<label>User Name:<label><?php echo $user_name; ?>
	        	<label>Password:</label><?php echo $password; ?>
	        </div>
	        
	        
	        
	       
	        <?php
	    	
	    }
	}
}
else
{
	echo "<div class='info'>Sorry, the operation was unsuccessful.<br>Please try again or contact this website admin to report this error message if the problem persist. Thanks.</div>";
}
?>
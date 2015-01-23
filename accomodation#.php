

<?php
session_start();
if(isset($_SESSION['user_id']))
{
if(isset($_POST['page']))
			{		
			$db = new PDO("mysql:host=localhost;dbname=login", 'root', '');
		
				$college=$_POST['college'];
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$sql="insert into accomodation values('$name','$college','$phone','$email')";
				$result = $db->query($sql);
				if(!$result)
				{
				die("Data Insertion error".$sql);
				}
 echo "Registration Successful.Your Accomadation in confirmed.";				
}else{?>

		<?php }
}
else
{
header("Location:http://www.knosys.in");
}		?>
		</body>
</html>
	
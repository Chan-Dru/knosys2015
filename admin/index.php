<html>
<body>

<?php 
session_start();
if(isset($_POST['submit']))
{
$pass=$_POST['pass'];
$id=$_POST['id'];
$event=$_POST['event'];

$_SESSION['event']=$event;
$_SESSION['name']=$_POST['name'];
if($pass == 'pass' && $id == 'id')
        header("Location:participants.php");

else{
        echo "<center>
        <h3>Sorry your credentials are wrong .Try again!!</h3>
</center>";
        
        }
}
?>
</br>

<form action="" method="POST">

<fieldset>
        <legend>
                <h3>Event Coordinator Login:</h3></legend></br>
Eventcoordinator ID :<input  type='text' name='id' value='id' ></br></br>
Eventcoordinator Name :<input  type='text' name='name' value='admin'></br></br>
 Event Name :<select name="event">
                <option value="ityuktha">ityuktha</option>
                <option value="CobWeb">cobweb</option>
                <option value="ethicalHacking" >ethicalHacking</option>
                <option value="lockAndKey">lockAndKey</option>
                <option value="Enigma">Enigma</option>
                <option value="debugCbug">debugCbug</option>
                <option value="HackOCrusade">HackOCrusade</option>
                <option value="CutItShort">CutItShort</option>
                <option value="ShootTheFrame">ShootTheFrame</option>
                <option value="webProjectX">webProjectX</option>
                <option value="Antagon">Antagon</option>
                <option value="winAdroit">winAdroit</option>
                <!-- <option value=""></option> -->
               
        </select>
</br></br>
Password :<input type='password' name='pass' ></br></br></br>
<input type='submit' name='submit' value='Enter'> </input>
</fieldset>
</form>
</body>

</html>
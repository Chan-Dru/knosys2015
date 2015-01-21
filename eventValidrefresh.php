
<?php

 if(isset($_SESSION['user_id'])){

$userId=$_SESSION['user_id'];
 include('register_connection.php');
$sql="SELECT event_name FROM event_regis WHERE kid='$userId'";
$sql1="SELECT event_name FROM event_regis WHERE kid='$userId' AND event_name ='CobWeb'";
$result15=$db->query($sql1);
$rowCount=$result15->rowCount();
if($rowCount>0){
$sql1="SELECT * FROM regis WHERE k_id='$userId'";
$result15=$db->query($sql1);
$phone=$result15->fetch();
$_SESSION['phone']=$phone['phone'];
/*echo $_SESSION['phone'];*/
}
 $result9=$db->query($sql);
 $result10=$result9->fetchAll();
 if($result10!=null){
  foreach($result10 as $row){
    ?>
    <script>

      $(document).ready(function(){
        function remedy(eventname){
          $("."+eventname+" .result").html('<h2>Already Registered for this event.</h2>');
          $("."+eventname+" .register").css('display','none');
          }
        remedy("<?php echo $row['event_name']; ?>");
$('#valid').html('chandru');
      });
      </script>
    <?php
  }
 }else{
 
 }

 }

?> 
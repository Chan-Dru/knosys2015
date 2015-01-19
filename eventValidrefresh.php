
<?php

 if(isset($_SESSION['user_id'])){

$userId=$_SESSION['user_id'];
 include('register_connection.php');
$sql="SELECT event_name FROM event_regis WHERE kid='$userId'";
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
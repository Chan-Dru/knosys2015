<?php session_start(); ?>
<html>
<head>
<!-- <link rel="stylesheet" href="bootstrap.css"/>
<script src="jquery.js"></script>
<script src="bootstrap.js"></script> -->

 <script type="text/javascript">

  function Users_Registration() 
{

  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var colg=$("#colg").val();

  var phne=$("#phne").val(); 
  var fullnames = $("#fullnames").val();
  var usernames = $("#usernames").val();
  var emails = $("#emails").val();
  var passs = $("#passs").val();
  
  if(fullnames == "")
  {

    $("#signup_status").html('<div class="alert alert-warning">Please enter your fullname in the required field to proceed.</div>');
    $("#fullnames").focus();
  }
  else if(usernames == "")
  {
    $("#signup_status").html('<div class="alert alert-warning">Please enter your desired username to proceed.</div>');
    $("#usernames").focus();
  }
  else if(emails == "")
  {
    $("#signup_status").html('<div class="alert alert-warning">Please enter your email address to proceed.</div>');
    $("#emails").focus();
  }
  else if(reg.test(emails) == false)
  {
    $("#signup_status").html('<div class="alert alert-danger">Please enter a valid email address to proceed.</div>');
    $("#emails").focus();
  }
  else if(passs == "")
  {
    $("#signup_status").html('<div class="alert alert-warning">Please enter your desired password to go.</div>');
    $("#passs").focus();
  }else if(phne==""){
    $("#signup_status").html('<div class="alert alert-warning">Please enter your Phone Number to proceed.</div>');
    $("#phne").focus();    
  }
  else
  {
   
    var dataString = 'colg='+ colg +'&phne='+ phne +'&fullnames='+ fullnames + '&usernames=' + usernames + '&emails=' + emails + '&passs=' + passs + '&page=signup';
    $.ajax({
      type: "POST",
      url: "save_details.php",
      data: dataString,
      cache: false,
      beforeSend: function() 
      {
        $("#signup_status").html('<div style="height:20px;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please wait</font> <img style="height:20px;width:100px;"class="img-thumbnail" src="images/loadings.gif" alt="Loading...." align="center" title="Loading...."/></div><br clear="all">');
      },
      success: function(response)
      {
          $('#signup_status').hide().fadeIn('slow').html(response);
          
    
      }
    });
  }
}

/*login*/
$(document).ready(function(){

 $("#login").click(function(){

  username=$("#user_name").val();
  password=$("#password").val();
  $.ajax({
   type: "POST",
   url: "login.php",
   data: "pwd="+password+"&name="+username,
   success: function(html){
    if(html=='true')
    {
     $("#login_form").html('<div class="alert alert-success" >You have  successfully logged in!</div>');
     

     $('#after_login').html("Hi,"+username+"<a href='logout.php' id='logout'><img class='menu-button col-lg-1' src='pins/logout.png'/></a>");
     window.location.reload();
    }
    else
    {
     $("#add_err").html('<div class="alert alert-warning" >Wrong User Name or Password</div>');
    }
   },
   beforeSend:function()
   {
    $("#add_err").html('<div style="height:20px;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please wait</font> <img style="height:20px;width:100px;"class="img-thumbnail" src="images/loadings.gif" alt="Loading...." align="center" title="Loading...."/></div><br clear="all">')
   }

  });

  return false;
 });
          
});

</script>

<script type="text/javascript">
$(document).ready(function(){

$(".submit").click(function(){
var Event_Name=$(this).val();
$.ajax({
type: "POST",
url: "ajax.php",
data: "Event_Name="+Event_Name,
success: function(event_name){
$("."+Event_Name+" .result").html(event_name);
$("."+Event_Name+" .register").css('display','none');
},
beforeSend:function()
{
$("."+Event_Name+" .result").html('<div style="height:20px;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please wait</font> <img style="height:20px;width:100px;"class="img-thumbnail" src="images/loadings.gif" alt="Loading...." align="center" title="Loading...."/></div><br clear="all">')
}
});
return false;

});

});

</script>


</head>
<body>
<style>
/*img{
  width:100%;
}*/

.menu-button{
 /* width:80%;*/
 margin:0px;
 padding:0px;
 cursor:pointer;
}
#menu{
 position:absolute;
  top:85px;
  width:100%;
}
.img-thumbnail{
  background-color: rgba(0,0,0,0);
  border:0px;
}
/*.col-lg-1{
  width:9%;
}*/
.col-lg-2{
  width:10%;
}

.navbar{
  background-color: rgba(0,0,0,0);
  border:0px;
}
#after_login{
  color:white;
}
</style>





<nav id="menu" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<div  id="profile" class="row">
  <div class="col-lg-2"></div>
   <?php if(isset($_SESSION['user_id'])){
  
    echo "<div id='after_login'><a href='logout.php' id='logout'><img class='menu-button col-lg-1' src='pins/logout.png'/></a>Hi,".$_SESSION['user_name']." (".$_SESSION['user_id'].")</div>";
  ?>
  

<?php }else {?>
  <div id="after_login">

  <img data-toggle="modal" data-target=".signup" class="before_login menu-button col-lg-1"src="pins/register.png"/>
<img id="login_a" href="#" data-toggle="modal" data-target=".login" class="before_login menu-button col-lg-1" src="pins/login.png"/>
</div>

  <?php } ?>

</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>














 <div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        .<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
  &times;</button>
  <h4 class="modal-title">Login</h4>
  </div>
  <div class="modal-body">
 <div id="login_form">
 <form action="login.php">
  
 <!--  <label>User Name:</label>
  <input type="text" id="user_name" name="user_name" /> -->
  
 <div class="form-group">
          <label >User Name</label>
          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter User Name" required>
          </div>

<!--   <label>Password:</label>
  <input type="password" id="password" name="password" /> -->

<div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
          </div>

  <div class="modal-footer row">
    <div  class="err" align="left" id="add_err"></div>
  <input class="btn-primary btn-lg btn-success" type="submit" id="login" value="Login" />
  <input class="btn-primary btn-lg" type="button" data-dismiss="modal" data-toggle="modal" data-target=".signup" value="Sign up" />
  </div>

 </form>
 
 </div>

 </div>
      </div>
    </div>
  </div>







































<div class="modal fade signup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        .<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
  &times;</button>
  <h4 class="modal-title">Sign Up</h4>
  </div>
  <div   class="modal-body">
<div id="signup_form">

<!-- Code Begins -->


<div class="form-group">
  <label >Full Name</label>
  <input type="text" class="form-control" id="fullnames" name="fullnames" placeholder="Enter Full Name" required>
</div>


<!-- <div style="width:115px; padding-top:10px;float:left;" align="left">Your Fullname:</div>
<div style=";float:left;" align="left"><input type="text"  id="fullnames" name="fullnames" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all"> -->


          <div class="form-group">
          <label >User Name</label>
          <input type="text" class="form-control" id="usernames" name="usernames" placeholder="Enter Desired User Name" required>
          </div>


<div class="form-group">
          <label>Email address</label>
          <input type="text" class="form-control" id="emails" name="emails" placeholder="Enter email"required>
          </div>

<div class="form-group">
          <label >College Name</label>
          <input type="text" class="form-control" id="colg" name="colg" placeholder="Enter College Name" required>
          </div>
          <div class="form-group">
          <label >Phone Number</label>
          <input type="text" class="form-control" id="phne" name="phne" placeholder="Enter Mobile Number" required>
          </div>


<div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="passs" name="passs" placeholder="Enter your Password" required>
          </div>

</div>
          </div>

          <div class="modal-footer">
            <div class="row">
<div align="left"  class="col-lg-10" id="signup_status"></div>
<button href="javascript:void(0);"  class="col-lg-2 btn btn-success btn-lg " onClick="Users_Registration();">Submit</button>
</div>
</div>
      </div>
    </div>
  </div>








<style type="text/css">
#load
{
display:none;
/*width:500px;
height:500px;
border:2px solid black;
background:url(loading3.gif) no-repeat;*/
}
#line
{
margin:20px 0;
}
</style>



<?php include('eventValidrefresh.php');?>


<!-- 
<button  class="btn btn-primary btn-lg" data-toggle="modal" data-target=".ityuktha">
  ityuktha
</button>

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".winadroit">
  winadroit
</button>



<div class="modal fade ityuktha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ityuktha</h4>
      </div>
      <div class="modal-body">
        <div id="load" style="">
</div>
<div class="result">
</div>
<button type="submit" class="register submit btn btn-primary" name="Event_Name" value="ityuktha">register</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade winadroit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">winadroit</h4>
      </div>
      <div class="modal-body">
        <div id="load" style="">
</div>

<div class="result">
</div>
<button type="submit"  class="register submit btn btn-primary" name="Event_Name" value="winadroit">register</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 -->

</body>
</html>
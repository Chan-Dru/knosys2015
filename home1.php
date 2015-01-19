<html>
<head>
	<title>Knosys'15</title>
  <link rel="shortcut icon" href="logo/logo3.png"/>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.1/custom/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="content.css">
  <link rel="stylesheet" href="home1.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



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
}
});
return false;

});
});
</script>



</head>
<body onload="setup();" ondragstart="return false;" ondrop="return false;">
  <div id="canvas">
<canvas id="Canvas2D">
<canvas>
</div>
<div id="body" class="container-fluid">

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
  
    echo "<div id='after_login'><a href='logout.php' id='logout'><img class='menu-button col-lg-1' src='pins/logout.png'/></a>Hi,".$_SESSION['user_name']."</div>";
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



  <?php
//include('signupindex.php');
  ?>
  <div id="heading">
    <img id="headerimg" src="svg/header.png"/>
    
 </div>
    


    <div id="layer" class="container">
      
      <div id="top"></div>
      <div id="fake1" class="row"></div>
      <div id="fake2" class="row"></div>
      <div id="fake3" class='row'></div>

      <div class="row">
        <div id="knosys" class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <!-- <img id="knosys-img" class="col-lg-7 col-md-7 col-sm-7 col-xs-10" src="svg/k1.svg"/> --> <img id="knosys-img" class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="background:url('svg/k1.svg') no-repeat;background-size:contain;"src="svg/knosys.svg"/>
        </div>
      </div>

      <div id="network1" class="row">
        <div id="network1-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network1-img" class="network" src="svg/network1.svg"/>
        </div>
      </div>

      <div class="row">
        <div id="first-node" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div  data-toggle="modal" data-target=""><img id="sponsors" class="level1" src="svg/sponsors.svg"/></div>
          <div  ><img id="events" class="level1" src="svg/events.svg"/></div>
          <div  ><img id="workshop" class="level1" src="svg/workshops.svg"/></div>
          <div  data-toggle="modal" data-target=".contacts"><img id="contacts" class="level1" src="svg/contacts.svg"/></div>
        </div>
      </div>

      <div id="network2" class="row">
        <div id="network2-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network2-img" class="network" src="svg/network2.svg"/>
        </div>
      </div>
      <div id="network3" class="row">
        <div id="network3-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network3-img" class="network" src="svg/network3.svg"/>
        </div>
      </div>

      <div class="row">
        <div id="event-sub" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div  ><img id="code"class="level2" src="svg/coding.svg"/></div>
          <div  ><img id="game"class="level2" src="svg/gaming.svg"/></div>
          <div  ><img id="brain"class="level2" src="svg/brain.svg"/></div>
          <div  ><img id="online" class="level2" src="svg/online.svg"/></div>
        </div>
        <div id="workshop-sub" class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <div  id="mozilla" data-toggle="modal" data-target=""><img id="workshop1" class="level3" src="svg/firefox.svg"/></div>
          <div  id="ethicalHacking" data-toggle="modal" data-target=""><img id="workshop2" class="level3" src="svg/ethicalHacking.svg"/></div>
        </div>
      </div>

      <div id="network4" class="row">
        <div id="network4-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network4-img" class="network" src="svg/network4.svg"/>
        </div>
      </div>

      <div id="network5" class="row">
        <div id="network5-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network5-img" class="network" src="svg/network5.svg"/>
        </div>
      </div>

      <div id="network6" class="row">
        <div id="network6-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network6-img" class="network" src="svg/network6.svg"/>
        </div>
      </div>
        
      <div id="network7" class="row">
        <div id="network7-hold" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img  id="network7-img" class="network" src="svg/network7.svg"/>
        </div>
      </div>

      <div class="row">
        <div id="coding-sub" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="codeHunt" data-toggle="modal" data-target=".lockAndkey"><img class="level4" src="svg/lock&key.svg"/></div>
          <div id="spyC" data-toggle="modal" data-target=".Enigma"><img class="level4" src="svg/enigma.svg"/></div>
          <div id="debug" data-toggle="modal" data-target=".debugCbug"><img class="level4" src="svg/dbugcbug.svg"/></div>
          <div id="reverse" data-toggle="modal" data-target=".HackOCrusade"><img class="level4" src="svg/hackOcrusasde.svg"/></div>
        </div>
        <div id="online-sub" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="codeChef" data-toggle="modal" data-target=".CutItShort"><img class="level5" src="svg/shortFlim.svg"/></div>
          <!-- <div id="treasurHunt" data-toggle="modal" data-target=".Cob_Web"><img class="level5" src="svg/maze.svg"/></div> -->
          <div id="treasurHunt" data-toggle="modal" data-target=".maze"><img class="level5" src="svg/maze.svg"/></div>
          <div id="photography" data-toggle="modal" data-target=".ShootTheFrame"><img class="level5" src="svg/shootTheFrame.svg"/></div>
          <div id="webEvent" data-toggle="modal" data-target=".webProjectX"><img class="level5" src="svg/webprojectx.svg"/></div>
        </div>
        <div id="brain-sub" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
          <div id="PP" data-toggle="modal" data-target=".Ityuktha"><img class="level6" src="svg/ityuktha.svg"/></div>
          <div id="windows" data-toggle="modal" data-target=".winAdroit"><img class="level6" src="svg/winAdroit.svg"/></div>
          <div id="crypto" data-toggle="modal" data-target=""><img class="level6" src="svg/antagon.svg"/></div>
          <!-- <div id="quiz" data-toggle="modal" data-target=".quiz"><img class="level6" src="svg/fifa.svg"/></div> -->
        </div>
        <div id="gaming-sub" class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <div id="cod" data-toggle="modal" data-target=".cod"><img class="level3" src="svg/cod.svg"/></div>
          <div id="funroom" data-toggle="modal" data-target=""><img class="level3" src="svg/funroom.svg"/></div>
          <!-- <div id="blur" data-toggle="modal" data-target=".blur"><img class="level7" src="svg/blur.svg"/></div>
          <div id="fifa" data-toggle="modal" data-target=".fifa"><img class="level7" src="svg/fifa.svg"/></div> -->
        </div>
      </div>
    </div>
  </div>

<script src="home1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>







</body>
</html>
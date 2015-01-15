<html>
<head>

 <script type="text/javascript">
$(document).ready(function(){
 $("#login_a").click(function(){
  $("#shadow").fadeIn("normal");
  $("#login_form").fadeIn("normal");
  $("#user_name").focus();
 });
 $("#cancel_hide").click(function(){
  $("#login_form").fadeOut("normal");
  $("#shadow").fadeOut();
 });
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
  width:14.5%;
}

.navbar{
  background-color: rgba(0,0,0,0);
  border:0px;
}
#after_login{
  color:white;
}
</style>



<?php session_start(); ?>

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


<script language="javascript" type="text/javascript" src="js/vpb_script.js"></script>  
</body>
</html>
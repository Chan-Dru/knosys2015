<html>
<head>
	<title>knosys</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="content.css">
  <link rel="stylesheet" href="home1.css">

</head>
<body onload="setup();">
  <div id="canvas">
<canvas id="Canvas2D">
<canvas>
</div>
<div id="body" class="container-fluid">
  <div id="heading">
    <img id="headerimg" src="svg/header.png"/>
    
 
<div class="modal fade login " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
      </div>
      <div class="modal-body">

         <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter userName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target=".signup">sign up</button>
        <button type="submit" class="btn btn-success btn-lg" >Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
<div class="modal fade signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">sign up</h4>
      </div>
      <div class="modal-body">
       
        <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter userName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
 <!--  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
  </div> -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">College Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter collegeName"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Department"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Enter PhoneNumber"required>
  </div>



      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target=".login">login</button>
        <button type="submit" class="btn btn-success btn-lg">submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
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
          <div id="codeHunt" data-toggle="modal" data-target=""><img class="level4" src="svg/lock&key.svg"/></div>
          <div id="spyC" data-toggle="modal" data-target=".spyc"><img class="level4" src="svg/enigma.svg"/></div>
          <div id="debug" data-toggle="modal" data-target=".debug"><img class="level4" src="svg/dbugcbug.svg"/></div>
          <div id="reverse" data-toggle="modal" data-target=".reverse"><img class="level4" src="svg/hackOcrusasde.svg"/></div>
        </div>
        <div id="online-sub" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="codeChef" data-toggle="modal" data-target=""><img class="level5" src="svg/antagon.svg"/></div>
          <div id="treasurHunt" data-toggle="modal" data-target=""><img class="level5" src="svg/maze.svg"/></div>
          <div id="photography" data-toggle="modal" data-target=""><img class="level4" src="svg/shootTheFrame.svg"/></div>
          <div id="webEvent" data-toggle="modal" data-target=""><img class="level4" src="svg/webprojectx.svg"/></div>
        </div>
        <div id="brain-sub" class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
          <div id="PP" data-toggle="modal" data-target=".PP"><img class="level6" src="svg/ityuktha.svg"/></div>
          <div id="windows" data-toggle="modal" data-target=".windows"><img class="level6" src="svg/winAdroit.svg"/></div>
          <div id="crypto" data-toggle="modal" data-target=""><img class="level6" src="svg/concepcion.svg"/></div>
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
<script src="js/jquery.min.js"></script>
<script src="home1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>







</body>
</html>
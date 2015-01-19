<html>
<head>
	<title>Knosys'15</title>
  <link rel="shortcut icon" href="logo/logo3.png"/>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.1/custom/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="content.css">
  <link rel="stylesheet" href="home1.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body onload="setup();" ondragstart="return false;" ondrop="return false;">
  <div id="canvas">
<canvas id="Canvas2D">
<canvas>
</div>
<div id="body" class="container-fluid">
  <?php
include('signupindex.php');
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
          <div id="treasurHunt" data-toggle="modal" data-target=".Cob_Web"><img class="level5" src="svg/maze.svg"/></div>
          <div id="photography" data-toggle="modal" data-target=".ShootTheFrame"><img class="level4" src="svg/shootTheFrame.svg"/></div>
          <div id="webEvent" data-toggle="modal" data-target=".webProjectX"><img class="level4" src="svg/webprojectx.svg"/></div>
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
<html>
<head>
  
<link id="size-stylesheet" rel="stylesheet" type="text/css" href="css/desktop.css" />
</head>
 <body>

<style>
#right_button{
  position:absolute;
  top:125px;
  right:0px;
  width:24%;
}
.treasure-img{
width:60%;
float:right;
}
.treasure-button{
position:absolute;
top:97px;
right:0px;

}
.accomodation-button{
position: absolute;
top:100px;
right:90px;
display:none;
}
.accomodation-img{
width:60%;
}
</style>











  <a target="_blank" href="accomodation.php"><div class="accomodation-button" ><img class="accomodation-img" src="pins/accomodation.png" /></div></a>
<?php if(isset($_SESSION['user_id'])&&isset($_SESSION['knosys'])) {?>
  <form  action="http://cobweb.knosys.in/index.php" method="POST">
  <input type="hidden" value='<?php echo $_SESSION["user_id"];?>' name="user_id" />
  <input type="hidden" value='<?php echo $_SESSION["knosys"];?>' name="knosys" />
  <input type="hidden" value='<?php echo $_SESSION["user_name"];?>' name="username" />

<button class="treasure-button"  type="submit" style="background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0)"><img class="treasure-img"  src="pins/treasure.png"/></button>
</form>
<?php } ?>




<div id="social">
<a target="_blank" href="https://www.youtube.com/channel/UCfdfi2Jr3I6Go4h5vugsUjA"><img src="pins/youtube.png"/></a>
<a target="_blank" href="https://www.facebook.com/knosys"><img src="pins/facebook.png"/></a>
<a target="_blank" href=""><img src="pins/google.png"/></a>

</div>


<div id="sponsors_title" class="img-rounded">SPONSORS</div>

<div id="slider-holder">
  <div class="slider img-responsive img-rounded">
    <div class="img-responsive img-rounded" style="display: inline-block;">
      <img  src="sponsors/zoho.png"/>
    </div>
    <div class="img-responsive img-rounded">
     <img  src="sponsors/everbright.jpg"/>
    </div>
    <div class="img-responsive img-rounded">
      <img  src="sponsors/venfield.jpg"/>
    </div>
    <div class="img-responsive img-rounded">
      <img  src="sponsors/aas_logo.png"/>
    </div>
    <div class="img-responsive img-rounded">
      <img  src="sponsors/dheen.png"/>
    </div>
    <div class="img-responsive img-rounded" style="padding-top:20px;">
      <img  src="sponsors/new_temp_trans.png"/>
    </div>
    <div class="img-responsive img-rounded" style="padding-top:30px;">
      <img  src="sponsors/greentrendz_logo.png"/>
    </div>
  </div>
</div>


  <div class="notification">
    <div style="display: inline-block;">Event Registration has been started.
    </div>
    <div>Ethical Hacking workshop on 30-01-2015.
    </div>
    <div>Sponsorship window is now open.Contact Ranjith 9488567044.
    </div>
    <!-- <div>
      
    </div>
    <div>
     
    </div>
    <div>
      
    </div> -->
  </div>




 

<style>

 
</style>
<script>
$(document).ready(function(){


function adjustStyle(width) {
    width = parseInt(width);
    if (width < 768) {
        $("#size-stylesheet").attr("href", "css/mobile.css");
    } else if ((width >= 768) && (width < 992)) {
        $("#size-stylesheet").attr("href", "css/tab.css");
    } else{
       $("#size-stylesheet").attr("href", "css/desktop.css"); 
    }
}

$(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});

	var currentIndex = 0,
  items = $('.slider div'),
  itemAmt = items.length;

function cycleItems() {
  var item = $('.slider div').eq(currentIndex);
  items.hide();
  item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 2000);



var NcurrentIndex = 0,
  Nitems = $('.notification div'),
  NitemAmt = Nitems.length;

function NcycleItems() {
  var Nitem = $('.notification div').eq(NcurrentIndex);
  Nitems.hide();
  Nitem.css('display','inline-block');
}

var NautoSlide = setInterval(function() {
  NcurrentIndex += 1;
  if (NcurrentIndex > NitemAmt - 1) {
    NcurrentIndex = 0;
  }
  NcycleItems();
}, 2500);

})

</script>
   </body>
</html>
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

#about_knosys{
  position:absolute;
  top:20px;
  left:50px;
}

#about_knosys{
height:50px;
margin-top:30px;
}



</style>

<div id="faq"><a href="query.php" target="_blank">FAQ</a></div>



<div class="row" id="about_k">
<div id="about_knosys" class="btn col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-lg-3 col-xs-3 col-sm-3 col-md-3" data-toggle="modal" data-target=".about"></div>
</div>


<div id="counter">


<img src="http://hitwebcounter.com/counter/counter.php?page=5962527&style=0036&nbdigits=5&type=page&initCount=0" title="visitors estimator" Alt="visitors estimator"   border="0" >
<br/>
<center><strong>Hit Counter</strong></center>  




<!-- <img src="http://hitwebcounter.com/counter/counter.php?page=5962546&style=0036&nbdigits=5&type=ip&initCount=0" title="http://www.hitwebcounter.com/" Alt="http://www.hitwebcounter.com/"   border="0" >
<br/>
<center><strong>visitors</strong></center> -->
   


</div>





  <div class="accomodation-button"><a target="_blank" href="accomodation.php" ><img  class="accomodation-img" src="pins/accomodation.png" /></a></div>
<?php if(isset($_SESSION['user_id'])&&isset($_SESSION['knosys'])) {?>
  <form  action="http://cobweb.knosys.in/index.php" method="POST">
  <input type="hidden" value='<?php echo $_SESSION["user_id"];?>' name="user_id" />
  <input type="hidden" value='<?php echo $_SESSION["knosys"];?>' name="knosys" />
  <input type="hidden" value='<?php echo $_SESSION["user_name"];?>' name="username" />

<input class="treasure-button "  type="image" alt='submit' class="btn-sm btn"  src="pins/treasure.png"/>
</form>
<?php } ?>




<div id="social">
<a target="_blank" href="https://www.youtube.com/channel/UCfdfi2Jr3I6Go4h5vugsUjA"><img src="pins/youtube.png"/></a>
<a target="_blank" href="https://www.facebook.com/knosys"><img src="pins/facebook.png"/></a>
<a target="_blank" href="https://plus.google.com/u/0/107415381258778827347/posts"><img src="pins/google.png"/></a>

</div>


<div id="sponsors_title" class="img-rounded">SPONSORS</div>

<div id="slider-holder">
  <div class="slider img-responsive img-rounded">
    <div class="img-responsive img-rounded" style="display: inline-block;padding-top:30px;">
      <a href="http://www.btechjosh.com/" target="_blank"><img  src="sponsors/btechjosh.png"/></a>
    </div>
    <!-- <div class="img-responsive img-rounded" style="padding-top:10px;">
      <a href="http://www.codechef.com/" target="_blank"><img  src="sponsors/codechef.png"/></a>
    </div> -->
    <div class="img-responsive img-rounded" style="padding-top:30px;">
      <a href="https://www.reload.in/" target="_blank"><img  src="sponsors/reload.png"/></a>
    </div>
    <div class="img-responsive img-rounded" style="padding-top:20px;">
      <a href="http://www.passionsolutions.com/" targer="_blank"><img  src="sponsors/workshop.png"/></a>
    </div>
    <div class="img-responsive img-rounded" style="padding-top:20px;">
      <img  src="sponsors/new_temp_trans.png"/>
    </div>
    <div class="img-responsive img-rounded" style="padding-top:10px;">
      <a href="http://www.lg.com/in" target="_blank"><img  src="sponsors/lg.jpg"/></a>
    </div>
    <!-- <div class="img-responsive img-rounded" style="padding-top:30px;">
      <img  src="sponsors/greentrendz_logo.png"/>
    </div> -->
  </div>
</div>


  <div class="notification">
    <div style="display: inline-block;">Event Registration has  started.
    </div>
    <div>Ethical Hacking workshop on 30-01-2015.
    </div>
    <div>Sponsorship window is now open.Contact Ranjith 9488567044.
    </div>
    <div>Treasuer Hunt (CobWeb) event started.</div>
    <div>Accomodation Registration Started.</div>
    <div>WebProjectX -(online) Problem Statements are published.</div>
    <div>Antagon - Problem Statement is published.</div>
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
}, 3000);

})

</script>
   </body>
</html>
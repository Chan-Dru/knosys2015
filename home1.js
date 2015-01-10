$(document).ready(function(){
  var i=0;
var j=0;
var e1=0;
var e2=0;
var e3=0;
var e4=0;
$('.level1').addClass('col-lg-3 col-sm-3 col-xs-3 col-md-3');
$('.level2').addClass('col-lg-3 col-sm-3 col-xs-3 col-md-3');
$('.level3').addClass('col-lg-4 col-sm-4 col-xs-4 col-md-4');
$('.level4').addClass('col-lg-3 col-sm-3 col-xs-3 col-md-3');
$('.level5').addClass('col-lg-3 col-sm-3 col-xs-3 col-md-3');
$('.level6').addClass('col-lg-3 col-sm-3 col-xs-3 col-md-3');
$('.level7').addClass('col-lg-4 col-sm-3 col-xs-3 col-md-3');
  $('#knosys-img').click(function(){
    if(i==0&&j==0){
      knosysup();
      i=1;
    }else if(i==1&&j==0){
      knosysdown();
      i=0;
    }else if(i==2&&j==0){
      eventdown();
      setTimeout(function(){knosysdown()},1200);
      i=0;j=0;
    }else if(i==2&&j==1){
      workshopdown();
      setTimeout(function(){knosysdown()},1200);
      i=0;j=0;
    }else if(i==3&&e1==1){
      codedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){knosysdown();},2400);
      i=0;e1=0;
    }else if(i==3&&e2==1){
      onlinedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){knosysdown();},2400);
      i=0;e2=0;
    }else if(i==3&&e3==1){
      braindown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){knosysdown();},2400);
      i=0;e3=0;
    }else if(i==3&&e4==1){
      gamedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){knosysdown();},2400);
      i=0;e4=0;
    }
  });
  $('#events').click(function(){
    if(i==1&&j==0){
      eventup();
      i=2;
    }else if(i==2&&j==0){
      eventdown();
      i=1;
    }else if(i==2&&j==1){
      workshopdown();
      setTimeout(function(){eventup();},1500);
      i=2;j=0;
    }else if(i==3&&e1==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e1=0;
    }else if(i==3&&e2==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e2=0;
    }else if(i==3&&e3==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e3=0;
    }else if(i==3&&e4==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e4=0;
    }
  });
  $('#sponsors').click(function(){
    if(i==2&&j==1){
      workshopdown();
      i=1;j=0;
    }else if(i==2&&j==0){
      eventdown();
      i=1;
    }else if(i==3&&e1==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e1=0;
    }else if(i==3&&e2==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e2=0;
    }else if(i==3&&e3==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e3=0;
    }else if(i==3&&e4==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e4=0;
    }
  });
  $('#contacts').click(function(){
    if(i==2&&j==1){
      workshopdown();
      i=1;j=0;
    }else if(i==2&&j==0){
      eventdown();
      i=1;
    }else if(i==3&&e1==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e1=0;
    }else if(i==3&&e2==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e2=0;
    }else if(i==3&&e3==1){
      restore();
      setTimeout(function(){eventdown();},1200);
      i=1;e3=0;
    }else if(i==3&&e4==1){
      restore();
      setTimeout(function(){eventdown();},1200);;
      i=1;e4=0;
    }
  });
  $('#workshop').click(function(){
    if(i==1&&j==0){
      workshopup();
      i=2;
      j=1;
    }else if(i==2&&j==1){
      workshopdown();
      i=1;
      j=0
    }else if(i==2&&j==0){
      eventdown();
      setTimeout(function(){workshopup();},1500);
      i=2;
      j=1;
    }else if(i==3&&e1==1){
      codedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){workshopup();},2400);
      i=2;e1=0;j=1;
    }else if(i==3&&e2==1){
      onlinedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){workshopup();},2400);
      i=2;e2=0;j=1;
    }else if(i==3&&e3==1){
      braindown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){workshopup();},2400);
      i=2;e3=0;j=1;
    }else if(i==3&&e4==1){
      gamedown();
      setTimeout(function(){eventdown();},1200);
      setTimeout(function(){workshopup();},2400);
      i=2;e4=0;j=1;
    }
  });
  $('#code').click(function(){
    if(i==2){
      codeup();
      i=3;
      e1=1;
    }else if(i==3&&(e2||e3||e4)){
      restore();
      setTimeout(function(){codeup();},1400);
      i=3;
      e1=1;
    }else if(i==3&&e1==1){
      codedown();
      i=2;e1=0;
    }
  });
  $('#online').click(function(){
    if(i==2){
      onlineup();
      i=3;
      e2=1;
    }else if(i==3&&(e1||e3||e4)){
      restore()
      setTimeout(function(){onlineup();},1400);
      i=3;
      e2=1;
    }else if(i==3&&e2==1){
      onlinedown();
      i=2;e2=0;
    }
  });
  $('#brain').click(function(){
    if(i==2){
      brainup();
      i=3;
      e3=1;
    }else if(i==3&&(e1||e2||e4)){
      restore()
      setTimeout(function(){brainup();},1400);
      i=3;
      e3=1;
    }else if(i==3&&e3==1){
      braindown();
      i=2;e3=0;
    }
  });
  $('#game').click(function(){
    if(i==2){
      gameup();
      i=3;
      e4=1;
    }else if(i==3&&(e1||e2||e3)){
      restore()
      setTimeout(function(){gameup();},1400);
      i=3;
      e4=1;
    }else if(i==3&&e4==1){
      gamedown();
      i=2;e4=0;
    }
  });
  function restore(){
    if(e1==1){
      codedown();
      e1=0;
    }else if(e2==1){
      onlinedown();
      e2=0;
    }else if(e3==1){
      braindown();
      e3=0;
    }else if(e4==1){
      gamedown();
      e4=0;
    }
  }
  function knosysup(){
   $('#fake1').slideToggle(1500);
    $('#knosys').toggleClass('k1');
    $('#knosys-img').toggleClass('k1img').css("backgroundColor","");
    $('#first-node').slideToggle(1000);
    $('#network1').slideToggle(1000);
  }
  function knosysdown(){
    $('#knosys').toggleClass('k1');
    $('#knosys-img').toggleClass('k1img').css("backgroundColor","");
    $('#fake1').slideToggle(1500);
    $('#first-node').slideToggle(1);
    $('#network1').slideToggle(1000);
  }
  function eventup(){
    $('#fake2').slideToggle(1500);
    $('#knosys').toggleClass('k2');
    $('#knosys-img').toggleClass('k2img').css("backgroundColor","");
    $('#first-node').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level1').toggleClass('medium');
    $('#events').css("backgroundColor","");
    $('#event-sub').slideToggle(1000);
    eventsnetwork();
  }
  function eventdown(){
    $('#fake2').slideToggle(1500);
    $('#knosys').toggleClass('k2');
    $('#knosys-img').toggleClass('k2img');
    $('#first-node').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level1').toggleClass('medium');
    $('#events').css("backgroundColor","");
    $('#event-sub').slideToggle(1);
    eventsnetwork();
  }
  function workshopup(){
    $('#fake2').slideToggle(1500);
    $('#knosys').toggleClass('k2');
    $('#knosys-img').toggleClass('k2img');
    $('#first-node').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level1').toggleClass('medium');
    $('#workshop').css("backgroundColor","");
    $('#workshop-sub').slideToggle(1000);
    workshopnetwork();
  }
  function workshopdown(){
    $('#fake2').slideToggle(1500);
    $('#knosys').toggleClass('k2');
    $('#knosys-img').toggleClass('k2img');
    $('#first-node').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level1').toggleClass('medium');
    $('#workshop').css("backgroundColor","");
    $('#workshop-sub').slideToggle(1);
    workshopnetwork();
  }
  function gameup(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#game').css("backgroundColor","");
    $('#gaming-sub').slideToggle(1000);
    gamenetwork();
  }
  function gamedown(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#game').css("backgroundColor","");
    $('#gaming-sub').slideToggle(1);
    gamenetwork();
  }
  function onlineup(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#online').css("backgroundColor","");
    $('#online-sub').slideToggle(1000);
    onlinenetwork();
  }
  function onlinedown(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#online').css("backgroundColor","");
    $('#online-sub').slideToggle(1);
    onlinenetwork();
  }
  function codeup(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#code').css("backgroundColor","");
    $('#coding-sub').slideToggle(1000);
    codenetwork();
  }
  function codedown(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#code').css("backgroundColor","");
    $('#coding-sub').slideToggle(1);
    codenetwork();
  }
  function brainup(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#brain').css("backgroundColor","");
    $('#brain-sub').slideToggle(1000);
    brainnetwork();
  }
  function braindown(){
    $('#fake3').slideToggle(1500);
    $('#knosys').toggleClass('k3');
    $('#knosys-img').toggleClass('k3img');
    $('#first-node').toggleClass('col-lg-10 col-md-10 col-sm-10 col-xs-12');
    $('.level1').toggleClass('small');
    $('#event-sub').toggleClass('col-lg-11 col-md-11 col-sm-11 col-xs-12');
    $('.level2').toggleClass('medium');
    $('#brain').css("backgroundColor","");
    $('#brain-sub').slideToggle(1);
    brainnetwork();
  }
  function eventsnetwork(){
  $('#network1-img').toggleClass('n1-img',1000);
    $('#network1-hold').toggleClass('n1',1000);
     $('#network2').slideToggle(1500);
  }
  function workshopnetwork(){
    $('#network1-img').toggleClass('n1-img',1000);
    $('#network1-hold').toggleClass('n1',1000);
    $('#network3').slideToggle(1500);
  }
  function onlinenetwork(){
    $('#network1-img').toggleClass('n2-img',1000);
    $('#network1-hold').toggleClass('n2',1000);
    $('#network2-img').toggleClass('n1-img',1000);
    $('#network2-hold').toggleClass('n1',1000);
    $('#network7').slideToggle(1500);
  }
  function brainnetwork(){
    $('#network1-img').toggleClass('n2-img',1000);
    $('#network1-hold').toggleClass('n2',1000);
    $('#network2-img').toggleClass('n1-img',1000);
    $('#network2-hold').toggleClass('n1',1000);
    $('#network6').slideToggle(1500);
  }
  function gamenetwork(){
    $('#network1-img').toggleClass('n2-img',1000);
    $('#network1-hold').toggleClass('n2',1000);
    $('#network2-img').toggleClass('n1-img',1000);
    $('#network2-hold').toggleClass('n1',1000);
    $('#network5').slideToggle(1500);

  }
  function codenetwork(){
    $('#network1-img').toggleClass('n2-img',1000);
    $('#network1-hold').toggleClass('n2',1000);
    $('#network2-img').toggleClass('n1-img',1000);
    $('#network2-hold').toggleClass('n1',1000);
    $('#network4').slideToggle(1500);
  }
});
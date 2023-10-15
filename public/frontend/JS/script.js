$(document).ready(function(){

// ------------------------- color switcher starts
$(".switcher-trigger").click(function(){
  $(".switcher-wrapper").toggleClass("open");
});

$(".color-list .green button").click(function(){
  $("#switcher").attr("href","CSS/Color/green.css")
  $(".color-list li.green button").css("font-size","16px")
  $(".pink button, .blue button, .yellow button, .purple button, .orange button").css("font-size","0px")
});

$(".color-list .pink button").click(function(){
  $("#switcher").attr("href","CSS/Color/pink.css")
  $(".color-list li.pink button").css("font-size","16px")
  $(".green button, .blue button, .yellow button, .purple button, .orange button").css("font-size","0px")
});

$(".color-list .blue button").click(function(){
  $("#switcher").attr("href","CSS/Color/blue.css")
  $(".color-list li.blue button").css("font-size","16px")
  $(".green button, .pink button, .yellow button, .purple button, .orange button").css("font-size","0px")
});

$(".color-list .purple button").click(function(){
  $("#switcher").attr("href","CSS/Color/purple.css")
  $(".color-list li.purple button").css("font-size","16px")
  $(".green button, .pink button, .yellow button, .blue button, .orange button").css("font-size","0px")
});

$(".color-list .orange button").click(function(){
  $("#switcher").attr("href","CSS/Color/orange.css")
  $(".color-list li.orange button").css("font-size","16px")
  $(".green button, .pink button, .yellow button, .blue button, .purple button").css("font-size","0px")
});

$(".color-list .yellow button").click(function(){
  $("#switcher").attr("href","CSS/Color/yellow.css")
  $(".color-list li.yellow button").css("font-size","16px")
  $(".green button, .pink button, .orange button, .blue button, .purple button").css("font-size","0px")
});



// ------------------------ end of color switcher


// ------------------------ mobile-menu starts

$(".trigger").click(function(){
$(this).toggleClass("on");
if ($(".trigger").hasClass("on")) {
  $(".nav-menu").css("left","0px");
} else {  $(".nav-menu").css("left","-100%");}
});

// ------------------------ end of mobile-menu


// ------------------------ LineProgressbar starts
$('#html').LineProgressbar({
percentage:90,   
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',  
});
$('#css').LineProgressbar({
percentage:80,   
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',  
});
$('#java').LineProgressbar({
percentage:65,   
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',  
});
$('#jquery').LineProgressbar({
percentage:65, 
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',    
});
$('#php').LineProgressbar({
percentage:75,   
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',  
});
$('#laravel').LineProgressbar({
percentage:85, 
radius: '3px',
height: '10px',
duration: 6000,
backgroundColor:'#2b2a2a',    
});
$('#flutter').LineProgressbar({
  percentage:70, 
  radius: '3px',
  height: '10px',
  duration: 6000,
  backgroundColor:'#2b2a2a',    
  });

// ------------------------ end of LineProgressbar 


//------------------ testimonial starts

            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 4,
                margin: 0,
                autoplay: false,
                dots:true,
                autoplayTimeout: 6000,
                smartSpeed: 1000,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 1
                  },
                  1170: {
                    items: 1
                  }
                }
            });
//------------------ end of testimonial



});

// ------------------------- end of ready function

//------------------portfolio gallery starts
new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
//------------------ end of portfolio gallery


//-------------------- Portfolio hover starts
      $(function() {
        $(' #grid > li ').each( function() { $(this).hoverdir(); } ); 
       });
//-------------------- end of Portfolio hover      
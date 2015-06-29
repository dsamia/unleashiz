function anchor(){
   $('#anchor-1').click(function() {
     $('html,body').animate({scrollTop: $("#bc-2").offset().top-114}, 'slow');
   });
   
   $('#anchor-2').click(function() {
     $('html,body').animate({scrollTop: $("#bc-3").offset().top-114}, 'slow');
   });
   
   $('#anchor-3').click(function() {
     $('html,body').animate({scrollTop: $("#bc-4").offset().top-114}, 'slow');
   });
   
   $('#anchor-4').click(function() {
     $('html,body').animate({scrollTop: $("#bc-5").offset().top-114}, 'slow');
   });
   
   $('#anchor-5').click(function() {
     $('html,body').animate({scrollTop: $("#bc-footer").offset().top-114}, 'slow');
   });  
}

function menu(){
   $('#menu-item-90').click(function() {
     $('html,body').animate({scrollTop: $("#bc-2").offset().top-114}, 'slow');
   });
   
   $('#menu-item-91').click(function() {
     $('html,body').animate({scrollTop: $("#bc-3").offset().top-114}, 'slow');
   });
   
   $('#menu-item-92').click(function() {
     $('html,body').animate({scrollTop: $("#bc-4").offset().top-114}, 'slow');
   });
   
   $('#menu-item-93').click(function() {
     $('html,body').animate({scrollTop: $("#bc-5").offset().top-114}, 'slow');
   });
   
   $('#menu-item-94').click(function() {
     $('html,body').animate({scrollTop: $("#bc-footer").offset().top-114}, 'slow');
   });
}

function afficheVideo(){
    $("#poster").click(function(){
       $(this).removeClass("open").addClass("close"); 
       $("#IndexVideoPlayer").removeClass("close").addClass("open");
       $("video").attr("autoplay",""); 
    });
}

$(document).ready(function(){
    anchor();
    menu();
    afficheVideo();
});
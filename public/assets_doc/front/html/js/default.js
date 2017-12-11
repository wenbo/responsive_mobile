
/* ----------------------------------------
	imgChange
---------------------------------------- */
$(function(){

 imgChange()

 $(window).resize(function() {
  imgChange()
 });

 function imgChange (){

  var wid = $(window).width();
  
  if( wid < 1300 & wid > 767 ){
   $('.imgChange2').each(function(){
    $(this).attr("src",$(this).attr("src").replace('_pc', '_pad'));
   });
  } else {
   $('.imgChange2').each(function(){
    $(this).attr("src",$(this).attr("src").replace('_pad', '_pc'));
   });
  }

  if( wid < 767 ){
   $('.imgChange').each(function(){
    $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
   });
  } else {
   $('.imgChange').each(function(){
    $(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
   });
  }

 }
});



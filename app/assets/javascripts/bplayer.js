// JavaScript Document

var MyTime;
var index = 0;
var maximg = 5;
jQuery(function($){
	//$('<div id="flow"></div>').appendTo("#myjQuery");

	//滑动导航改变内容	
	$("#myjQueryNav dl").hover(function(){
		if(MyTime){
			clearInterval(MyTime);
		}
		index  =  $("#myjQueryNav dl").index(this);
		MyTime = setTimeout(function(){
		ShowjQueryFlash(index);
		$('#myjQueryContent').stop();
		} , 400);

	}, function(){

		clearInterval(MyTime);
		MyTime = setInterval(function(){
		ShowjQueryFlash(index);
		index++;
		if(index==maximg){
			index=0;
			//add by ou 2015/02/28
			clearInterval(MyTime);
			stop7second();
			}
		} , 5000);
	});
/*	 $('#myjQueryContent').hover(function(){
			if(MyTime){
				 clearInterval(MyTime);
			  }
	 },function(){
				MyTime = setInterval(function(){
				ShowjQueryFlash(index);
				index++;
				if(index==maximg){index=0;}
			  } , 5000);
	 });
*/	
	
	//del by ou 2015/02/28
	/*
	var MyTime = setInterval(function(){
		ShowjQueryFlash(index);
		index++;
		if(index==maximg){index=0;}
	} , 2000);
	*/

	//add by ou 2015/02/28
	stop5second();
});

//add by ou 2015/02/28
function stop5second(){
	if(index==0){
		ShowjQueryFlash(index);
		MyTime = setInterval(function(){
			if(index==0) {index++;}
			ShowjQueryFlash(index);
			index++;
			if(index==maximg){
				index=0;
				
				clearInterval(MyTime);
				stop7second();
			}
		} , 5000);
	}else{
		MyTime = setInterval(function(){
			ShowjQueryFlash(index);
			index++;
			if(index==maximg){
				index=0;
				
				clearInterval(MyTime);
				stop7second();
			}
		} , 5000);
	}
}

//add by ou 2015/02/28
function stop7second(){
	
	MyTime = setInterval(function(){
		ShowjQueryFlash(index);
		index++;
		if(index==maximg){index=0;}

		clearInterval(MyTime);
		stop5second();
	} , 5000);
}

function ShowjQueryFlash(i) {
$("#myjQueryContent li").eq(i).animate({opacity: 1},1000).css({"z-index": "1"}).siblings().animate({opacity: 0},1000).css({"z-index": "0"});
//$("#flow").animate({ left: 652+(i*76) +"px"}, 300 ); //滑块滑动
//$("#myjQueryNav dl").eq(i).addClass("current").siblings().removeClass("current");
}
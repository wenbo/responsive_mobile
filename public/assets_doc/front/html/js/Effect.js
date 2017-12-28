function $G(Read_Id) { return document.getElementById(Read_Id) }
//改编caiying2007
var openedObjId=null
function Effect(ObjectId){
	if (openedObjId){
		$G(openedObjId+"tab").innerHTML = "<img src='/assets_doc/front/html/images/hioki_nav_sp.jpg' width='27' >";
		Start(openedObjId,'Close');
	}
	if(openedObjId!=ObjectId){
		$G(ObjectId+"tab").innerHTML = "<img src='/assets_doc/front/html/images/hioki_nav02_sp.jpg' width='27' >";
		Start(ObjectId,'Opens');
		openedObjId=ObjectId
	}
	else openedObjId=null
}

function Start(ObjId,method){
var BoxHeight = $G(ObjId).offsetHeight;   			//获取对象高度
var MinHeight = 5;									//定义对象最小高度
var MaxHeight = 130;					 			//定义对象最大高度
var BoxAddMax = 1;									//递增量初始值
var Every_Add = 0.15;								//每次的递(减)增量  [数值越大速度越快]
var Reduce    = (BoxAddMax - Every_Add);
var Add       = (BoxAddMax + Every_Add);
//关闭动作**************************************
if (method == "Close"){
var Alter_Close = function(){						//构建一个虚拟的[递减]循环
	BoxAddMax /= Reduce;
	BoxHeight -= BoxAddMax;
	if (BoxHeight <= MinHeight){
		$G(ObjId).style.display = "none";
		window.clearInterval(BoxAction);
	}
	else $G(ObjId).style.height = BoxHeight;
}
var BoxAction = window.setInterval(Alter_Close,1);
}
//打开动作**************************************
else if (method == "Opens"){
var Alter_Opens = function(){
	BoxAddMax *= Add;
	BoxHeight += BoxAddMax;
	if (BoxHeight >= MaxHeight){
		$G(ObjId).style.height = MaxHeight;
		window.clearInterval(BoxAction);
	}else{
	$G(ObjId).style.display= "block";
	$G(ObjId).style.height = BoxHeight;
	}
}
var BoxAction = window.setInterval(Alter_Opens,1);
}
}

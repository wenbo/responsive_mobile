function ShowSub(id_num,num){ //舌签功能
	for(var i = 0;i <= 9;i++){
		if(GetObj("S_Menu_" + id_num + i)){GetObj("S_Menu_" + id_num + i).className = '';}
		if(GetObj("pic_corpus_" + id_num + i)){GetObj("pic_corpus_" + id_num + i).style.display = 'none';}
	}
	if(GetObj("S_Menu_" + id_num + num)){GetObj("S_Menu_" + id_num + num).className = 'selectd';}
	if(GetObj("pic_corpus_" + id_num + num)){GetObj("pic_corpus_" + id_num + num).style.display = 'block';}
}
function GetObj(objName){
	if(document.getElementById){
		return eval('document.getElementById("' + objName + '")');
	}else{
		return eval('document.all.' + objName);
	}
}
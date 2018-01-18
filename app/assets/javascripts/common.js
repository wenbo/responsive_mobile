
$(function(){
	//手机端点击显示菜单
  column=0;
	$('.hioki_column00 .hioki_f23').click(function () {
		if(column%2==0) {
			$('.hioki_column00 ul').show();
			$(".hioki_column00 .hioki_f23").addClass('hioki_column_icon');
		} else {
			$('.hioki_column00 ul').hide();
			$(".hioki_column00 .hioki_f23").removeClass('hioki_column_icon');
		}
		column++;
	});
	i=0;
	$('.hioki_column01 .hioki_f23').click(function () {
		if(i%2==0) {
			$('.hioki_column01 ul').show();
			$(".hioki_column01 .hioki_f23").addClass('hioki_column_icon');
		} else {
			$('.hioki_column01 ul').hide();
			$(".hioki_column01 .hioki_f23").removeClass('hioki_column_icon');
		}
		i++;
	});
	
	ii=0;
	$('.hioki_column02 .hioki_f23').click(function () {
		if(ii%2==0) {
			$('.hioki_column02 ul').show();
			$(".hioki_column02 .hioki_f23").addClass('hioki_column_icon');
		} else {
			$('.hioki_column02 ul').hide();
			$(".hioki_column02 .hioki_f23").removeClass('hioki_column_icon');
		}
		ii++;
	});
	
	iii=0;
	$('.hioki_column03 .hioki_f23').click(function () {
		if(iii%2==0) {
			$('.hioki_column03 ul').show();
			$(".hioki_column03 .hioki_f23").addClass('hioki_column_icon');
		} else {
			$('.hioki_column03 ul').hide();
			$(".hioki_column03 .hioki_f23").removeClass('hioki_column_icon');
		}
		iii++;
	});
	
	iiii=0;
	$('.product_industry_title .hioki_category_xx').click(function () {
		if(iiii%2==0) {
			$('.product_industry').show();
			$(".product_industry_title .hioki_category_xx").addClass('hioki_category_icon');
		} else {
			$('.product_industry').hide();
			$(".product_industry_title .hioki_category_xx").removeClass('hioki_category_icon');
		}
		iiii++;
	});
	
	pd01=0;
	$('.products_detailed_tab01').click(function () {
		if(pd01%2==0) {
			$('#pic_corpus_01').show();
			$(".products_detailed_tab01").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_01').hide();
			$(".products_detailed_tab01").removeClass('products_detailed_icon');
		}
		pd01++;
	});
	
	pd02=0;
	$('.products_detailed_tab02').click(function () {
		if(pd02%2==0) {
			$('#pic_corpus_02').show();
			$(".products_detailed_tab02").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_02').hide();
			$(".products_detailed_tab02").removeClass('products_detailed_icon');
		}
		pd02++;
	});
	
	pd03=0;
	$('.products_detailed_tab03').click(function () {
		if(pd03%2==0) {
			$('#pic_corpus_03').show();
			$(".products_detailed_tab03").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_03').hide();
			$(".products_detailed_tab03").removeClass('products_detailed_icon');
		}
		pd03++;
	});
	
	pd04=0;
	$('.products_detailed_tab04').click(function () {
		if(pd04%2==0) {
			$('#pic_corpus_04').show();
			$(".products_detailed_tab04").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_04').hide();
			$(".products_detailed_tab04").removeClass('products_detailed_icon');
		}
		pd04++;
	});
	
	pd05=0;
	$('.products_detailed_tab05').click(function () {
		if(pd05%2==0) {
			$('#pic_corpus_05').show();
			$(".products_detailed_tab05").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_05').hide();
			$(".products_detailed_tab05").removeClass('products_detailed_icon');
		}
		pd05++;
	});
	
	pd06=0;
	$('.products_detailed_tab06').click(function () {
		if(pd06%2==0) {
			$('#pic_corpus_06').show();
			$(".products_detailed_tab06").addClass('products_detailed_icon');
		} else {
			$('#pic_corpus_06').hide();
			$(".products_detailed_tab06").removeClass('products_detailed_icon');
		}
		pd06++;
	});
	
});




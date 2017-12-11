function send_xhr(){
  return function (xhr){
    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
  }
};

function setCookie(name,value)//两个参数，一个是cookie的名子，一个是值
{
    var Days = 1; //此 cookie 将被保存 30 天
    var exp  = new Date();    //new Date("December 31, 9998");
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

function getCookie(name)
{
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)"); //正则匹配
    if(arr=document.cookie.match(reg)){
      return unescape(arr[2]);
    }
    else{
     return null;
    }
}

function delCookie(name)//删除cookie
{
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}

$(document).ready(function() {
		
	$(".sidebar_search").mouseover(function() {
  $(this).stop();
  $(this).animate({width: 365}, 400);
	})
	$(".sidebar_search").mouseout(function() {
  $(this).stop();
  $(this).animate({width: 75}, 400);
	});

			$(".sidebar_search02").mouseover(function() {
  $(this).stop();
  $(this).animate({width: 365}, 400);
	})
	$(".sidebar_search02").mouseout(function() {
  $(this).stop();
  $(this).animate({width: 75}, 400);
	});

		if(getCookie("login_stub")){
				$("#login_form dd").html(
						'<p class="sidebar_p recorder_f18">'+ getCookie("name") + '，HIOKI欢迎您</p>'+
								'<ul class="m_top15"><li><a href="/userscenter/intellectual/intellectual.php" class="sidebar_ld" >会员中心</a></li><li><a href="/sessions/logout" class="sidebar_ld" data-method="delete" data-confirm="确认退出吗?">退出登录</a></li></ul>'
				);
				$("#logout_in_header").show();
		}
		

		
		$("#pic_corpus_04 #submit").click(function() {
				if ($("#pic_corpus_04 #email").val().length <= 4 || $("#pic_corpus_04 #password").val().length <= 4) {
						alert("请输入正确的邮件和密码")
						return false;
        }
        $.ajax({
						beforeSend: send_xhr(),
						type: "post",                                                                            
						url: "/sessions/login_async",                                      
						data: {
								email: $("#pic_corpus_04 #email").val(),
								password:  $("#pic_corpus_04 #password").val()
						},
						async: true,                                                                            
						success: function (data) { 
								if (data.code == 200) {
										$(".upgrade_content").show();
										$(".upgrade_login_form").remove();
										$("#login_form dd").html(
														'<p class="sidebar_p recorder_f18">'+ data.user_name + '，HIOKI欢迎您</p>'+
														'<ul class="m_top15"><li><a href="/userscenter/intellectual/intellectual.php" class="sidebar_ld" >会员中心</a></li><li><a href="/sessions/logout" class="sidebar_ld" data-method="delete" data-confirm="确认退出吗?">退出登录</a></li></ul>'
										);
										setCookie("name", data.user_name);
                    $("#logout_in_header").show();

								}
								if (data.code == 404) {alert("请输入正确账号或密码")};
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });

		$("#login_form #login_button").click(function() {
				if ($("#login_form #email").val().length <= 4 || $("#login_form #password").val().length <= 4) {
						alert("请输入正确的邮件和密码")
						return false;
        }
        $.ajax({
						beforeSend: send_xhr(),
						type: "post",                                                                            
						url: "/sessions/login_async",                                      
						data: {
								email: $("#login_form #email").val(),
								password:  $("#login_form #password").val()
						},
						async: true,                                                                            
						success: function (data) { 
								if (data.code == 200) {
										$("#login_form dd").html(
														'<p class="sidebar_p recorder_f18">'+ data.user_name + '，HIOKI欢迎您</p>'+
                        '<ul class="m_top15"><li><a href="/userscenter/intellectual/intellectual.php" class="sidebar_ld" >会员中心</a></li><li><a href="/sessions/logout" class="sidebar_ld" data-method="delete" data-confirm="确认退出吗?">退出登录</a></li></ul>'
										);
										setCookie("name", data.user_name);
                    $("#logout_in_header").show();

								}
								if (data.code == 404) {alert("请输入正确账号或密码")};
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });
		
})

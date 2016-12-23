function send_xhr(){
  return function (xhr){
    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
  }
};

$(document).ready(function() {
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
                                                                                $("#logout_in_header").show();

								}
								if (data.code == 404) {alert("请输入正确账号或密码")};
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });
		
})

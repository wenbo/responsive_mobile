function send_xhr(){
  return function (xhr){
    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
  }
};

$(document).ready(function() {
		$("#pic_corpus_04 #submit").click(function() {
				if ($("#email").val().length <= 4 || $("#password").val().length <= 4) {
						alert("请输入正确的邮件和密码")
						return false;
        }
        $.ajax({
						beforeSend: send_xhr(),
						type: "post",                                                                            
						url: "/sessions/login_async",                                      
						data: {
								email: $("#email").val(),
								password:  $("#password").val()
						},
						async: true,                                                                            
						success: function (data) { 
								if (data.code == 200) {
										$(".upgrade_content").show();
										$(".upgrade_login_form").remove();
								}
								if (data.code == 404) {alert("请输入正确账号或密码")};
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });

		$("#login_form .sidebar_ld").click(function() {
				if ($("#email").val().length <= 4 || $("#password").val().length <= 4) {
						alert("请输入正确的邮件和密码")
						return false;
        }
        $.ajax({
						beforeSend: send_xhr(),
						type: "post",                                                                            
						url: "/sessions/login_async",                                      
						data: {
								email: $("#email").val(),
								password:  $("#password").val()
						},
						async: true,                                                                            
						success: function (data) { 
								if (data.code == 200) {
										$("#login_form dd").html(
														'<p class="sidebar_p recorder_f18">'+ data.user_name + '，HIOKI欢迎您</p>'+
														'<p class="sidebar_tc"><a href="/sessions/logout" data-method="delete" data-confirm="确认退出吗?">退出登录</a></p>'
										);
                                                                                $("logout_in_header").show();

								}
								if (data.code == 404) {alert("请输入正确账号或密码")};
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });
		
})

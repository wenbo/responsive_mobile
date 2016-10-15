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
										$(".upgrade_login_form").hide();
								}
								// if (data.code == 401) $("#shadow, #msg_3").show();
								// if (data.code == 402) $("#shadow, #msg_4").show();
						}
        });
    });
})

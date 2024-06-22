$(document).ready(function(){
	
	
	$("#login").click(function(){
		
		$("#info").html('<div class="in-messenger-vk"><span class="ic-warn"></span><p class="text-pt">Авторизирую игрока<br> ожидайте!</p></div>');
		var nick = $("#nick").val();
		var password = $("#password").val();
		var login = $("#login").val();
		$.post("/engine/classes/obr.php", {nick: nick, password: password, login: login}, function(data){
			if(data == "notfound") $("#info").html('<div class="in-messenger-vk"><span class="ic-wars"></span><p class="text-pt">\
				Данные введены неверно<br>исправте ошибку и попробуйте снова!</p></div>');
			else if(data == "success") $("#info").html('<div class="in-messenger-vk"><span class="ic-warn"></span><p class="text-pt">\
				Вы успешно авторизировались!<br>Сейчас вас перенаправят в Личный кабинет</p></div><META HTTP-EQUIV="REFRESH" CONTENT="1;/profile">');
		    else if(data == "pole") $("#info").html('<div class="in-messenger-vk"><span class="ic-wars"></span><p class="text-pt">\
		    	Заполните все поля<br>и попробуйте заново!</p></div>');
		});
	});
	$("#change").click(function(){
		//$("#info").html('<h4 class="warn-dialog"><center>Меняю пароль</center></h4>');
		var oldpass = $("#oldpass").val();
		var newpass = $("#newpass").val();
		var changepass = $("#change").val();
		$.post("/engine/classes/obr.php", {oldpass: oldpass, newpass: newpass, changepass: changepass}, function(data){
			$("#info").html(data);
		});
	});
	
	$("#view").click(function(){
		var vk = $("#vk").val();
		var url = $("#url").val();
		var title = $("#title").val();
		param=document.getElementById('create-news');
		param.style.display = "block";
		
			$("#view_box").html('<div class="names-view">\
							<h3>Предпросмотр</h3>\
							<span class="hr-bottom"></span>\
						</div>\
							<div class="post-wrapper" data-wow-duration="1s">\
							<div class="post-thumb"><img src="'+url+'"></div>\
							<div class="post-desc"><h4>'+title+'</h4>\
								<div class="semmer">\
									<p class="description"></p>\
									<div class="buy-cats">\
										<div class="form-group centers">\
											<a href="'+vk+'" class="btn-news-go">Подробнее</a>\
										</div>\
									</div></div></div></div>');
	});
	$("#cnews").click(function(){
		$("#infos").html('Сработал');
		var vk = $("#vk").val();
		var url = $("#url").val();
		var title = $("#title").val();
		var cnews = $("#cnews").val();
		$.post("/engine/classes/obr.php", {vk: vk, url: url, title: title,cnews:cnews}, function(data){
			$("#info").html(data);
		});
	});
	   					
});
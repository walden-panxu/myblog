$(document).ready(function(){
	$(".namepassword").bind("blur",function(){
		$(this).next().css("visibility","visible");
		if ($(this).val().length!=0){
			$(this).prev().css("visibility","hidden");
		};
		if ($.trim($(this).val()).length==0) {
			$(this).prev().css("visibility","visible");
		};
	});
	$(".namepassword").bind("focus",function(){
		$(this).next().children().css('display','none');
		$(this).next().text(" ");
	});

	

	//Ajax验证用户名
	$("#myname").bind('blur',function(){

		var va=$(this).val();
		$.ajax({
			type:"post",
			url:'/myhome/index.php/login/checkName',
			data:{"nickName":va},
			dataType:"text",
			success:function(text){
				
				if(text=="sn")
				{
					
        			$("#nameerror").append("<img src='../../images/tick.png'>");
				}
				else
				{
					
					$("#nameerror").text("用户名错误！");
				}

			}
		});
	});
	//Ajax验证密码
	$("#mypassword").bind('blur',function(){
		var va=$(this).val();
		$.ajax({
			type:"post",
			url:'/myhome/index.php/login/checkPassword',
			data:{"password":va},
			dataType:"text",
			success:function(text){
				
				if (text=="sp")
				{
				  $("#passerror").append("<img src='../../images/tick.png'>");
				}
				else
				{
				  $("#passerror").text("密码和用户名不匹配!");
				}	
			}
		});
	});

});
<?php $scriptbath=Yii::app()->request->baseUrl; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="descript" context="">
	<meta name="keyword" context="">
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/login.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/login.css">
	<title>login</title>

</head>
<body>
	<div class="header"><div class="headerleft"></div></div>
	<div class="webbody">
	<div class="left"></div>
	<div class="right">
		<form action="/myhome/index.php/login/doLogin" method="post" name="form">
		    <div class="formheader" ><span>登录</span></div>
		    <div class="inputdiv">
		    <label for="myname" class="labelclass">用户名/邮箱</label>
		    <input type="text" id="myname" name="nickName" class="namepassword"/><span id="nameerror" class="errortype"></span>
			</div>
			<div class="inputdiv">
			<label for="mypassword" class="labelclass">密码</label>
			<input type="password" id="mypassword" name="password" class="namepassword" /><span id="passerror" class="errortype"></span>
			</div>
			<div class="buttonclass">
			<button>登&nbsp;&nbsp;录</button>
			</div>
		</form>	
    </div>
	</div>
	<footer>
		<div class="foot">
		<span><a href="">关于我们</a></span>
		<span><a href="">加入我们</a></span>
		<span><a href="">反馈建议</a></span>
		</div>
		<div><span>潘的老宅 Copyright(C)2013-2014</span></div>
	</footer>
</body>
</html>
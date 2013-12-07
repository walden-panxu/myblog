<?php 
	$scriptbath=Yii::app()->request->baseUrl;

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/jquery.ui.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/jquery.ui.base.css">
	<link rel="stylesheet" href="<?php echo $scriptbath;?>/css/jquery.ui.all.css">
	<link rel="stylesheet" href="<?php echo $scriptbath;?>/css/demos.css">
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery-1.8.2.js">
	</script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery.ui.core.js">
	</script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery.ui.datepicker.js">
	</script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery.ui.widget.js">
	</script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/register.js"></script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery.ui.datepicker-zh-CN.js"></script>
</head>
<body>
	<div id="middle">
		<div id="headdiv"><span id="headtext">生活是自己的，追随自己的内心！</span></div>
		
			<form name="registerform" action='/myhome/index.php/register/Subdate' method="post" class="formclass">
				<div class="divinput">
					<label class="textlab" for="Userdetailedinfo_nickName">请输入一个你喜欢的名字</label>
					<input type="text" name="Userdetailedinfo[nickName]" id="Userdetailedinfo_nickName" class="namepassemail textinput" />
				</div>
				<div class="divinput">
					<label class="textlab" for="Userdetailedinfo_password">请输入密码</label>
					<input type="password" name="Userdetailedinfo[password]" id="Userdetailedinfo_password" class="namepassemail textinput"/>
				</div>
				<div class="divinput">
					<label class="textlab" for="Userdetailedinfo_email">请输入你的邮箱地址</label>
					<input type="text" name="Userdetailedinfo[email]" id="Userdetailedinfo_email" class="namepassemail textinput"/>
				</div>
				<div class="divselect">
					<div><label for="seletion" class="selection">生&nbsp;日</label></div>
					<div class="selector">
					<label class="textlab" for="Userdetailedinfo_birthdate" id="datelabel">请输入你的出生年月
					</label>
					<input type="text" name="Userdetailedinfo[birthdate]" id="Userdetailedinfo_birthdate" class="birthdate textinput"/>
					</div>
				</div>
				<div class="divselect">
					<div class="gendertitle">
					<label for="seletion" class="selection">性&nbsp;别</label>
					</div>
					<div id="divgender">
						<input type="radio" name="Userdetailedinfo[gender]" id="Userdetailedinfo_gender" value="m" class=""/><span class="gendertext">男</span>
						<input type="radio" name="Userdetailedinfo[gender]" id="Userdetailedinfo_gender" value="w" class=""/><span class="gendertext">女</span>
					</div>
				</div>
				<div >
					<input type="checkbox" name="agreement"  value="true"/>
					<span style="margin-left:5px;font-size:14px;">
					我已认真阅读并同意我的生活的《<a href="/">使用协议</a>》。
					</span>
				</div>
				<div id="divbutton"><button id="butsubmit" type="submit">注&nbsp;册</button></div>
			</form>
		
	</div>
</body>
</html>
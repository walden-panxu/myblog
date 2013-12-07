<?php $scriptbath=Yii::app()->request->baseUrl; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>myworkrome</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/myhome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/myworkroom.css">
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/myResume.js"></script>

</head>
<body>

	<div class="headertool">
		<div class="headerheader">
		<?php if(Yii::app()->session['tag']=='on')
			  {	
		 ?>
		<span><a href=""><?php echo Yii::app()->session['name']; ?></a></span>
		<?php  
			  } 
			  else{
		?>
		<span><a href="/myhome/index.php/login/view">登录</a></span>
		<?php } ?>

		<span><a href="/myhome/index.php/register/view">注册</a></span>
		<span><a href="/myhome/index.php/login/logout">退出</a></span>
		</div>
	</div>


	<nav>
		<ul>
			<li><a href="/myhome/index.php/myhome/view">客厅</a></li>
			<li><a href="/myhome/index.php/myworkroom/view">我的工作室</a></li>
			<li><a href="#">我的书房</a></li>
			<li><a href="/myhome/index.php/mygarden/view">后花园</a></li>
			
		</ul>
	</nav>
	<div class="left">
		<div class="headerimage"><img src="<?php echo $scriptbath;?>/images/pan.png" ></div>
		<div>
			<ul class="leftaside" >

				<li><a href="">信息中心</a></li>
				<li><a href="">工作计划</a></li>
				<li><a href="">工作日志</a></li>
				<li><a href="">工作总结</a></li>
				<li><a href="/myhome/index.php">分享经验</a></li>
			</ul>
		</div>
	</div>
	<div class="center">
		<div class="comestation">
		    <pre>
			    闻事不喜不惊者，可以当大事；
			    听谤不怒不怨者，可以处烦嚣；
			    遇难不避不畏者，可以担重任；
			    用心不忮不求者，可以举大略；
			    做人不浮不躁者，可以固根本。
			</pre>
		
		</div>
		<fieldset>
			<legend>我的计划</legend>
			<p></p>
			<div class="countdown"><span>倒计时：</span><span></span><span>小时</span></div>
		</fieldset>	
	</div>
	<div class="right"></div>
	<footer class="foot">
		<div class="botm">
		<span><a href="">关于我们</a></span>
		<span><a href="">加入我们</a></span>
		<span><a href="">反馈建议</a></span>
		</div>
		<div id="botm_botm" class="botmbotm"> 
      	<span>潘的老宅 Copyright(C)2013-2014</span> 
   		</div>
	</footer>	
	
</body>
</html>
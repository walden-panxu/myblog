<?php 
	$scriptbath=Yii::app()->request->baseUrl;
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>myhome</title>
	<link href="<?php echo $scriptbath;?>/images/main.css" rel="stylesheet" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/mygarden.css">

	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/galleria-1.3.js"></script>
	
	<link rel="stylesheet" href="<?php echo $scriptbath;?>/css/galleria.classic.css">
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery.clouds.albums.js"></script>
	
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/highslide.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/highslide.css" />
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/mygarden.js"></script>
</head>
<body>
	<div class="headertool">
		<div class="menu">
		<ul>
			<li><a href="/myhome/index.php/myhome/view">客厅</a></li>
			<li><a href="/myhome/index.php/myworkroom/view">我的工作室</a></li>
			<li><a href="#">我的书房</a></li>
			<li><a href="/myhome/index.php/mygarden/view">后花园</a></li>
		</ul>
		</div>
		<div class="headerheader">
		<span><a href="">登录</a></span><span><a href="">注册</a></span><span><a href="">退出</a></span>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="#">图片区</a></li>
			<li><a href="#">跑道</a></li>
			<li><a href="#">活动区</a></li>
						
		</ul>
	</nav>
	<div class="imagebody">
		<div class="leftshow">
			<div class="images">
				<img src="<?php echo $scriptbath;?>/images/1.jpg" width="500px" height="300px">
				<img src="<?php echo $scriptbath;?>/images/2.jpg">
				<img src="<?php echo $scriptbath;?>/images/3.jpg">
			</div>
		</div>
		<div class="rightshow">
			<ul>
				<li><a href="">管理图片</a></li>
				<li><a href="">我的相册</a></li>

			</ul>
		</div>
		<div class="showimages">
			<div id="listBig" class="listImg listBig">
                <h2><span class="png">风景</span></h2>                
                <ul>
                <li><a href="<?php echo $scriptbath;?>/images/photo/1.jpg"><img src="<?php echo $scriptbath;?>/images/photo/1.jpg" width="420" height="414" /></a>
                </li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/2.jpg"><img src="<?php echo $scriptbath;?>/images/photo/2.jpg" width="480" height="300" /></a></li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/3.jpg"><img src="<?php echo $scriptbath;?>/images/photo/3.jpg" width="480" height="300" /></a></li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/4.jpg"><img src="<?php echo $scriptbath;?>/images/photo/4.jpg" width="400" height="300" /></a></li> 
                <li><a href="<?php echo $scriptbath;?>/images/photo/5.jpg"><img src="<?php echo $scriptbath;?>/images/photo/5.jpg" width="450" height="347" /></a></li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/10.jpg"><img src="<?php echo $scriptbath;?>/images/photo/10.jpg" width="480" height="300" /></a></li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/7.jpg"><img src="<?php echo $scriptbath;?>/images/photo/7.jpg" width="480" height="300" /></a></li> 
                <li><a href="<?php echo $scriptbath;?>/images/photo/8.jpg"><img src="<?php echo $scriptbath;?>/images/photo/8.jpg" width="450" height="328" /></a></li>
                <li><a href="<?php echo $scriptbath;?>/images/photo/6.jpg"><img src="<?php echo $scriptbath;?>/images/photo/6.jpg" width="412" height="300" /></a></li>
                <div class="clear"></div>
                </ul>
                
            </div><!-- .listBig-->
            
           

		</div>
	</div>
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
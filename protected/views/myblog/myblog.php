<?php 
	$scriptbath=Yii::app()->request->baseUrl; 
	$model=new Blogs();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>myhome</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/myblog.css">
	<script type="text/javascript" src="<?php echo $scriptbath;?>/javascript/jquery/jquery-1.8.2.js">
	</script>	
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
	</div>
	<div class="center">
		<div class="content">
			<form action="/myhome/index.php/myblog/submitBlog" method="post">
    		<?php  $this->widget('ext.ckeditor.CKEditorWidget',array( 
	                  "model"=>$model,  
	                  "attribute"=>'blogsContent',
	                  "defaultValue"=>"",
	                  "config" => array( 
	                    "height"=>"400px", 
	                    "width"=>"98%", 
	                    "toolbar"=>"Basic",
	                    "filebrowserBrowseUrl"=>'/ckfinder/ckfinder.php'
	                    ),
	                    )); 
    		?>
    <div><button class="submitbut">发&nbsp;&nbsp;布</button></div>
</form>
		</div>
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
<?php 
	$scriptbath=Yii::app()->request->baseUrl; 
	//$model=new Blogs();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>myhome</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $scriptbath;?>/css/myhome.css">
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
			<li><a href="/myhome/index.php/">我的书房</a></li>
			<li><a href="/myhome/index.php/mygarden/view">后花园</a></li>
			
		</ul>
	</nav>
	<div class="left">
		<div class="headerimage"><img src="<?php echo $scriptbath;?>/images/pan.png" ></div>
	</div>
	<div class="center">
	<?php 
		if(isset($array))
		{
			for($i=0; $i < count($array); $i++)
			{ 
				
			

	 ?>
		<div class="content">
			<div class="contentheader">
				<span>作者：</span>&nbsp;<span><a href=""><?php echo $array[$i]['name'];?></a></span>
				<span class="timebar"><?php echo $array[$i]['time'];?></span>
			</div>
			<div class="contenttitle"><span><?php echo $array[$i]['title'];?></span></div>
			<div class="contentimage">
				<?php 
					if(count($array[$i]['image'])!=0)
					{
						for ($j=0; $j <count($array[$i]['image']) ; $j++)
						{ 
							$str=$array[$i]['image'][$j];
						
					
				 ?>
				<img  class="showimage" <?php echo $str; ?>>
				 <?php 
				 		}
				 	}
				  ?>
			</div>
			<div class="contentremark"><?php echo $array[$i]['remark'];?></div>
			<div class="contentgo"><span class="acontent">
								   <a  href="/myhome/index.php/myhome/read/blogid/<?php echo $array[$i]['bid'];?>/name/<?php echo $array[$i]['name'];?>">阅读全文</a>
									
									</span>
			</div>
			<div class="contentfoot">
				<div class="contentfootfoot">
					<span class="discuss"><a href="">评论</a></span>
					<span class="discuss"><a href="">转载</a></span>
				</div>
			</div>
	
		</div>
		<?php
			}
		 } ?>
	<div class="page">
	<a href="/myhome/index.php/myhome/view/page/1" class="prev page-blank"><em>首页</em></a>
	<?php if(isset($pagecode))
			{

			?>
	<a href="/myhome/index.php/myhome/view/page/<?php echo $pagecode['page']-1; ?>"><em>«上一页</em></a>
	<a href="javascript:void(0);" class="prev page-blank"><em>第<?php echo $pagecode['page']; ?>页</em></a>
	<a href="/myhome/index.php/myhome/view/page/<?php if($pagecode['page']+1<$pagecode['maxz'])
														{
															echo $pagecode['page']+1;
														}
														else
														{
															echo $pagecode['maxz'];
														}
														$pagecode['page']+1; ?>"><em>下一页»</em></a>
	<a href="/myhome/index.php/myhome/view/page/<?php echo $pagecode['maxz']; ?>"><em>末页</em></a>
	<?php } ?>
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
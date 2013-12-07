<?php
/**
 * RegisterController类文件
 * RegisterController类是一个注册类
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * RegisterController类是一个注册类，它有两个动作，一个是注册页面的显示，
  * 一个是实现数据的提交
  * 
  */  
class RegisterController extends CController
{
	/**
	 * 显示视图
	 */
	public function actionView()
	{
		$this->renderPartial('register');
	}
	/**
	 * 注册业务
	 */
	public function actionSubdate()
	{
		if($_POST['agreement']=="true")
		{
			
			$model=new Userdetailedinfo();
			if(isset($_POST['Userdetailedinfo']))
			{
			    $userid=date("YmdHis",mktime()).rand(0,1000);
				//收集数据
				$model->attributes=$_POST['Userdetailedinfo'];
				$model->userId=$userid;
				if($model->save())
				{
					$this->redirect('/myhome/index.php/login/view');
				}
				else
				{
					//$this->renderPartial('debug');
				}
			}
			else
			{
				$this->renderPartial('debug');
			}
		}
		else
		{
			$this->renderPartial('register');
		}
	}
}
 ?>
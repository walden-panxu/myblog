<?php
/**
 * LoginController类文件
 * LoginController类是实现登录的类文件
 * 
 * 
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * LoginController类实现了登录视图的显示，用户名的验证，密码验证，登录，和注销动作。
  * 
  *
  * 
  */
class LoginController extends CController
{
	
	/**
	 * 登录视图
	 */
	public function actionView()
	{
		$this->renderPartial('login');
	}
	/**
	 * 通过AJAX验证用户名，返回验证结果
	 */
	public function actionCheckName()
	{
		
		//获取提交的数据
		$nickName=$_POST['nickName'];
		
		//sql语句
		$sql1='select * from userdetailedinfo where nickName=:name';
		
		//创建执行sql的实例
		$command1=Yii::app()->db->createCommand($sql1);
		
		//绑定值
		$command1->bindParam(":name",$nickName);
		$result=$command1->query();
        
		if($result->read()!=false)
		{
			
			echo "sn";

		}
		else
		{
			echo "fn";
		}
	}
	/**
	 * 通过AJAX验证密码，返回验证结果
	 */
	public function actionCheckPassword()
	{
		//获取提交的数据
		$password=$_POST['password'];
		//sql语句
		$sql2='select * from userdetailedinfo where password=:password';
		//创建可执行的sql语句
		$command2=Yii::app()->db->createCommand($sql2);
		//绑定值
		$command2->bindParam(":password",$password);
		//执行查询
		$result=$command2->query();
		if($result->read()!=false)
		{
			echo "sp";

		}
		else
		{
			echo "fp";
		}
	}
	/**
	 *登录
	 */
	public function actionDoLogin()
	{
	    //用session存储信息
	    Yii::app()->session['tag']='on';
	    Yii::app()->session['name']=$_POST['nickName'];
	    Yii::app()->session['password']=$_POST['password'];

	    $this->redirect("/myhome/index.php/myhome/view");
	}
	/**
	 *注销
	 */
	public function actionLogout()
	{
		Yii::app()->session->clear();
		Yii::app()->session->destroy();
		$this->redirect("/myhome/index.php/myhome/view");
	}
}
 ?>
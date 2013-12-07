<?php
/**
 * MyworkroomController类文件
 * MyworkroomController 类是一个我的工作室类
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * MyworkroomController类是一个我的工作室类
  * 
  */ 
class MyworkroomController extends CController
{
	/**
	 * 视图
	 *
	 */
	public function actionView()
	{
		if(Yii::app()->session['tag']=='on')
		{
			$this->renderPartial('myworkroom');
		}
		else
		{
			$this->redirect('/myhome/index.php/myhome/view');
		}
	}
	
}
 ?>
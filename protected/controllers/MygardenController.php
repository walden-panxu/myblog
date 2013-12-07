<?php 
/**
 * MygardenController类文件
 * MygardenController类是一个后花园类
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * MygardenController类是一个后花园类
  * 
  */
class MygardenController extends CController
{
	/**
     * 显示视图
     *
	 */
	public function actionView()
	{
 		$this->renderPartial('mygarden');
	}
	
}
 ?>
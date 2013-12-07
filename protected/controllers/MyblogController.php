<?php 
/**
 * MyblogController类文件
 * MyblogController类是一个博客类
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * LoginController类是一个博客类,它包含了两个动作，一个是显示博客编辑页面，
  * 一个是收集博客内容并提交数据库
  *
  * 
  */
class MyblogController extends CController
{
	//重写默认action
    public $defaultAction='view';
	/**
	 * 博客编辑页面视图
	 *
	 *
	 */
	public function actionView()
	{
		$this->renderPartial('myblog');
	}
	/**
	 * 提交博客内容
	 *
	 *
	 */
	public function actionSubmitBlog()
	{
		
	    $blog=new BlogModel();
	    $name=Yii::app()->session['name'];
	    $password=Yii::app()->session['password'];
		$model=new Blogs();
		if(isset($_POST['Blogs']))
		{
			//收集数据,并赋给模型属性
			$model->attributes=$_POST['Blogs'];
			$model->blogsId=$blog->getBlogsId();
			$model->userId=$blog->getUserId($name,$password);
			$model->blogsCreateTime=$blog->getBlogsCreateTime();
			$model->showtag=$blog->getShowtag();
			if($model->save())
			{
				$this->redirect('/myhome/index.php/myhome/view');
			}
			else
			{
				$this->renderPartial('myblog');
			}
		}
		else
		{
			$this->redirect('/myhome/index.php');
		}
	}

}
 ?>
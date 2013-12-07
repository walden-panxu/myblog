<?php 
/**
 * MyhomeController类文件
 * MyhomeController类是主页面的类文件
 * 
 * 
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.controllers
 * @since 1.0
 */

 /**
  * MyhomeController类是博客视图类，它有博客摘要显示动作和博客视图动作。
  * 
  * 
  */

class MyhomeController extends CController
{
	
	/**
	 *取出博客摘要，并显示视图
	 *
	 */
	public function actionView()
	{
		if(isset($_GET['page']))
		{
			$pclode=$_GET['page'];
			$page=new Page($pclode);
		}
		else
		{
			//$pclode=$_GET['page'];
			$page=new Page();
		}
		
		$cleandata=new CleanData($page->doPage());
		$array=$cleandata->getData();
		$pagecode=$page->getPagecode();
		$this->renderPartial('myhome',array('array'=>$array,'pagecode'=>$pagecode));
	}

    /**
	 *取出博客全部内容，并显示
	 *
	 */
    public function actionRead()
    {
    	if(isset($_GET['blogid']) and isset($_GET['name']))
    	{
    		$blogid=$_GET['blogid'];
            $name=$_GET['name'];
            $cont=new Content($blogid);
            $content=$cont->getContent();
            $this->renderPartial('blogsview',array('name'=>$name,'content'=>$content));
    	}
    	else
    	{
    		$this->renderPartial('here');
    	}
    }

}
?>
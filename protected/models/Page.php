<?php 
/**
 * Page类文件
 * 这个类是实现分页类
 * @property $page表示当前页
 * @property $pagezise表示页大小
 * @property $maxzise表示最大页数
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.models
 * @since 1.0
 */

class Page
{
	private $page;
	private $pagezise;
	private $maxzise;

	public function __construct($page=1,$pagezise=5)
	{
		$this->page=$page;
		$this->pagezise=$pagezise;
		
	}
	/**
 	 * 设置最大页数
	 */
	public function setMaxzise($max)
	{
		$this->maxzise=$max;
	}

	/**
	 * 获取页码数组
	 * @return 返回页码数组
	 */
	public function getPagecode()
	{
		
		return $parray=array('page'=>$this->page,'maxz'=>$this->maxzise);
	}



	/**
	 *实现分页和查询操作
	 * @return 返回记录数组
	 */
	public function doPage()
	{
		//sql语句
		$sql1='select * from blogs';
		//获取执行sql实例
		$conmand1=Yii::app()->db->createCommand($sql1);
		//获取记录总数
		$recordZise=count($conmand1->queryAll());
		//计算可分为几页
		$maxZise=ceil($recordZise/($this->pagezise));
		$this->setMaxzise($maxZise);
		//确保当前页不超过最大值和最小值
		if($this->page>$maxZise)
		{
			$this->page=$maxZise;
		}
		if($this->page<1)
		{
			$this->page=1;
		}
		//计算初始位置值
		$startposition=$recordZise-($this->pagezise*$this->page);
		//计算末位置值
		$endposition=$startposition+$this->pagezise;
		//确保初始位置不为负数
		if($startposition<0)
		{
			$startposition=1;
		}
		//sql语句
		$sql='select blogsId,userId,blogsContent,blogsCreateTime from blogs limit :startposition,:endposition';
		//获取可执行语句
		$conmand=Yii::app()->db->createCommand($sql);
		//绑定参数
		$conmand->bindParam(':startposition',$startposition);
		$conmand->bindParam(':endposition',$endposition);
		return $conmand->queryAll();

	}


}
 ?>
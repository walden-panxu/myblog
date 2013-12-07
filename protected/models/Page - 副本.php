<?php 
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
	//设置最大页数
	public function setMaxzise($max)
	{
		$this->maxzise=$max;
	}

	//返回页码数组
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

		if($this->page>$maxZise)
		{
			$this->page=$maxZise;
		}
		if($this->page<1)
		{
			$this->page=1;
		}
		//计算初始位置值
		$startposition=($this->page-1)*$this->pagezise;
		//计算末位置值
		$endposition=$startposition+$this->pagezise;
		//sql
		$sql='select blogsId,userId,blogsContent,blogsCreateTime from blogs limit :startposition,:endposition';
		//
		$conmand=Yii::app()->db->createCommand($sql);
		//
		$conmand->bindParam(':startposition',$startposition);
		$conmand->bindParam(':endposition',$endposition);
		return $conmand->queryAll();

	}


}
 ?>
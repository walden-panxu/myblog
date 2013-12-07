<?php 
class BlogModel
{
	private $blogsId;
	private $userId;
	private $blogsCreateTime;
	private $showtag;

	public function __construct()
	{

	}
	public function getBlogsId()
	{
		return $this->blogsId=date("YmdHis",mktime());
	}

	public function getUserId($name,$password)
	{
		//
		$sql='select userId from userdetailedinfo where nickName=:name and password=:password';
		//
		$connec=Yii::app()->db->createCommand($sql);
		//
		$connec->bindParam(':name',$name);
		$connec->bindParam(':password',$password);
		//
		$result=$connec->queryRow();
		return $this->userId=$result['userId'];
	}

	public function getBlogsCreateTime()
	{
		return $this->blogsCreateTime=date('Y-m-d/H:i:s',mktime());
	}

	public function getShowtag()
	{
		return $this->showtag=true;
	}

}
 ?>
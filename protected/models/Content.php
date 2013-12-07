<?php 
class Content
{
	private $blogid;

	public function __construct($id)
	{
		$this->blogid=$id;

	}

	//
	public function getContent()
	{
	  //sql
	  $sql='select blogsContent from blogs where blogsId=:id';
	  //
	  $conmand=Yii::app()->db->createCommand($sql);
	  //
	  $conmand->bindParam(':id',$this->blogid);
	  //
	  $result=$conmand->queryScalar();
	  $url=Yii::app()->request->baseUrl;
	  $newresult=str_ireplace('upload/', $url.'/upload/', $result);
	  return $newresult;
	}
}
 ?>
<?php 
class CleanData
{
	public $array;
	public function __construct($array)
	{
		$this->array=$array;
	}
	//获取博客id
	public function getBlogId($blogid)
	{
		$blogid=trim($blogid);
		return $blogid;
	}
	//获取用户名
	public function getName($userid)
	{
		//sql
		$sql='select nickName from userdetailedinfo where userId=:userid';
		//
		$conmand=Yii::app()->db->createCommand($sql);
		//
		$conmand->bindParam(':userid',$userid);
		$name=$conmand->queryScalar();
		return  $name;
	}
	//
	public function getTime($creattime)
	{
		return trim($creattime);
	}
	//
	public function getTitle($content)
	{
		$text=strip_tags($content);
		$newtext=trim($text);
		return substr($newtext, 0,50);
	}
	//
	public function getImage($content)
	{
		//生成数组
		$getarray=explode(" ", $content);
		//匹配模式
		$par='/^src.*(\.)(png|jpg|git)\"$/';
		//过滤数组
		$filterarr=preg_grep($par,$getarray);
		//重置索引值
		sort($filterarr);
		//加工路径数组
		$imgarray=array();
		$url=Yii::app()->request->baseUrl;
		for ($i=0; $i <count($filterarr) ; $i++) { 
			$tempstr=str_ireplace('upload/', $url.'/upload/', $filterarr[$i]);
			array_push($imgarray,$tempstr);
		}
		return $imgarray;
	}
	//
	public function getRemark($content)
	{
		//清理掉HTML标记
		$newcontent=strip_tags($content);
		//
		$content_array=explode("。", $newcontent,2);
		//
		$content=implode("。",$content_array);
		return trim($content);
		
	}
	//
	public function getData()
	{ 
		$oldArray=$this->array;
		$newArray=array();

		for ($i=0; $i <count($this->array) ; $i++) 
		{
		 	$bid=$this->getBlogId($oldArray[$i]['blogsId']);
		 	$name=$this->getName($oldArray[$i]['userId']);
		 	$time=$this->getTime($oldArray[$i]['blogsCreateTime']);
		 	$title=$this->getTitle($oldArray[$i]['blogsContent']);
		 	$image=$this->getImage($oldArray[$i]['blogsContent']);
		 	$remark=$this->getRemark($oldArray[$i]['blogsContent']);
			array_push($newArray, array('bid'=>$bid,'name'=>$name,'time'=>$time,'title'=>$title,'image'=>$image,'remark'=>$remark));
		}

		return $newArray;
	}
}
 ?>
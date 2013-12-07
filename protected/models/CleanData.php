<?php 
/**
 * CleanData类文件
 * CleanData类是实现数据的清理
 * 
 * @property $array表示记录数据数组
 * 
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.models
 * @since 1.0
 */



class CleanData
{
	public $array;
	public function __construct($array)
	{
		$this->array=$array;
	}

	/**
	 * 获取博客id
	 * @param 博客id
	 * @return 博客id
	 */
	public function getBlogId($blogid)
	{
		$blogid=trim($blogid);
		return $blogid;
	}

	/**
     * 获取用户名
     * @param $userid用户的id
     * @return $name用户名      
     * 
	 */
	public function getName($userid)
	{
		//sql语句
		$sql='select nickName from userdetailedinfo where userId=:userid';
		//可执行的sql语句对象
		$conmand=Yii::app()->db->createCommand($sql);
		//绑定参数
		$conmand->bindParam(':userid',$userid);
		$name=$conmand->queryScalar();
		return  $name;
	}

	/**
	 * 获取博客发行的时间
	 * @param $creattime博客发行的时间
	 * @return $creattime博客发行的时间
	 *
	 */
	public function getTime($creattime)
	{
		return trim($creattime);
	}

	/**
	 * 从文章中获取博客标题
	 * @param $content文章内容
	 * @return 文章标题
	 *
	 */
	public function getTitle($content)
	{
		$arr=explode("</p>", $content);
		$newtext=trim(strip_tags($arr[0]));
		return $newtext;
		
	}

	/**
	 * 从文章中提取图片
	 * @param $content文章内容
	 * @return $imgarray图片数组
	 *
	 */
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

	/**
	 * 从文章中提取摘要
	 * @param $content文章内容
	 * @return $content文章摘要
	 *
	 */
	public function getRemark($content)
	{
		//清理掉HTML标记
		$newcontent=strip_tags($content);
		
		$content_array=explode("。", $newcontent,3);
		//获取文章前两个句子，返回数组
		$content_array=array($content_array[0],$content_array[1]);
		//将数组合并为字符串
		$content=implode("。",$content_array);
		return trim($content.'...');
		
	}

	/**
	 * 整合页面要显示的数据，并返回倒序数据数组，最后插入数据库的显示在最前面
	 * @return $newArray倒序数据数组
	 *
	 *
	 */
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
		//返回倒序数组
		return array_reverse($newArray);
		
	}
}
 ?>
<?php 

/**
 * Blogs类文件
 *
 * @property $blogsContent是博客内容
 * @author pan <panxuzhengxuxin@gmail.com>
 * @package application.models
 * @since 1.0
 */
class Blogs extends CActiveRecord
{
	public $blogsContent;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	 *校验规则
	 */
	public function rules()
	{
	    return array(
	    array('blogsContent','required')
	    );
	}
}
 ?>
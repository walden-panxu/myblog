<?php 
/**
* userdetailedinfo用户详细信息表对应的模型类
*/
class Userdetailedinfo extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	//
	public function rules()
	{

		return array(
		array('nickName,password,email,birthdate,gender','required'),
		array('email','email'));
	}
}
?>
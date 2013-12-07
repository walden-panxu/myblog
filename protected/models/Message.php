<?php 
/**
* 
*/
class Message extends CActiveRecord
{
	public $mess_content;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	//
	public function rules()
	{
	    return array(
	    array('mess_content','required')
	    );
	}
}
 ?>
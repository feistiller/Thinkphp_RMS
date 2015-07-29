<?php
//echo 111;
	class ReturnRelationModel extends RelationModel{
		
		protected $tableName='return';//选择关联表名
		protected $_link=array(
		
			'user'=>array(
				'mapping_type'=>BELONGS_TO,//HAS_MANY一对多，这厮是多对一
				'foreign_key'=>'uid',
				'mapping_fields'=>'cname',//排除不要的属性
				'as_fields'=>'cname:username'//元素提取以及崇明米
			)
		);	
	}
?>
<?php
return array(
	//'配置项'=>'配置值'公用配置
	'APP_GROUP_LIST'=>'Index,Admin',//选择模式，这里是前台后台模式
	'DEFAULT_GROUP'=>'Index',//默认的页面
	'APP_GROUP_MODE'=>1,//选用的模型
	'APP_GROUP_PATH'=>'Modules',//使用gmodules文件夹
	'DB_HOST'=>'localhost',//ip
	'DB_USER'=>'root',//数据库username
	'DB_PWD'=>'',//数据库密码
	'DB_NAME'=>'',//数据库名称
	'DB_PREFIX'=>'',//表前缀
	
	//'URL_ROUTER_ON'=>true,//开启短url路由模式只能在common config中
	//'URL_ROUTE_RULES'=>array(
	//	'/^c_(\d+)$/'=>'Index/List/index?id=:1',//List页面使用正则表达式限制
	//	':id\d'=>'Index/Show/index'//Show页面使用正则表达式限制
	//)
);
?>
<?php
	class IndexAction extends BCommonAction{
		public function index(){
			$this->display();//后台首页视图
		}
		//退出登录
		public function logout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME.'/Login/index');
	}
	}
	
	
?>
<?php
	class UserAction extends BCommonAction{
		public function index(){
			$this->display();
		}
		public function add(){
			if(M('buser')->add($_POST)){
				$this->success('添加成功',U(GROUP_NAME.'/User/index'));
			}else{
				$this->error('添加失败');		
			}
		}
	}


?>
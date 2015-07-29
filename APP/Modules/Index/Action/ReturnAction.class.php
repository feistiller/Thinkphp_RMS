<?php
	class ReturnAction extends CommonAction{
		public function index(){
			$this->display();
		}
		public function add(){
			$data=array(
				'uid'=>$_SESSION['uid'],
				'time'=>time(),
				'ornot'=>$_POST['ornot'],
				'getnum'=>$_POST['getnum'],
				'neednum'=>$_POST['neednum'],
				'suggest'=>$_POST['suggest'],
				
			);
			$updata=array(
				'id'=>$_SESSION['uid'],
				'class'=>'1'
		);
			if(M('return')->add($data)&&M('user')->save($updata)){
				$this->success('添加成功,请重新登录',U(GROUP_NAME.'/Login/index'));
			}else{
				$this->error('添加失败');		
			}
		}
	}
?>
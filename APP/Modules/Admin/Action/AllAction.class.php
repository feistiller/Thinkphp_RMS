<?php
	class AllAction extends BCommonAction{
		public function index(){
			$field=array('id','username','cname','email','remark','class','cphone','img');
			$this->user=M('user')->field($field)->select();
			$this->display();
		}
		public function hight(){
			$id=(int) $_GET['id'];
			$update=array(
				'id'=>$id,
				'class'=>1
			);
			if(M('user')->save($update)){//自动where id，更改class
				$this->success('审核成功',U(GROUP_NAME.'/All/index'));
			}else{
				$this->error('已经审核',U(GROUP_NAME.'/All/index'));
			}
		}
	}
?>
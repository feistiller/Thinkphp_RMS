<?php 
	class DetailedAction extends BCommonAction{
		public function index(){
			$id=(int) $_GET['id'];//多对多有问题
			//echo $id;
			$where =array('id'=>$id);
			$this->detailed=M('user')->where($where)->select();
			//p($detailed);
			$this->display();
		}
	}
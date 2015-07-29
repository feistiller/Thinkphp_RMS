<?php
	class NewAction extends BCommonAction{
		public function index(){
			$this->display();
		}
		public function add(){
			$time=$_POST['time'];
			$type=$_POST['type'];
			$name=$_POST['name'];
			//p($time);
			$date=strtotime($time);
			//p($type);
			$arr=array(
				'name'=>$name,
				'date'=>$date,
				'stype'=>$type,
				'ornot'=>1
				);
			//p($arr);die;
			
			if(M('new')->add($arr)){
				$this->success('添加成功',U(GROUP_NAME.'/New/index'));
			}else{
				$this->error('添加失败');		
			}
		}
	}
	
?>
<?php
	class AlljobAction extends BCommonAction{
		public function index(){
			$field=array('id','name','date','ornot');
			$this->new=M('new')->field($field)->order('date DESC')->select();
			$this->display();
		}
		public function show(){
			$id=$_GET['id'];
			$where=array('timeid'=>$id);
			$this->company=D('NewRelation')->relation(true)->where($where)->select();//模型查询多对一
			//p($company);die;
			$this->display();
		}
		public function over(){
			$id=(int) $_GET['id'];
			$update=array(
				'id'=>$id,
				'ornot'=>0
			);
			if(M('new')->save($update)){//自动where id，更改class
				$this->success('结束成功',U(GROUP_NAME.'/Alljob/index'));
			}else{
				$this->error('失败',U(GROUP_NAME.'/Alljob/index'));
			}
		}
		public function del(){
			$id=(int) $_GET['id'];
			$update=array(
				'id'=>$id,
				'class'=>1
				//'remark'=>5
			);
			if(M('join')->delete($id)&&M('user')->save($update)){
				$this->success('删除成功',U(GROUP_NAME.'/Alljob/index'));
			}else{
				$this->error('删除失败',U(GROUP_NAME.'/Alljob/index'));
			}
			
			
		}
		public function okget(){
			$id=(int) $_GET['id'];
			$update=array(
				'id'=>$id,
				'class'=>3,
				'remark'=>5
			);
			if(M('user')->save($update)){//自动where id，更改class
				$this->success('确认到场成功',U(GROUP_NAME.'/Alljob/index'));
			}else{
				$this->error('确认到场失败',U(GROUP_NAME.'/Alljob/index'));
			}
		}
		public function notget(){
			$id=(int) $_GET['id'];
			$update=array(
				'id'=>$id,
				'class'=>1,
				'remark'=>1
			);
			if(M('user')->save($update)){//自动where id，更改class
				$this->success('确认未到场成功',U(GROUP_NAME.'/Alljob/index'));
			}else{
				$this->error('确认未到场失败',U(GROUP_NAME.'/Alljob/index'));
			}
		}
		
	}
	
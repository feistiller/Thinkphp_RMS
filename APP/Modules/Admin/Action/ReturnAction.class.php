<?php
	class ReturnAction extends BCommonAction{
		public function index(){
			
			$this->return=D('ReturnRelation')->relation(true)->order('time DESC')->select();//模型查询多对一
			//p($return);die;
			$this->display();
			
			
		}
		public function del(){
			$id=(int) $_GET['id'];
			if(M('return')->delete($id)){
				$this->success('删除成功',U(GROUP_NAME.'/Return/index'));
			}else{
				$this->error('删除失败');
			}
		}
	
	}
	
?>
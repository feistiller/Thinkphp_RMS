<?php
	class WebAction extends BCommonAction{
		public function index(){
			$this->aweb=D('AwebRelation')->relation(true)->order('time DESC')->select();//模型查询多对一
			$this->display();
		}
		public function del(){
			$id=(int) $_GET['id'];
			if(M('aweb')->delete($id)){
				$this->success('删除成功',U(GROUP_NAME.'/Web/index'));
			}else{
				$this->error('删除失败');
			}
		}
	}
?>
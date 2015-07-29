<?php
	class MeetAction extends BCommonAction{
		public function index(){
			$this->meet=D('MeetRelation')->relation(true)->order('time DESC')->select();//模型查询多对一
			$this->display();
		}
		public function del(){
			$id=(int) $_GET['id'];
			if(M('ameeting')->delete($id)){
				$this->success('删除成功',U(GROUP_NAME.'/Meet/index'));
			}else{
				$this->error('删除失败');
			}
		}
	}
	?>
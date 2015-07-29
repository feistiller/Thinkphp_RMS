<?php
	class ApplyAction extends BCommonAction{
		public function index(){
			//$ajob=M('ajob')->order('time DESC')->select();
			//$id=$ajob['uid'];
			//$company=M('user')->field('cname')->select();
			/** 多表查询 * */
    
        	$this->ajob=D('AjobRelation')->relation(true)->order('time DESC')->select();//模型查询多对一
			//p($ajob);die;
			$this->display();
		}
		public function del(){
			$id=(int) $_GET['id'];
			if(M('ajob')->delete($id)){
				$this->success('删除成功',U(GROUP_NAME.'/Apply/index'));
			}else{
				$this->error('删除失败');
			}
		}
	}
?>
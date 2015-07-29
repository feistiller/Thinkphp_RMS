<?php
//控制器，前后端公用，判断
class BCommonAction extends Action{
	public function _initialize(){
		if(!isset($_SESSION['logintime'])){
			$this->redirect(GROUP_NAME.'/Login/index');
		}
	}
}
?>
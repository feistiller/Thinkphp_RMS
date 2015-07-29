<?php
//控制器，前端公用，判断
class CommonAction extends Action{
	public function _initialize(){
		if(!isset($_SESSION['class'])){
			$this->redirect(GROUP_NAME.'/Login/index');
		}
	}
}
?>
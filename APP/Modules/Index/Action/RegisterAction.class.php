<?php
	class RegisterAction extends Action{
		public function index(){
			$this->display();
		}
		public function add(){
			import('ORG.Net.UploadFile');
 			$upload = new UploadFile();// 实例化上传类
 			$upload->maxSize  =-1;// 设置附件上传大小
 			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
 			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
	}

	// 保存表单数据 包括附件数据
		
	
			$add=array(
				'username'=>$_POST['username'],
				'password'=>$_POST['password'],
				'cname'=>$_POST['cname'],
				'caddress'=>$_POST['caddress'],
				'cnature'=>$_POST['cnature'],
				'cindustry'=>$_POST['cindustry'],
				'chead'=>$_POST['chead'],
				'cphone'=>$_POST['cphone'],
				'email'=>$_POST['email'],
				'remark'=>'1',
				'img'=>$info[0]['savename'],
				'class'=>'0',
			);
			if(M('user')->add($add)){
				$this->success('添加成功',U(GROUP_NAME.'/Login/index'));
			}else{
				$this->error('添加失败');		
			}
		}
	}
?>
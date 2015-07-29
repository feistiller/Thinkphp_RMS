<?php
	class IndexAction extends CommonAction{
		
		//显示主页
		public function index(){
			$this->display();
		}
		//退出登录
		public function logout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME.'/Login/index');
	}
	
		//申请招聘会
		public function ajob(){
			$data=array(
				'uid'=>$_SESSION['uid'],
				'time'=>time(),
				'over'=>strtotime($_POST['over']),
			);
			//p($data);die;
			if(M('ajob')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/Index/index'));
			}else{
				$this->error('添加失败');		
			}
		}
		
		
		//申请宣讲会
		public function ameet(){
			$data=array(
				'uid'=>$_SESSION['uid'],
				'time'=>time(),
				'atime'=>strtotime($_POST['atime']),
			);
			if(M('ameeting')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/Index/index'));
			}else{
				$this->error('添加失败');		
			}
			
		}
		
		//申请上传资料
		public function aweb(){
			$data=array(
				'uid'=>$_SESSION['uid'],
				'time'=>time(),
				'worker'=>$_POST['worker'],
				'num'=>$_POST['num'],
				'phone'=>$_POST['phone'],
				'email'=>$_POST['email'],
			);
			if(M('aweb')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/Index/index'));
			}else{
				$this->error('添加失败');		
			}
		}
		
		
		//更改密码和上传资质
		public function change(){
			
			import('ORG.Net.UploadFile');
 			$upload = new UploadFile();// 实例化上传类
 			$upload->maxSize  =-1;// 设置附件上传大小
 			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
 			$upload->savePath =  './Public/Uploads/img/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
	}

	// 保存表单数据 包括附件数据
		$User = M("user"); // 实例化User对象
		$data=array(
				'id'=>$_SESSION['uid'],
				'password'=>$_POST['password'],
				'img'=>$info[0]['savename']
				
					);
		//	p($data);die;
	//$User->img = $info[0]['savename']; // 保存上传的照片根据需要自行组装
 		$User->save($data); // 写入用户数据到数据库
 		$this->success('数据保存成功！');

		}
		
		
		
		
	}
?>
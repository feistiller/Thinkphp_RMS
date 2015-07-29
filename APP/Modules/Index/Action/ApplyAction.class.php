<?php 
	class ApplyAction extends CommonAction{
		public function index(){
		if($_SESSION['class']!=1){
			
			$this->error('权限不够',U(GROUP_NAME.'/Index/index'));
			
		}else{
			$field=array('id','name','date','ornot');
			$this->new=M('new')->field($field)->order('date DESC')->select();
			$this->display();
		}
		}
		
		
		public function show(){
			$this->timeid=$_GET['id'];
			$this->display('show');
		}
		
		public function add(){
			import('ORG.Net.UploadFile');
 			$upload = new UploadFile();// 实例化上传类
 			$upload->maxSize  =-1;// 设置附件上传大小
 			$upload->allowExts  = array();// 设置附件上传类型
 			$upload->savePath =  './Public/Uploads/apply/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
	}

	// 保存表单数据 包括附件数据
		$join = M("join"); // 实例化对象
		$user =M('user');
		$data=array(
				'uid'=>$_SESSION['uid'],
				'people1'=>$_POST['people1'],
				'people2'=>$_POST['people2'],
				'phone1'=>$_POST['phone1'],
				'phone2'=>$_POST['phone2'],
				'email'=>$_POST['email'],
				'timeid'=>$_POST['timeid'],
				'file'=>$info[0]['savename']
				);
		$updata=array(
				'id'=>$_SESSION['uid'],
				'class'=>'2'
		);
			//p($data);die;
	//$User->img = $info[0]['savename']; // 保存上传的照片根据需要自行组装
 		
		if($join->add($data)&&$user->save($updata)){
			$this->success('数据保存成功！请重新登录',U(GROUP_NAME.'/Login/index'));
		}else{
			$this->error('失败');
		}

			
			
			
			
		}
	
	
	
	}
	
	
?>
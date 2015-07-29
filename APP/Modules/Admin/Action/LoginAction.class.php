<?php
	class LoginAction extends Action{
		public function index(){
			$this->display();
		}
	
	//登陆查询
		public function login(){
			if(!IS_POST) halt('页面不存在');
			//if(I('code','','md5')!=session('verify'))$this->error('验证码错误');
			$db=M('buser');
			$user=$db->where(array('username'=>I('username')))->find();
			if(!$user|| $user['password']!=I('password','','')){
				echo $user['password'];
				$this->error($user['password']);
			}
			//数据库的更新
			$data=array(
				'id'=>$user['id'],
				'time'=>time(),
				'ip'=>get_client_ip()
			);
			
			$db->save($data);
			//写入session
			session('uid',$user['id']);
			session('username',$user['username']);
			session('logintime',date('Y-m-d H:i:s',$user['logintime']));
			session('uip',$user['loginip']);
			
			redirect(__GROUP__);//跳转到后台页面
			//p($user);
			//p($_SESSION);
		}
	}
?>
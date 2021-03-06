<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>南开大学滨海学院招聘会企业登陆</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>南开大学滨海学院招聘会企业登陆</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">用户名：</label>
				            <div class="templatemo-input-icon-container">
				            	
                                <input type="text" class="form-control" id="username" placeholder="" name="username">
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">密码：</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-lock"></i>
				            	<input type="password" class="form-control" id="password" placeholder="" name="password">
				            </div>
				          </div>
				        </div>
				        
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="登陆账号" class="btn btn-warning">
                           
				          </div>
                          
				        </div>
                     </form>	
                      <a class="btn btn-danger" href="<?php echo U(GROUP_NAME.'/Register/index');?>">注册账号</a>
				        <div class="form-group">
				          	<div class="col-md-12">
				        		<a href="" class="text-center">忘记密码（请联系就业办公室）</a>
				       	 	</div>
				    	</div>
					</div>
					 <div class="templatemo-other-signin col-md-6" >
						<label class="margin-bottom-20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    本系统仅适用于天津南开大学滨海学院就业办公室，用于注册企业的招聘会，宣讲会，上传资料的申请与管理用途，任何上传的资料将不被用于商业用途，其中涉及到的企业隐私内容，学校以及就业办公室将严格进行保密，其中数据仅供本校毕业生使用。<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
如果您在登陆过程中产生任何疑问请联系学校就业办公室。<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
该系统的制作以及后期的维护的权利及义务归南开大学滨海学院计算机系所有。<br><br>

<p class="text-right">联系电话：63304810</p>
						</label>
						
						
					</div>   
				</div>				 	
		     	      		      
		</div>
	</div>
</body>
</html>
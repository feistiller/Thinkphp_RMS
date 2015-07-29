<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>注册</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15" style=" font-family:Arial, Helvetica, sans-serif;color:white">创建新用户</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="<?php echo U(GROUP_NAME.'/Register/add');?>" method="post" enctype="multipart/form-data">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">用户名：</label>
			            <input type="email" class="form-control" id="email" placeholder="请输入您的邮箱" name="username">		            		            		            
			          </div>  
                    </div>
                    <div class="form-group">
			  
                      <div class="col-md-6">
			            <label for="password" class="control-label">密码：</label>
			            <input type="password" class="form-control" id="password" placeholder="请输入1-20位英文或数字" name="password">
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">重新输入密码：</label>
			            <input type="password" class="form-control" id="password_confirm" placeholder="">
			          </div>
                    </div>            
			        
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">公司名称：</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="cname">		            		            		            
			          </div>  
                      
                      <div class="col-md-6">		          	
			            <label for="username" class="control-label">公司地址：</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="caddress">		            		            		            
			          </div>             
			        </div>			
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">联系邮箱：</label>
			            <input type="email" class="form-control" id="username" placeholder="" name="email">		            		            		            
			          </div>
                        <div class="col-md-6">		          	
			            <label for="username" class="control-label">联系电话：</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="cphone">		            		            		            
			          </div>   
			                  
			        </div>
			        <div class="form-group">
                    <div class="col-md-6 templatemo-radio-group">
			          	<label class="radio-inline">
		          			<input type="radio" name="cnature" id="optionsRadios1" value="大型"> 大型企业
		          		</label>
		          		<label class="radio-inline">
		          			<input type="radio" name="cnature" id="optionsRadios2" value="中型"> 中型企业
		          		</label>
                        <label class="radio-inline">
		          			<input type="radio" name="cnature" id="optionsRadios2" value="小型"> 小型企业
		          		</label>
			          </div>     
                      <div class="col-md-6">		          	
			            <label for="username" class="control-label">所属行业：</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="cindustry">		            		            		            
			          </div>         
			          
			        </div>
                    <div class="form-group">
                     <div class="col-md-6">		          	
			            <label for="username" class="control-label">公司负责人：</label>
			            <input type="text" class="form-control" id="username" placeholder="" name="chead">		            		            		            
			          </div>  
                      <div class="col-md-6">		          	
			            <label for="username" class="control-label">公司资质：</label>
			            <input type="file" class="form-control" id="username" placeholder="仅支持jpg，png,jpge格式的图片" name="img">		            		            		            
			          </div> 
                    </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label><input type="checkbox">同意相应的 <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">《规章许可》</a>。该系统最终解释均来自南开大学滨海学院 。</label>
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="确认注册" class="btn btn-info">
			            <a href="<?php echo U(GROUP_NAME.'/Login/index');?>" class="pull-right">返回登陆</a>
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">注册许可</h4>
	      </div>
	      <div class="modal-body">
	      	<p>该系统的最终解释权归南开大学滨海学院解释。</p>
	        <p>网站制作，2012级计算机科学系，数字媒体专业。</p>
	        <p></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
</body>
</html>
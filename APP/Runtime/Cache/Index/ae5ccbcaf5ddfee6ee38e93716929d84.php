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
	<h1 class="margin-bottom-15">参加招聘会</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="<?php echo U(GROUP_NAME.'/Apply/add');?>" method="post" enctype="multipart/form-data">
				<div class="form-inner">
					
                    <div class="form-group">
			  
                      <div class="col-md-6">
			            <label for="username" class="control-label">参与人员1：</label>
			            <input type="text" class="form-control" id="username" placeholder="people" name="people1">
			          </div>
			         <div class="col-md-6">
			            <label for="username" class="control-label">手机号码1：</label>
			            <input type="text" class="form-control" id="username" placeholder="phone" name="phone1">
			          </div>
                    </div>            
			        
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="username" class="control-label">参与人员2：</label>
			            <input type="text" class="form-control" id="username" placeholder="people" name="people2">
			          </div>
			         <div class="col-md-6">
			            <label for="username" class="control-label">手机号码2：</label>
			            <input type="text" class="form-control" id="username" placeholder="phone" name="phone2">
			          </div>            
			        </div>			
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">公司联系邮箱：</label>
			            <input type="email" class="form-control" id="username" placeholder="" name="email">		            		            		            
			          </div>
                       <div class="col-md-6">		          	
			            <label for="username" class="control-label">招聘简章：</label>
			            <input type="file" class="form-control" id="username" placeholder="仅支持jpg，png,jpge格式的图片" name="file">		            		            		            
			          </div> 
			             <input type="hidden" name="timeid" value="<?php echo ($timeid); ?>" />    
			        </div>
			        
			        
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="确认" class="btn btn-info">
			           <p><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">回到主页</a></p>
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>反馈</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">反馈表</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="<?php echo U(GROUP_NAME.'/Return/add');?>" method="post" >
				<div class="form-inner">
					
                    <div class="form-group">
			  
                      <div class="col-md-6">
			            <label for="username" class="control-label">您收到的简历份数：</label>
			            <input type="text" class="form-control" id="username" placeholder="收到的简历份数" name="getnum">
			          </div>
			         <div class="col-md-6">
			            <label for="username" class="control-label">您最后录取的简历份数:</label>
			            <input type="text" class="form-control" id="username" placeholder="最后录取的简历份数" name="neednum">
			          </div>
                    </div>            
			        
			        <div class="form-group">
			          <div class="col-md-6 templatemo-radio-group">
			          	<label class="radio-inline">
		          			<input type="radio" name="ornot" id="optionsRadios1" value="0"> 满意
		          		</label>
		          		<label class="radio-inline">
		          			<input type="radio" name="ornot" id="optionsRadios2" value="1"> 不满意
		          		</label>
                        
			          </div>
			         <div class="col-md-6">
			            <label for="username" class="control-label">建议：</label>
			            <input type="text" class="form-control" id="username" placeholder="建议" name="suggest">
			          </div>            
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
	
</body>
</html>
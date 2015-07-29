<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>南开大学滨海学院招聘会企业登陆</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			
				<div class="row">
					<div class="col-md-12">
						<ol class="breadcrumb">
            <li class="active"><a href="<?php echo U(GROUP_NAME.'/Alljob/index');?>">查看招聘会列表</a></li>
           
          </ol>
          
          
          
          <div>
           
                    
                    
                    
                     <table class="table table-bordered table-hover definewidth m10">
    <tr>
        <th>招聘会名称</th>
        <th>举办时间</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
                
	   <?php if(is_array($new)): foreach($new as $key=>$v): ?><tr>
    	<td><?php echo ($v["name"]); ?></td>
        <td><?php echo (date('y-m-d',$v["date"])); ?></td>
        <td><?php if(($v["ornot"] == 1)): ?>正在举办
            <?php elseif($v["ornot"] == 0): ?>已经结束<?php endif; ?>
        </td>
        <td>
       		 <?php if(($v["ornot"] == 1)): ?><a href="<?php echo U(GROUP_NAME.'/Apply/show',array('id'=>$v['id']));?>" class="btn btn-sm btn-info">参加招聘会</a>
          	  <?php elseif($v["ornot"] == 0): ?>已经结束,无法参加<?php endif; ?>
        	
        </td>
    </tr><?php endforeach; endif; ?>
    </table>
                 
     </div> <br>

<div class="pull-right">
<p><a href="<?php echo U(GROUP_NAME.'/Index/index');?>" class="btn btn-lg btn-info">回到主页</a></p></div>                      
                        
						
					</div>   
				</div>				 	
		     	      		      
		</div>
	</div>
</body>
</html>
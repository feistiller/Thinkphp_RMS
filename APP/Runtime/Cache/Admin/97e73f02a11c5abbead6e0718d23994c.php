<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>企业招聘会系统</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="__PUBLIC__/css/templatemo_main.css">
</head>

<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>企业招聘会系统</h1>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li><a href="<?php echo U(GROUP_NAME.'/Index/index');?>"><i class="fa fa-home"></i>后台主页</a></li>
          <li class="active"><a href="<?php echo U(GROUP_NAME.'/All/index');?>"><i class="fa fa-cubes"></i><span class="badge pull-right"></span>注册企业管理</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/Apply/index');?>"><i class="fa fa-map-marker"></i><span class="badge pull-right"></span>查看招聘会申请</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/Meet/index');?>"><i class="fa fa-users"></i><span class="badge pull-right"></span>查看宣讲会申请</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/Web/index');?>"><i class="fa fa-cog"></i>查看资料发布申请</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/New/index');?>" ><i class="fa fa-sign-out"></i>发起新招聘会</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/Alljob/index');?>" ><i class="fa fa-sign-out"></i>查看招聘会</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/Return/index');?>" ><i class="fa fa-sign-out"></i>查看企业反馈</a></li>
          <li><a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="fa fa-sign-out"></i>创建新的账号</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li class="active">注册企业管理</li>
          </ol>
   <table class="table table-bordered table-hover definewidth m10">
    <tr>
    	<th>ID</th>
        <th>用户名</th>
        <th>企业名称</th>
        <th>邮件</th>
        <th>电话</th>
        <th>信用</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
                
	<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
    	<td><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["username"]); ?></td>
        <td><?php echo ($v["cname"]); ?></td>
        <td><?php echo ($v["email"]); ?></td>
        <td><?php echo ($v["cphone"]); ?></td>
        <td><?php echo ($v["remark"]); ?></td>
        <td><?php echo ($v["class"]); ?></td>
        <td>
        	[<a href="__ROOT__/Public/Uploads/img/<?php echo ($v["img"]); ?>">下载资质</a>]
            [<a href="<?php echo U(GROUP_NAME.'/Detailed/index',array('id'=>$v['id']));?>">查看详情</a>]
            [<a href="<?php echo U(GROUP_NAME.'/All/hight',array('id'=>$v['id']));?>">审核通过</a>]
        </td>
    </tr><?php endforeach; endif; ?>
    </table>
	 </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="container">
        <div class="templatemo-copyright">
          <p><div class="text-center">Copyright &copy; 2014 南开大学滨海学院就业办 <a href="" title="企业管理系统" target="_blank">企业管理系统</a> - 联系人：张浩林 <a href="" target="_blank" title="企业管理系统">南开大学数字媒体专业</a></p>
        </div>
        </div>
      </footer>
    </div>

    <script src="__PUBLIC__/js/jquery.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/Chart.min.js"></script>
    <script src="__PUBLIC__/js/templatemo_script.js"></script>
    <script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
      {
        label: "My First dataset",
        fillColor : "rgba(220,220,220,0.2)",
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        label: "My Second dataset",
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
      ]

    }

    window.onload = function(){
      var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
      window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
      });
    };

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>
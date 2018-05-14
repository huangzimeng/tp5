<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\www\tp\public/../application/user/view/default/user\profile.html";i:1496373782;s:66:"D:\www\tp\public/../application/user/view/default/base\common.html";i:1526208695;s:63:"D:\www\tp\public/../application/user/view/default/base\var.html";i:1496373782;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo config('WEB_SITE_TITLE'); ?></title>
<link href="__STATIC__/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="__STATIC__/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="__STATIC__/bootstrap/css/docs.css" rel="stylesheet">
<link href="__STATIC__/bootstrap/css/twothink.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="__STATIC__/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="__STATIC__/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap/js/bootstrap.min.js"></script>
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader'); ?>
</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
	================================================== -->
	<!--<div class="navbar">-->
	    <!--&lt;!&ndash;<div class="navbar-inner">&ndash;&gt;-->
	        <!--&lt;!&ndash;<div class="container">&ndash;&gt;-->
	            <!--&lt;!&ndash;<a class="brand" href="<?php echo url('index/index'); ?>">TwoThink</a>&ndash;&gt;-->
	            <!--&lt;!&ndash;<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">&ndash;&gt;-->
	                <!--&lt;!&ndash;<span class="icon-bar"></span>&ndash;&gt;-->
	                <!--&lt;!&ndash;<span class="icon-bar"></span>&ndash;&gt;-->
	                <!--&lt;!&ndash;<span class="icon-bar"></span>&ndash;&gt;-->
	            <!--&lt;!&ndash;</button>&ndash;&gt;-->
	            <!--&lt;!&ndash;<div class="nav-collapse collapse">&ndash;&gt;-->
	                <!--&lt;!&ndash;<ul class="nav"> &ndash;&gt;-->
		                <!--&lt;!&ndash;<?php $__NAV__ = \think\Db::name('Channel')->field(true)->where("status=1")->order("sort")->select();if(is_array($__NAV__) || $__NAV__ instanceof \think\Collection || $__NAV__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?> &ndash;&gt;-->
		                    <!--&lt;!&ndash;<?php if($nav['pid'] == '0'): ?>&ndash;&gt;-->
		                        <!--&lt;!&ndash;<li>&ndash;&gt;-->
		                            <!--&lt;!&ndash;<a href="<?php echo get_nav_url($nav['url']); ?>" target="<?php if($nav['target'] == '1'): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo $nav['title']; ?></a>&ndash;&gt;-->
		                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
                        	<!--&lt;!&ndash;<?php endif; ?>&ndash;&gt;-->
                    	<!--&lt;!&ndash;<?php endforeach; endif; else: echo "" ;endif; ?> &ndash;&gt;-->
	                <!--&lt;!&ndash;</ul>&ndash;&gt;-->
	            <!--&lt;!&ndash;</div>&ndash;&gt;-->
	            <!--&lt;!&ndash;<div class="nav-collapse collapse pull-right">&ndash;&gt;-->
	                <!--&lt;!&ndash;<?php if(is_login()): ?>&ndash;&gt;-->
	                    <!--&lt;!&ndash;<ul class="nav" style="margin-right:0">&ndash;&gt;-->
	                        <!--&lt;!&ndash;<li class="dropdown">&ndash;&gt;-->
	                            <!--&lt;!&ndash;<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0"><?php echo get_username(); ?> <b class="caret"></b></a>&ndash;&gt;-->
	                            <!--&lt;!&ndash;<ul class="dropdown-menu">&ndash;&gt;-->
	                                <!--&lt;!&ndash;<li><a href="<?php echo url('User/profile'); ?>">修改密码</a></li>&ndash;&gt;-->
	                                <!--&lt;!&ndash;<li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>&ndash;&gt;-->
	                            <!--&lt;!&ndash;</ul>&ndash;&gt;-->
	                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
	                    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
	                <!--&lt;!&ndash;<?php else: ?>&ndash;&gt;-->
	                    <!--&lt;!&ndash;<ul class="nav" style="margin-right:0">&ndash;&gt;-->
	                        <!--&lt;!&ndash;<li>&ndash;&gt;-->
	                            <!--&lt;!&ndash;<a href="<?php echo url('User/login'); ?>">登录</a>&ndash;&gt;-->
	                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
	                        <!--&lt;!&ndash;<li>&ndash;&gt;-->
	                            <!--&lt;!&ndash;<a href="<?php echo url('User/register'); ?>" style="padding-left:0;padding-right:0">注册</a>&ndash;&gt;-->
	                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
	                    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
	                <!--&lt;!&ndash;<?php endif; ?>&ndash;&gt;-->
	            <!--&lt;!&ndash;</div>&ndash;&gt;-->
	        <!--&lt;!&ndash;</div>&ndash;&gt;-->
	    <!--&lt;!&ndash;</div>&ndash;&gt;-->
	<!--</div>-->

	<!-- /头部 -->
	
	<!-- 主体 -->
	
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h2>修改密码</h2>
    <p><span><span class="pull-left"></span> </span></p>
  </div>
</header>

	<div id="main-container" class="container">
	    <div class="row">
	        
	        

<section>
	<div class="span12">
        <form class="login-form" action="" method="post">
          <div class="control-group">
            <label class="control-label" for="inputPassword">原密码</label>
            <div class="controls">
              <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="old">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">新密码</label>
            <div class="controls">
              <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">确认密码</label>
            <div class="controls">
              <input type="password" id="inputPassword" class="span3" placeholder="请再次输入密码" recheck="password" errormsg="您两次输入的密码不一致" nullmsg="请填确认密码" datatype="*" name="repassword">
            </div>
            <div class="controls Validform_checktip text-warning"></div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">提 交</button>
            </div>
          </div>
        </form>
	</div>
</section>

	    </div>
	</div>

	<script type="text/javascript">
	    $(function(){
	        $(window).resize(function(){
	            $("#main-container").css("min-height", $(window).height() - 343);
	        }).resize();
	    })
	</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <!--<footer class="footer">-->
      <!--<div class="container">-->
          <!--<p> 本站由 <strong><a href="http://www.twothink.cn" target="_blank">TwoThink</a></strong> 强力驱动</p>-->
      <!--</div>-->
    <!--</footer>-->

	<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "__ROOT__", //当前网站地址
		"APP"    : "__APP__", //当前项目地址
		"PUBLIC" : "__PUBLIC__", //项目公共目录地址
		"DEEP"   : "<?php echo config('URL_PATHINFO_DEPR'); ?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo config('URL_MODEL'); ?>", "<?php echo config('URL_CASE_INSENSITIVE'); ?>", "<?php echo config('URL_HTML_SUFFIX'); ?>"],
		"VAR"    : ["<?php echo config('VAR_MODULE'); ?>", "<?php echo config('VAR_CONTROLLER'); ?>", "<?php echo config('VAR_ACTION'); ?>"]
	}
})();
</script>
	
	<script type="text/javascript">

    	$(document)
	    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});

    	$("form").submit(function(){
    		var self = $(this);
    		$.post(self.attr("action"), self.serialize(), success, "json");
    		return false;

    		function success(data){
    			if(data.code){
    				window.location.href = data.url;
    			} else {
    				self.find(".Validform_checktip").text(data.msg);
    			}
    		}
    	});
	</script>
 <!-- 用于加载js代码 -->
	<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
	<?php echo hook('pageFooter', 'widget'); ?>
	<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
		
	</div>

	<!-- /底部 -->
</body>
</html>

<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\www\tp\public/../application/user/view/default/login\register.html";i:1526210687;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>物业管理系统</title>

  <!-- Bootstrap -->
  <link href="__PUBLIC__/home/static/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
  <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
  <!--[if lt IE 9]>
  <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="container">
  <form class="login-form" action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">用户名</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="username" ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="">
    </div>
    <div class="form-group">
      <label for="inputPassword">密码</label>
      <input type="password" id="inputPassword"  class="form-control" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password" value="">
    </div>
    <div class="form-group">
      <label for="inputPassword11">确认密码</label>
      <input type="password" id="inputPassword11"  class="form-control" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="repassword" value="">
    </div>
    <div class="form-group">
      <label for="inputPassword1">邮箱</label>
      <div class="controls">
        <input type="text" id="inputPassword1" class="form-control" placeholder="请输入邮箱"  errormsg="请填写5位验证码" nullmsg="请填写电子邮箱" datatype="*5-5" name="email" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword1">验证码</label>
      <div class="controls">
        <input type="text" id="inputPassword1" class="form-control" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify" value="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label"></label>
      <div class="controls verifyimg">
        <?php echo captcha_img(); ?>
      </div>
      <div class="controls Validform_checktip text-warning"></div>
    </div>
    <div class="form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">注 册</button>
      </div>
    </div>
    <span class="pull-left"><span>已有账号? <a href="/user/login/index.html">立即登录</a></span> </span>
  </form>
</div>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="__PUBLIC__/home/static/jquery-1.11.2.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="__PUBLIC__/home/static/bootstrap/css/bootstrap-theme.css"></script>
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
                //刷新验证码
                $(".verifyimg img").click();
            }
        }
    });

    $(function(){
        //刷新验证码
        var verifyimg = $(".verifyimg img").attr("src");
        $(".verifyimg img").click(function(){
            if( verifyimg.indexOf('?')>0){
                $(".verifyimg img").attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(".verifyimg img").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });
    });
</script>
</body>
</html>
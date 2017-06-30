<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>异清轩博客管理系统</title>
<link rel="stylesheet" type="text/css" href="/boke/Public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/boke/Public/css/style.css">
<link rel="stylesheet" type="text/css" href="/boke/Public/css/login12.css">
<link rel="apple-touch-icon-precomposed" href="/boke/Public/images/icon/icon.png">
<link rel="shortcut icon" href="/boke/Public/images/icon/favicon.ico">
<script src="/boke/Public/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="/boke/Public/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/boke/Public/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="/boke/Public/js/respond.min.js" type="text/javascript"></script>
  <script src="/boke/Public/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->


</head>

<body class="user-select">
<div class="container">
  <div class="siteIcon">
  <img src="/boke/Public/images/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
  <form action="<?php echo U('Event/login');?>" method="post" autocomplete="off" class="form-signin">
    <h2 class="form-signin-heading">管理员登录</h2>
    <label for="userName" class="sr-only">用户名</label>
    <input value="<?php echo ($username); ?>" type="text" id="userName" name="username" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
    <div style="color: red;"><?php echo ($error1); ?></div>
    <label for="userPwd" class="sr-only">密码</label>
    <input type="password" id="userPwd" name="password" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
    <div style="color: red;"><?php echo ($error2); ?></div>
    <label for="yzm" class="sr-only">验证码</label>
    <input type="text" id="yzm" name="ycode" class="form-control" placeholder="请输入右侧验证码" required autocomplete="off" maxlength="4">

    <div style="position: absolute;">
      <img src="<?php echo U('Event/code');?>" data-toggle="tooltip" data-placement="left" id="yzmPic" title="看不清？点一下试试" style="border-radius:5px;height: 38px;position:relative;  margin-top: -90px;margin-left: 170px;z-index: 10">
    </div>
    <div style="color: red;"><?php echo ($error3); ?></div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button>
  </form>
  <div class="footer">
    <p><a href="index.html" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到后台 →</a></p>
  </div>
</div>
<script src="/boke/Public/js/bootstrap.min.js"></script> 


<script> 
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
/*$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else if(true){
        $(this).text('验证码输入错误，请重新输入');
  }else{
		$(this).text('请稍后...');
	}
});*/
$("#yzmPic").on("click",function(){

  var src = $(this).attr("src");
  var random = Math.random();
  // "src","<?php echo U('yzm');?>"+"?t="+t
  $(this).attr("src","<?php echo U('Event/code');?>?t="+random);
})



</script>
</body>
</html>
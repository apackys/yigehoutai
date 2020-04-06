<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>梦中程序员管理后台</title>
    <link rel="shortcut icon" href="/assets/img/logo.jpg" type="image/x-icon">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/weather-icons.min.css" rel="stylesheet" />
    <link href="/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="login-container">
        <div class="loginbox bg-white">
            <div class="loginbox-title">登录</div>
       
            <div class="loginbox-or">
                <div class="or-line"></div>
            </div>
            <form action="" method="post">
          {{ csrf_field()}}
            <div class="loginbox-textbox">
            <input type="text" class="form-control" placeholder="用户名"  name="username"  "/>
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" placeholder="密码"  name="password"/>
            </div>
     
            <div class="loginbox-forgot">
                <a href="">忘记密码?</a>
            </div>
            <div class="loginbox-submit">
                <input type="submit" class="btn btn-primary btn-block" value="登录">
            </div>
            <div class="loginbox-signup">
                <a href="#">注册账户</a>
            </div></form>
        </div>
 
    </div>

    <script src="/assets/js/skins.min.js"></script>
    <!--Basic Scripts-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!--Beyond Scripts-->
    <script src="/assets/js/beyond.js"></script>
    <script src="/assets/js/layer.js"></script>
    <script>
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

        });
       

        @if(session('error'))
        ;!function(){
        //页面一打开就执行，放入ready是为了layer所需配件（css、扩展模块）加载完毕
        layer.ready(function(){ 
            layer.alert('{{session('error')}}');
        });
          }();
         @endif
        </script>
</body>
<!--  /Body -->
</html>

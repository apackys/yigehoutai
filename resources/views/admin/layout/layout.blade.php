﻿<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>管理后台</title>
    <link rel="shortcut icon" href="/assets/img/logo.jpg" type="image/x-icon">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/weather-icons.min.css" rel="stylesheet" />
    <link href="/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/layer.js"></script>
    <style type="text/css">
   
        .input[type=checkbox], input[type=radio] {
                opacity: 100;    left: 20px;
        }
    </style>
</head>
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small style="line-height: 40px;">管理后台</small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="/assets/img/logo.jpg">
                                    </div>
                                    <section>
                                        <h2 style="min-width:100px;"><span class="profile"><span>{{Auth::guard('admin')->user()->username}}</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>{{Auth::guard('admin')->user()->username}}</a></li>
                                    <li class="email"><a>admin@admin.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="/assets/img/logo.jpg" class="avatar">
                                            <span class="caption">个人头像</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">个人资料</a>
                                        <a href="/admin/changepassword" class="pull-right">修改密码</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/assets/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/assets/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/assets/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/assets/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/assets/css/skins/orange.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/assets/css/skins/pink.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/assets/css/skins/darkred.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/assets/css/skins/purple.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/assets/css/skins/darkblue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/assets/css/skins/gray.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/assets/css/skins/black.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/assets/css/skins/deepblue.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="/admin/logout">退出</a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                        <div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div>
                        <div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">头部固定</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">菜单固定</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">

            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <ul class="nav sidebar-menu">
                	<li class="active">
                		<a href="index.html">
                			<i class="menu-icon glyphicon glyphicon-home"></i>
                			<span class="menu-text">后台首页</span>
                		</a>
                	</li>
                	<li>
                		<a href="index.html" class="menu-dropdown">
                			<i class="menu-icon glyphicon glyphicon glyphicon-th"></i>
                			<span class="menu-text">课程管理</span>
                			<i class="menu-expand"></i>
                		</a>
                		<ul class="submenu">
                			<li>
                				<a href="/admin/lesson">
                					<span class="menu-text">课程管理</span>
                				</a>
                			</li>
                			<li>
                				<a href="/admin/lesson/create">
                					<span class="menu-text">课程添加</span>
                				</a>
                			</li>
                		</ul>
                	</li>
                	<li>
                		<a href="#" class="menu-dropdown">
                			<i class="menu-icon glyphicon glyphicon glyphicon-book"></i>
                			<span class="menu-text">TAG管理</span>
                			<i class="menu-expand"></i>
                		</a>
                		<ul class="submenu">
                			<li>
                				<a href="/admin/tag">
                					<span class="menu-text">TAG列表</span>
                				</a>
                			</li>
                			<li>
                				<a href="/admin/tag/create">
                					<span class="menu-text">TAG添加</span>
                				</a>
                            </li>
                            
                		</ul>
                	</li>
                	<li>
                		<a href="#" class="menu-dropdown">
                			<i class="menu-icon glyphicon glyphicon glyphicon-user"></i>
                			<span class="menu-text">会员管理</span>
                			<i class="menu-expand"></i>
                		</a>
                		<ul class="submenu">
                			<li>
                				<a href="#">
                					<span class="menu-text">会员列表</span>
                				</a>
                			</li>
                			<li>
                				<a href="#">
                					<span class="menu-text">会员添加</span>
                				</a>
                			</li>
                		</ul>
                	</li>
                	<li>
                		<a href="#" class="menu-dropdown">
                			<i class="menu-icon glyphicon glyphicon glyphicon-send"></i>
                			<span class="menu-text">管理员管理</span>
                			<i class="menu-expand"></i>
                		</a>
                		<ul class="submenu">
                			<li>
                				<a href="#">
                					<span class="menu-text">管理员列表</span>
                				</a>
                			</li>
                			<li>
                				<a href="#">
                					<span class="menu-text">管理员添加</span>
                				</a>
                			</li>
                		</ul>
                	</li>
                	<li>
                		<a href="#">
                			<i class="menu-icon glyphicon glyphicon-cog"></i>
                			<span class="menu-text">系统设置</span>
                		</a>
                	</li>
                </ul>
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-home"></i>&nbsp;控制面板
                        </li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Body -->
            @yield('body')
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>
    <script src="/assets/js/skins.min.js"></script>
    <!--Basic Scripts-->

    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!--Beyond Scripts-->
    <script src="/assets/js/beyond.js"></script>
  
    <script>
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

        });
    </script>
    @include('admin.layout.message')
    @include('flash::message')
    <script>
        $(function(){
            $('#flash-overlay-modal').modal();
            setTimeout(function(){
            $('#flash-overlay-modal').modal('hide');
        },3000);
        }); 
        $(function(){
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        });    
    </script>
</body>
<!--  /Body -->
</html>

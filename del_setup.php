<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/mui.min.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="layui/css/layui.css" media="all">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script src="layui/layui.js"></script>
    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '' //上传接口
                ,done: function(res){
                    //上传完毕回调
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });
    </script>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <div class="header-tit">
        骑手中心
    </div>
</header>
<div id="container">
    <div id="main">
        <div class="plist clearfloat data">
            <ul>
                <li class="clearfloat touxiang">
                    <a href="#">
                        <p class="fl">头像</p>
                        <i class="fr" ><img src="img/tou.png" id="test1"></i>
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="del_homepage1.php">
                        <p class="fl">任务管理</p>
                        <img src="/img/next.png" width="20" style="margin-left: 242px; margin-top: 15px">
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">我的定位</p>
                        <img src="/img/next.png" width="20" style="margin-left: 242px; margin-top: 15px">
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">我的手机</p>
                        <img src="/img/next.png" width="20" style="margin-left: 242px; margin-top: 15px">
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">我的评价</p>
                        <img src="/img/next.png" width="20" style="margin-left: 242px; margin-top: 15px">
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">我的钱包</p>
                        <img src="/img/next.png" width="20" style="margin-left: 242px; margin-top: 15px">
                    </a>
                </li>
            </ul>
        </div>

        <a href="#" class="center-btn db ra3">退出登录</a>
    </div>
</div>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/fastclick.js"></script>
<script src="js/mui.min.js"></script>
<script type="text/javascript" src="js/hmt.js" ></script>
</html>


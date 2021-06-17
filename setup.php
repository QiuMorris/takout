<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理中心</title>
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
    <script src="js/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="center.php" class="fl fanhui"><img src="img/back.png" width="20" ></a>
    <div class="header-tit">
        管理中心
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="plist clearfloat data">
            <ul>
                <li class="clearfloat touxiang">
                    <a href="#">
                        <p class="fl">头像</p>
                        <i class="fr"><img src="img/tou.png"/></i>
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">昵称</p>
                        <input type="text" class="fr shuru" name="" id="" value="" placeholder="孙瑾晨" />
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">手机号</p>
                        <input type="text" class="fr shuru" name="" id="" value="13035059860" placeholder="孙瑾晨" />
                    </a>
                </li>

                <li class="clearfloat">
                    <a href="address.php">
                        <p class="fl">收货地址</p>
                        <span class="fr">重庆市高新区</span>
                    </a>
                </li>
            </ul>
        </div>

        <a href="#" class="center-btn db ra3">确定修改</a>
    </div>
</div>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/fastclick.js"></script>
<script src="js/mui.min.js"></script>
<script type="text/javascript" src="js/hmt.js" ></script>
</html>


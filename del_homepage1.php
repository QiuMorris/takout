<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>订单配送</title>
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
    <link rel="stylesheet" href="layui/css/layui.css"  media="all">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="del_setup.php"><img src="img/backw.png" width="22" style="margin-top: 16px; margin-left: 10px"></a>
    <div class="header-tit">
        开工ing
    </div>
    <a href="#" class="fr shoucang sousuo">
        <img src="/img/del_loca.png" width="22" style="margin-top: 8px" >
    </a>
</header>

<div class="screening">
    <ul>
        <li class="Newband" ><a href="del_homepage1.php">新任务</a></li>
        <li class="Waiting" ><a href="del_homepage2.php">待取货</a></li>
        <li class="Delivering" ><a href="del_homepage3.php">待送达</a></li>
    </ul>
</div>

<div id="container">
    <div id="main">
        <section class="dealcard-waimai">
            <dl class="dealcard">
                <dd class="page-link" style="margin: 5px 5px 5px 5px; border: 1px solid grey;">

                    <div class="dealcard-message box">
                        订单号：<span>No.2017837493893 0001</span>
                        <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 接单 </button>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <div class="dealcard-message box" style="margin-top: 5px;">
                        送餐时间  2018/05/08 ~ 19:00
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <a></a>
                    <div class="dealcard-block" >
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/store.png" width="15"><em style="margin-left: 10px;">正新鸡排  (大洋百货店)</em>
                                <a style="margin-left: 25px;">重庆市九龙坡区大洋百货二楼</a>
                            </p>
                        </div>
                        <div style="clear: both;"></div>

                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/customer.png" width="15"><span style="margin-left: 10px;">重庆市巴南区红光大道69号重庆理工大学</span>
                            </p>
                        </div>
                        <div style="clear: both;"></div>

                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/timer.png" width="15">
                                <em style="margin-left: 10px;"><span>预计22：00前出餐</span></em>
                            </p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;"><span >商户电话：</span><span style="display: block; float: right;"> 15112345678</span></p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style=" width: 50%;"><span >顾客信息</span><span style="display: block; float: right;"><span>151515125</span> </p>
                            <p style=" width: 50%; margin-top: 5px;">
                                备注：<span>少辣</span>

                            </p>
                            <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 订单信息 </button>
                        </div>
                </dd>
            </dl>
        </section>
        <div style="clear: both;"></div>

    </div>
</div>

</body>
</html>


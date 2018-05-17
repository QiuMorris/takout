<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的商铺</title>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <link rel="stylesheet" href="layui/css/layui.css"  media="all">

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="saler_homepage.php"><img src="img/back.png"  width="20" style="margin-top: 15px; margin-left: 10px"></a>
    <div class="header-tit">
        我的商铺
    </div>
</header>

<div class="screening">
    <ul>
        <li class="Newband"><a href="saler_order.php">新订单</a></li>
        <li class="Waiting"><a href="saler_order1.php">处理中</a></li>
        <li class="Delivering"><a href="saler_order2.php">已打印</a></li>
    </ul>
</div>


<div id="container">
    <div id="main">
        <section class="dealcard-waimai">
            <dl class="dealcard">
                <dd class="page-link" style="margin: 5px 5px 5px 5px; border: 1px solid grey;">

                    <div class="dealcard-message box">
                        订单号：<span>No.2017837493893 0001</span>
                        <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 配送中 </button>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <div class="dealcard-message box" style="margin-top: 5px;">
                        送餐时间  2018/05/08 ~ 19:00
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <a></a>
                    <div class="dealcard-block" >
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >重庆小面</span><span style="display: block; float: right;"> 数量：2</span></p><p style="float: right;">16元</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >重庆小面</span><span style="display: block; float: right;"> 数量：2</span></p><p style="float: right;">16元</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >重庆小面</span><span style="display: block; float: right;"> 数量：2</span></p><p style="float: right;">16元</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >餐盒数 ^3</span><span style="display: block; float: right;"> 配送费：2RMB</span></p><p style="float: right;">合计：160元</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >顾客信息</span><span style="display: block; float: right;"> </p>
                            <p style="float: left; width: 60%; margin-top: 5px;"><span >备注：少辣</span><span style="display: block; float: right;"> </p>
                            <p style="float: left;  margin-top: 5px;"><span >配送地址：重庆理工大学花溪校区第一实验楼</span><span style="display: block; float: right;"> </p>
                            <p style="float: left;  margin-top: 5px;"><span >联系电话：18324138828</span><span style="display: block; float: right;"> </p>
                        </div>
                </dd>

            </dl>
        </section>
        <div style="clear: both;"></div>

    </div>
</div>

</body>
</html>


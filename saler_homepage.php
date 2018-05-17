<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>我的店铺</title>
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
</head>
<body>
<!--header star-->
<header class="hasManyCity hasManyCitytwo" id="header">
<!--    <a href="setup.html" class="fr shoucang sousuo"><img src="img/customer.png" width="20"></a>-->
    <div class="header-tit">
        我的店铺
    </div>
</header>
<!--header end-->
<div id="container">
    <div id="main">
        <div class="warp clearfloat">
            <div class="h-top clearfloat box-s">
                <div class="tu clearfloat fl">
                    <img src="img/touxiang.png"/>
                </div>
                <div class="content clearfloat fl">
                    <p class="hname">麦当劳（龙湖时代天街店）</p>
                    <p class="htel">状态：营业中</p>
                </div>
            </div>
            <div class="cash clearfloat">
                <div class="shang clearfloat">
                    <ul>
                        <li>
                            <a href="saler_order.php">
                                <img src="img/sorder.png" width="30" height="30"/>
                                <span>外卖订单</span>
                            </a>
                        </li>
                        <li>
                            <a href="saler_thingManage.php">
                                <img src="img/smanage.png" width="30" height="30"/>
                                <span>商品管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="store_info.php">
                                <img src="img/group3.png" width="30" height="30"/>
                                <span>门店信息</span>
                            </a>
                        </li>
                        <li>
                            <a href="jifen-order.html">
                                <img src="img/pingjia.png" width="30" height="30"/>
                                <span>用户评价</span>
                            </a>
                        </li>
                        <li>
                            <a href="jifen-order.html">
                                <img src="img/wallet.png" width="30" height="30"/>
                                <span>我的钱包</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <a href="#" class="center-btn db ra3">退出登录</a>
        </div>
    </div>
</div>

<!--footer star-->
<footer id="footer">
    <div>
        <a href="index.html">
            <div class="icon i-1"></div>
            <p>首页</p>
        </a>
    </div>
    <div>
        <a href="#">
            <div class="icon i-5"></div>
            <p>附近</p>
        </a>
    </div>
    <div>
        <a href="rush.html">
            <div class="icon i-2"></div>
            <p>抢购</p>
        </a>
    </div>
    <div>
        <a href="#">
            <div class="icon i-3"></div>
            <p>关注</p>
        </a>
    </div>
    <div>
        <a href="center.html">
            <div class="icon i-4 on"></div>
            <p>我的</p>
        </a>
    </div>
</footer>
<!--footer end-->
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/mui.min.js"></script>
<script src="js/others.js"></script>
<script type="text/javascript" src="js/hmt.js" ></script>
<script src="slick/slick.js" type="text/javascript" ></script>
<!--插件-->
<link rel="stylesheet" href="css/swiper.min.css">
<script src="js/swiper.jquery.min.js"></script>
</html>


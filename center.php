<?php
session_start();
if(!$_SESSION['user'])
{
    header('Location: /login.php');
}
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20"></a>
    <div class="header-tit">
        会员中心
    </div>
    <a href="setup.html" class="fr shoucang sousuo"><img src="img/more.png" width="20"></a>

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
                    <p class="hname"><?php echo $_SESSION['user']['cus_name']?> 欢迎回来</p>
                    <p class="htel"><?php echo $_SESSION['user']['cus_tel']?></p>
                </div>
            </div>

            <div class="cashlist clearfloat">
                <ul>
                    <li class="box-s" style="display: none">
                        <a href="#">
                            <p class="fl">浏览历史</p>
                            <i class="iconfont icon-jiantou1 fr"></i>
                        </a>
                    </li>

                    <li class="box-s">
                        <a href="order.php">
                            <p class="fl">我的订单</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s">
                        <a href="address.php">
                            <p class="fl">我的地址</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s">
                        <a href="setup.php">
                            <p class="fl">账户设置</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s">
                        <a href="setup.php">
                            <p class="fl">我要开店</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="center-btn db ra3">退出登录</a>
        </div>
    </div>
</div>

<footer id="footer">
    <div>
        <a href="index.php">
            <div class="icon i-1 on"><img src="img/homepage.png" width="22"></div>
            <p>首页</p>
        </a>
    </div>
    <div>
        <a href="order.php">
            <div class="icon i-3"><img src="img/order.png" width="22"></div>
            <p>订单</p>
        </a>
    </div>
    <div>
        <a href="center.php">
            <div class="icon i-4"><img src="img/mine.png" width="22"></div>
            <p>我的</p>
        </a>
    </div>
</footer>
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

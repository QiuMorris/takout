<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>开工ing</title>
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
<header class="hasManyCity hasManyCitytwo" id="header">
    <a><i class="iconfont icon-fanhui"><img src="img/icon_login_user@2x.png" width="20" style="margin-top: 16px;"></i></a>
    <div class="header-tit">
        开工ing
    </div>
    <a href="#" class="fr shoucang sousuo">
        <img src="img/wxbdingwei.png" width="28" style="margin-top: 0px; margin-right: 5px;"></img>
        <img src="img/message.png" width="30" style="margin-right: 5px;">
    </a>
</header>

<div class="screening">
    <ul>
        <li class="Newband">新任务  (5)</li>
        <li class="Waiting">待取货 (4)</li>
        <li class="Delivering">待送达 (6)</li>
    </ul>
</div>


<div id="container">
    <div id="main">
        <section class="dealcard-waimai">
            <dl class="dealcard">
                <dd class="page-link">
                    <a href="delivery-list.html">
                        <div class="dealcard-message box">
                            顾客已等待11分钟  (09:21 前送达)
                            <em class="location-right"><button type="button" style="margin-right: 5px; height: 25px;">抢单</button></em>
                        </div>
                        <a></a>
                        <div class="dealcard-block" >
                            <div class="message" style="margin-top: 15px;">
                                <img src="img/store.png" width="15"><em style="margin-left: 10px;">正新鸡排  (大洋百货店)</em>
                                <a style="margin-left: 25px;">重庆市巴南区红光大道69号</a>
                            </div>
                            <div class="customer" style="margin-top: 15px;">
                                <img src="img/customer.png" width="15"><em style="margin-left: 10px;">重庆市巴南区红光大道69号重庆理工大学</em>

                            </div>

                            <div class="price" style="margin-top: 10px;">
                                <img src="img/timer.png" width="15">
                                <em style="margin-left: 10px;"><span>预计22：00前出餐</span><span style="margin-left: 130px;">距离我3.2km</span></em>

                            </div>

                            <div class="coupon ">
                                <table border="1">
                                    <tr>
                                        <th><div><img src="img/telphone.png" width="20" style="margin-top: 5px; margin-left: 20px;"></div></th>
                                        <th><a style="width:auto; margin-left: 15px; margin-right: 10px">联系商户</a></th>
                                        <th><img src="css/img/user-addr-icon.192fb37b.png" width="20" style="margin-left: 25px;"></th>
                                        <th><a style="width: auto; margin-left: 20px; margin-right: 28px;">商户地址</th>
                                        <th><a style="margin-left: 25px; margin-right: 25px;">菜单</a></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </a>
                </dd>
                

            </dl>
        </section>
    </div>
</div>

</body>
</html>


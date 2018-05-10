<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>支付订单</title>
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
<header class="hasManyCity hasManyCitytwo hasManyCitythree" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img href="order.php" src="img/back.png" width="20"></a>
    <div class="header-tit">
        支付订单
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="in-order-summary">
            <div class="in-avatar">
                <img src="img/tou.png" alt="商家头像">
            </div>
            <div class="in-order-desc">
                <div class="cell-ellipsis">
                    <span class="in-order-fee in-bottom-line">¥8.80</span>
                </div>
                <h4 class="cell-ellipsis">
                    <span class="in-order-title in-bottom-line">爆米花32盎司1次</span>
                </h4>
            </div>
        </div>
        <div class="in-pay-method cell-box">
            <div class="in-pay-type cell-access">
                <div class="cell-icon">
                    <img src="img/weixin2-2.png" alt="微信支付">
                </div>
                <div class="cell-left">
                    <div class="in-pay-title cell-ellipsis">请输入支付金额 </div>
                    <div class="in-pay-info cell-ellipsis">
                        <input type="text" value="请输入支付金额" >
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-line">
            <button class="btn btn-submit">
                <span class="in-confirm">确认支付</span>
                <span class="in-need-pay">¥8.80</span>
            </button>
        </div>
    </div>
</div>
</body>
<script src="js/index.min.14hpKd.js"></script>
</html>


<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商城订单详情</title>
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="order.php"></a>
    <div class="header-tit">
        订单详情
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="deal">
            <div class="list">
                <div class="guess-like guess-liketwo">
                    <div class="sjname box-s">
                        配送地址：重庆市巴南区红光大道69号重庆理工大学
                    </div>
                    <div class="sjname box-s">
                        收货人：杨晓波
                    </div>
                    <div class="sjname box-s">
                        正新鸡排大洋百货店
                    </div>
                    <dl class="list listtwo">
                        <dd>
                            <dl class="list">
                                <dd>
                                    <div class="react">
                                        <div class="dealcard">
                                            <div class="dealcard-img imgbox">
                                                <span></span>
                                                <img src="img/54b9cae9d6bc4.jpg"/>
                                            </div>
                                            <div class="dealcard-block-right">
                                                <div class="dealcard-brand single-line">成都担担面</div>
                                                <div class="title text-block">
                                                    数量：1
                                                </div>
                                                <div class="price">
                                                    <span class="strong">19.9</span>
                                                    <span class="strong-color">元</span>
                                                </div>
                                            </div>
                                            <a href="#" class="fr sqtuikuan">申请退款</a>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </dd>
                    </dl>
                </div>
            </div>
            <dl id="deal-terms" class="list">
                <dd class="dd-padding dd-paddingfour">
                    <ul>
                        <li>
                            <div class="tip-title">配送费：5.00</div>
                        </li>
                        <li>
                            <div class="tip-title">实付款：25.00</div>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="deal-terms" class="list">
                <dd class="dd-padding dd-paddingfour">
                    <ul>
                        <li>
                            <div class="tip-title">订单编号：6546464654654</div>
                        </li>
                        <li>
                            <div class="tip-title">创建时间：2016-01-01&nbsp;14:00</div>
                        </li>
                        <li>
                            <div class="tip-title">付款时间：2016-01-01&nbsp;16:25</div>
                        </li>
                        <li>
                            <div class="tip-title">发货时间：2016-01-01&nbsp;17:25</div>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>

    </div>
</div>

<div class="renting-footer clearfloat" id="footer">
    <ul>
        <li><a href="#">联系商家</a></li>
        <li><a href="#">确认收货</a></li>
    </ul>
</div>
</body>
</html>


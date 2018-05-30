<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>订单详情</title>
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
    <script src="js/hmt.js" type="text/javascript"></script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="delivery-list.php"></a>
    <div class="header-tit">
        确认订单
    </div>
</header>

<div id="container">
    <div id="main">
        <section class="menu_wrap pay_wrap">
            <ul class="boxs boxstwo">
                <li>
                    <a class="">配送方式：</a>&nbsp;&nbsp;
                    <a class="btn_express pick_in_store">商家配送</a>&nbsp;&nbsp;
                </li>
                <li class="li_delivery">
                    <a href="#">
                        <strong>
                            <span>裘实</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>133111566711</span><br>
                            <span>重庆市 巴南区 红光大道69号重庆理工大学</span>
                        </strong>
                        <div class="fr"><i class="ico_arrow"></i></div>
                    </a>
                </li>
                <li id="show_arrive_date">
                    <a href="javascript:void(0);" class="date">
                        <strong>送达时间&nbsp;:&nbsp;&nbsp;</strong>
                        <div class="fr"><i class="ico_arrow"></i></div>
                        <span class="fr">立即送出（大约12:10送达）</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <strong>订单备注&nbsp;:&nbsp;</strong>
                        <div class="fr"><i class="ico_arrow"></i></div>
                        <span class="fr">少辣，多糖</span>
                    </a>
                </li>
            </ul>
            <ul class="boxs">
                <li class="fantit">
                    <a href="#" class="time">
                        <strong>订单详情</strong>
                    </a>
                </li>
                <li class="fanlie">
                    <a href="javascript:void(0);" class="time">
                        <strong>盖浇饭</strong>
                        <span class="fr fanqian">¥8</span>
                        <span class="fanshu fr">×1</span>
                    </a>
                </li>
                <li class="fanlie">
                    <a href="javascript:void(0);" class="time">
                        <strong>盖浇饭</strong>
                        <span class="fr fanqian">¥8</span>
                        <span class="fanshu fr">×1</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <strong>配送费</strong>
                        <span class="fr">¥8</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <strong>总计¥22</strong>
                        <span class="fr">实付¥22</span>
                    </a>
                </li>
            </ul>

            <ul class="menu_list boxs">
                <li>
                    <div>
                        <h3>商家满减优惠：满￥30元,减<strong>￥2</strong>元</h3>
                    </div>
                </li>
            </ul>
        </section>

        <div class="fixed">
            <p class="show_delivery_fee">总计&nbsp;：&nbsp;￥22</p>
            <span class="fr btn">
                <a href="pay.php" class="comm_btn" id="submit_order">确认订单</a>
            </span>
        </div>
    </div>
</div>
</body>
</html>


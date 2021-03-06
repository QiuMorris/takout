<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>外卖列表</title>
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
    <script src="js/hmt.js" type="text/javascript"></script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="tuan.php"></a>
    <div class="header-tit">
        店铺菜单
    </div>
    <a href="#" class="fr shoucang sousuo"><img ></a>
</header>

<div id="container">
    <div id="main">
        <!--店铺头部开始-->
        <div class="store-header clearfix">
            <div class="tu">
                <span></span>
                <img src="img/tou.png"/>
            </div>
            <div class="right fl">
                <p>正新鸡排大洋百货店</p>
            </div>
            <div class="tit">
                <span></span>
                <p>欢迎光临！</p>
            </div>
        </div>
        <!--店铺头部结束-->
        <!--头部切换开始-->
        <ul id="shangjia_tab">
            <li>
                <a href="delivery-list.php">菜单</a>
            </li>
            <li>
                <a href="dlplun.php" class="on">评价</a>
            </li>
            <li>
                <a href="dldetail.php">详情</a>
            </li>
        </ul>
        <!--头部切换结束-->
        <div id="shangjia_detail" class="page-center-box dldetail">
            <div class="pldengji">
                <ul>
                    <li class="cur"><a href="#">好评</a></li>
                    <li><a href="#">中评</a></li>
                    <li><a href="#">差评</a></li>
                </ul>
            </div>
            <dl class="dealcard">

                <dd class="page-link">
                    <a href="#">
                        <div class="dealcard-img imgbox"> <img src="img/553b0e254774b.jpg" alt=""> </div>
                        <div class="dealcard-block-right">
                            <div class="brand">瑾晨0212<em class="location-right">2016-11-11</em></div>
                            <div class="title ">
										<span class="star">
											<i class="full"></i>
											<i class="full"></i>
											<i class="full"></i>
											<i class="half"></i>
											<i></i>
										</span>
                            </div>
                            <div class="price">
                                <span>配送速度快质量好配送速度快质量好配送速度快质量好配送速度快质量好</span>
                            </div>
                        </div>
                    </a>
                </dd>

            </dl>
        </div>




    </div>
</div>
</body>
</html>
s

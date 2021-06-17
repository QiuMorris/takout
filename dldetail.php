<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_seller = new MysqliModel('seller');
$arr_selinfo = $mod_seller->where(array('sel_id'=>$_GET['sel_id']))->selectOne();

//var_dump($arr_selinfo);
//exit;
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="/img/back.png" width="20" href="tuan.php"></a>
    <div class="header-tit">
        店铺菜单
    </div>
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
                <p>商铺活动最新简介</p>
            </div>
        </div>
        <!--店铺头部结束-->
        <!--头部切换开始-->
        <ul id="shangjia_tab">
            <li>
                <a href="delivery-list.php">菜单</a>
            </li>
            <li>
                <a href="dlplun.php">评价</a>
            </li>
            <li>
                <a href="dldetail.php" class="on">详情</a>
            </li>
        </ul>
        <!--头部切换结束-->
        <div id="shangjia_detail" class="page-center-box dldetail">
            <div class="detailNr">
                <h3>商家信息</h3>
                <div class="nr mb10">
                    <p>店铺地址：四川省成都市锦江区望江西路与东至路交口</p>
                    <p>店铺联系电话：024-578349753</p>
                    <p>店铺特色：</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


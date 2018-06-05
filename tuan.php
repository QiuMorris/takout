<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_sell_photo = new MysqliModel('seller');
$sel_list = $mod_sell_photo->select();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>团购</title>
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="index.php"></a>
    <div class="header-tit">
        所有店铺
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="guess-like">
            <dl class="list">
                <dd>
                    <dl class="list">
                        <?php foreach ($sel_list as $key=>$value):?>
                        <dd>
                            <a href="delivery-list.php?sel_id=<?php echo $value['sel_id']?>" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img width="90" height="60" src="<?php echo $value['sel_logo']?>"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line"><?php echo $value['sel_name']?></div>
                                        <div class="title text-block"><?php echo $value['sel_address']?></div>
                                        <div class="price">
<!--                                            <span class="strong">9.9</span>-->
<!--                                            <span class="strong-color">元起</span>-->
                                            <span class="tag" style="float: right">多优惠+</span>
<!--                                               <span class="line-right">-->
<!--                                                已售50293-->
<!--                                            </span>-->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                        <?php endforeach;?>
                    </dl>
                </dd>



            </dl>

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
<script src="js/other.js" type="text/javascript"></script>
</html>


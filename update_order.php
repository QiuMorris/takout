<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';


$mod_address = new MysqliModel('address');//实例化
$readdress=$mod_address->where(array('cus_id'=>$_SESSION['user']['cus_id'], 'is_default'=>1))->selectOne();

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>提交订单</title>
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
    <a class="fl fanhui" href="delivery-list.php"><img src="img/backw.png" width="20"></a>
    <div class="header-tit">
        订单确认
    </div>
</header>

<div id="container">
    <div id="main">
        <form class="wrapper-list">
            <h4 style="text-align: center;">

                <a href="select_address.php"><img src="img/jia.png" width="20" style="margin-right: 5px;">添加收货地址</a>
            </h4>
            <dl class="list">
                <dd>
                    <dl>
                        <dd class="dd-padding kv-line-r">
                            <p>收货人姓名：<?php echo $readdress['cus_name']?></p>
                        </dd>
                        <dd class="dd-padding kv-line-r">
                            <p>收货人电话：<?php echo $readdress['cus_tel']?></p>
                        </dd>
                        <dd class="dd-padding kv-line-r">
                            <p>收货人地址：<?php echo $readdress['cus_address']?></p>
                        </dd>
                    </dl>
                </dd>
            </dl>

            <dl class="list">
                <dd>
                    <dl>
                        <dd class="dd-padding kv-line-r">
                            <h6>正新鸡排大洋百货店</h6>
                        </dd>
                        <dd class="dd-padding kv-line-r">
                            <h6>重庆小面</h6>
                            <p>8.8元</p>
                        </dd>
                        <dd class="dd-padding dd-paddingtwo kv-line-r quantity">
                            <h6>重庆小面</h6>
                            <p>8.8元</p>
                        </dd>
                        <dd class="dd-padding kv-line-r">
                            <h6>重庆小面</h6>
                            <p>8.8元</p>
                        </dd>
                    </dl>
                </dd>
            </dl>

            <dl class="list">
                <dd class="kv-line-r dd-padding">
                    <h6>订单总价：</h6>
                    <p>
                        <span id="realPayMoney" class="J_total-price">8.8</span>
                        <span class="price-unit">元</span>
                    </p>
                </dd>
            </dl>

            <h4>配送信息</h4>
            <dl class="list" id="mobile-show">
                <dd>
                    <a class="react" href="#">
                        <div class="more moretwo more-weak">
                            130****9860
<!--                            <span class="more-after">新号码</span>-->
                        </div>
                    </a>
                </dd>
            </dl>
            <div class="btn-wrapper">
                <a href="pay.php" type="submit" class="btn btn-block btn-strong btn-larger mj-submit" >提交订单</a>
            </div>
            <div class="btn-wrapper">
                <a href="pay.php" type="submit" class="btn btn-block btn-strong btn-larger mj-submit" >取消订单</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>


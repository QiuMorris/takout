<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';


$mod_payinfo = new MysqliModel('payinfo');
$arr_selpayinfo=$mod_payinfo->where(array('user_id'=>1, 'user_type'=>2))->select();  //全部
//var_dump($arr_selpayinfo);
//exit;
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>收支明细</title>
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
    <link rel="stylesheet" href="css/swiper.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
    <script src="js/mui.min.js"></script>
    <script src="js/others.js"></script>
    <script type="text/javascript" src="js/hmt.js" ></script>
    <script src="slick/slick.js" type="text/javascript" ></script>

</head>
<body>
<!--header star-->
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="/img/backw.png" width="20" href="del_setup.php"></a>
    <div class="header-tit">
        收支明细
    </div>
</header>
<!--header end-->
<div id="container">
    <div id="main">

        <section >
            <dl class="dealcard">
                <?php foreach ($arr_selpayinfo as $key=>$valuePayinfo):?>
                    <dd class="page-link" style="margin: 5px 5px 5px 5px; ">
                        <div class="dealcard-message box">
                            订单号：<?php echo $valuePayinfo['order_id']?>
                        </div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="dealcard-message box" style="margin-top: 5px;">
                            <span style="color: #0EC0A8">金额：<?php echo $valuePayinfo['order_value']?></span>
                            <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                            交易明细: <?php echo $valuePayinfo['order_info']?>
                        </div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="dealcard-message box" style="margin-top: 5px;">
                            交易日期: <?php echo date("Y-m-d H:i", $valuePayinfo['order_date']);?>
                        </div>
                    </dd>
                <?php endforeach; ?>

            </dl>
        </section>
        <div style="clear: both;"></div>

    </div>
</div>

</body>

</html>



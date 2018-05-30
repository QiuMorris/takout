<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_myorder = new MysqliModel('myorder');
$mod_detail_list = new MysqliModel('detail_list');
$mod_seller = new MysqliModel('seller');
$reSel=$mod_seller->where(array('cus_id'=>$_SESSION['user']['cus_id']))->selectOne();
$_SESSION['user']['sel_id']=$reSel['sel_id'];

$order_type=0;
if($_GET['order_type']>0)
{
    $order_type=$_GET['order_type'];
}

$arr_order = $mod_myorder->where(array('sel_id'=>$reSel['sel_id'], 'order_type'=>$order_type))->select();
foreach ($arr_order as $key=>$value){
    $arr_order[$key]['foodlist']=getfood($value['order_number']);
}

function getfood($order_number)
{
    global $mod_detail_list;
    return $mod_detail_list->where(array('order_id'=>$order_number))->select();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的商铺</title>
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
    <a href="saler_homepage.php"><img src="img/back.png"  width="20" style="margin-top: 15px; margin-left: 10px"></a>
    <div class="header-tit">
        我的商铺
    </div>
</header>

<div class="screening">
    <ul>
        <li class="Newband"><a href="saler_order.php" >新订单</a></li>
        <li class="Waiting"><a href="saler_order.php?order_type=1">处理中</a></li>
        <li class="Delivering"><a href="saler_order.php?order_type=2">已打印</a></li>
    </ul>
</div>


<div id="container">
    <div id="main">
        <section class="dealcard-waimai">
            <dl class="dealcard">

                <?php foreach ($arr_order as $key=>$valueOrder):?>
                <dd class="page-link" style="margin: 5px 5px 5px 5px; border: 1px solid grey;">

                    <div class="dealcard-message box">
                        <?php echo $valueOrder['order_number']?>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <div class="dealcard-message box" style="margin-top: 5px;">
                        送餐时间: <?php echo date("Y-m-d H:i", $valueOrder['del_time']);?>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <a></a>
                    <div class="dealcard-block" >
                        <?php foreach ($valueOrder['foodlist'] as $k=>$val): ?>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span > <?php echo $val['food_name']?></span><span style="display: block; float: right;"> 数量：<?php echo $val['food_num']?></span></p><p style="float: right;"><?php echo $val['food_price']?>元</p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <?php endforeach; ?>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span style="display: block; "> 配送费：5RMB</span></p><p style="float: right;">合计：<?php echo $valueOrder['salary']?></p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 60%;"><span >顾客信息</span><span style="display: block; float: right;"> </p>
                            <p style="float: left; width: 60%; margin-top: 5px;"><span >备注：请尽快送达</span><span style="display: block; float: right;"> </p>
                            <p style="float: left; width: 65%;margin-top: 5px;"><span >配送地址：<?php echo $valueOrder['cus_address']?></span><span style="display: block; float: right;"> </p>
                            <p style="float: left; width: 60%; margin-top: 5px;"><span >联系电话：<?php echo $valueOrder['buy_tel']?></span><span style="display: block; float: right;"> </p>
                        </div>

                        <div class="order-bottom clearfloat box-s" style="margin-top: 20px;">
                            <?php if($order_type==0){?>
                            <a href="#" class="fr" >接单</a>
                            <?php }elseif($order_type==1){?>
                             <a href="#" class="fr" >处理中</a>
                            <?php }elseif($order_type==2){?>
                                <a href="#" class="fr" >已完成</a>
                            <?php }?>
                        </div>
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


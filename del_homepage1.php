<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

$mod_myorder = new MysqliModel('myorder');
$mod_detail_list = new MysqliModel('detail_list');
$mod_seller = new MysqliModel('seller');

//$reSel=$mod_seller->where(array('sel_id'=>$_SESSION['user']['sel_id']))->selectOne();


$order_type=1;
if($_GET['order_type']>1)
{
    $order_type=$_GET['order_type'];
}

$arr_order = $mod_myorder->where(array('order_type'=>$order_type))->select();

foreach ($arr_order as $key=>$value){
    $arr_order[$key]['foodlist']=getfood($value['order_number']);
    $arr_order[$key]['arr_seller'] = getStore($value['sel_id']);
}

function getfood($order_number)
{
    global $mod_detail_list;
    return $mod_detail_list->where(array('order_id'=>$order_number))->select();
}

function getStore($seller_id)
{
    global $mod_seller;
    return $mod_seller->where(array('sel_id'=>$seller_id))->selectOne();
}
//print_r($arr_order);
//exit;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>订单配送</title>
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
    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="del_setup.php"><img src="img/backw.png" width="22" style="margin-top: 16px; margin-left: 10px"></a>
    <div class="header-tit">
        开工ing
    </div>
    <a href="#" class="fr shoucang sousuo">
        <img src="/img/del_loca.png" width="22" style="margin-top: 8px" >
    </a>
</header>

<div class="screening">
    <ul>
        <li class="Newband" ><a href="del_homepage1.php">新任务</a></li>
        <li class="Waiting" ><a href="del_homepage1.php?order_type=2">配送中</a></li>
        <li class="Delivering" ><a href="del_homepage1.php?order_type=3">已完成</a></li>
    </ul>
</div>

<div id="container">
    <div id="main">
        <section class="dealcard-waimai">
            <dl class="dealcard">

                <?php foreach ($arr_order as $key=>$valueOrder):?>
                <dd class="page-link" style="margin: 5px 5px 5px 5px; border: 1px solid grey;">

                    <div class="dealcard-message box">
                        订单号：<?php echo $valueOrder['order_number']?>


                        <?php if($order_type==1){?>
                            <button onclick="jiedan(<?php echo $valueOrder['order_id']?>)"" class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 接单 </button>
                        <?php }elseif($order_type==2){?>
                            <button onclick="arrive(<?php echo $valueOrder['order_id']?>)"" class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 已送达 </button>
                        <?php }elseif($order_type==3){?>
                            <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 已完成 </button>
                        <?php }?>

                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <div class="dealcard-message box" style="margin-top: 5px;">
                        送餐时间: <?php echo date("Y-m-d H:i", $valueOrder['del_time']);?>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    <a></a>
                    <div class="dealcard-block" >
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/store.png" width="15"><em style="margin-left: 10px;"><?php echo $valueOrder['arr_seller']['sel_name']?></em>
                                <a style="margin-left: 25px;"><?php echo $valueOrder['arr_seller']['sel_address']?></a>
                            </p>
                        </div>
                        <div style="clear: both;"></div>

                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/customer.png" width="15"><span style="margin-left: 10px;"><?php echo $valueOrder['cus_address']?></span>
                            </p>
                        </div>
                        <div style="clear: both;"></div>

                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">
                                <img src="img/timer.png" width="15">
                                <em style="margin-left: 10px;"><span>预计:<?php echo date("Y-m-d H:i", $valueOrder['del_time']-1800);?>前出餐</span></em>
                            </p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style="float: left; width: 100%;">商户电话：<?php echo $valueOrder['arr_seller']['sel_tel']?></p>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                        <div class="message" style="margin-top: 15px;">
                            <p style=" width: 50%;">顾客信息：<?php echo $valueOrder['buy_tel']?></p>
                            <p style=" width: 50%; margin-top: 5px;">
                                备注：<span>请尽快送达</span>

                            </p>
<!--                            <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 订单信息 </button>-->
                        </div>
                </dd>
                <?php endforeach; ?>

            </dl>
        </section>
        <div style="clear: both;"></div>

    </div>
</div>

<script>
    function jiedan(order_id)
    {
        $.post("ajax_seller.php?act=del-jiedan",
            {
                order_id:order_id
            },
            function(data){
                if(data.code == 200) {
                    layer.msg('接单成功!');
                    // window.location.href = "/saler_thingManage.php";
                    location.reload();
                }
                else {
                    layer.msg(data.msg);
                }
            },"JSON");
    }

    function arrive(order_id)
    {
        $.post("ajax_seller.php?act=del-arrive",
            {
                order_id:order_id
            },
            function(data){
                if(data.code == 200) {
                    layer.msg('派送成功!');
                    // window.location.href = "/saler_thingManage.php";
                    location.reload();
                }
                else {
                    layer.msg(data.msg);
                }
            },"JSON");
    }
</script>

</body>
</html>


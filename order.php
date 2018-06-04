<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_myorder = new MysqliModel('myorder');
$mod_detail_list = new MysqliModel('detail_list');
$mod_seller = new MysqliModel('seller');
$reSel=$mod_seller->where(array('cus_id'=>$_SESSION['user']['cus_id']))->selectOne();
$_SESSION['user']['sel_id']=$reSel['sel_id'];

$order_type=1;
if($_GET['order_type']>1)
{
    $order_type=$_GET['order_type'];
}

$arr_order = $mod_myorder->where(array('cus_id'=>$_SESSION['user']['cus_id'], 'order_type'=>$order_type))->select();

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
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>团购订单</title>
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
    <script src="js/jquery.SuperSlide.2.1.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(".notice").slide({ titCell:".tab-hd li", mainCell:".tab-bd",delayTime:0 });
    </script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <link rel="stylesheet" href="layui/css/modules/layer/default/layer.css" media="all">
    <link rel="stylesheet" href="layui/css/layui.css" media="all">

    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
</head>
<body >
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="center.php"></a>
    <div class="header-tit">
        团购订单
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="notice">
            <div class="tab-hd ">
                <ul class="tab-nav">
                    <li class="Newband"><a href="order.php" >已接单</a></li>
                    <li class="Waiting"><a href="order.php?order_type=2" >配送中</a></li>
                    <li class="Delivering"><a href="order.php?order_type=3" >已送达</a></li>
                </ul>
            </div>


                <div id="main">
                    <section >
                        <dl class="dealcard">

                            <?php foreach ($arr_order as $key=>$valueOrder):?>
                                <dd class="page-link" style="margin: 5px 5px 5px 5px; ">

                                    <div class="dealcard-message box">
                                        订单号：<?php echo $valueOrder['order_number']?>

                                        <?php if($order_type==1){?>
                                            <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px" onclick="message();"> 催单 </button>
                                        <?php }elseif($order_type==2){?>
                                            <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 配送中 </button>
                                        <?php }elseif($order_type==3){?>
                                            <?php if($valueOrder['is_assess'] == 0) {?>
                                                <button onclick="to_assess(<?php echo $valueOrder['sel_id']?>, <?php echo $valueOrder['order_id']?>)" class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 评价订单 </button>
                                                <?php } else {?>
                                                    <button class="layui-btn layui-btn-xs layui-btn-normal layui-btn-danger" style="float: right; padding-left: 16px; padding-right: 16px"> 已评价 </button>
                                                <?php }?>
                                        <?php }?>

                                    </div>
                                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                                    <div class="dealcard-block" >
                                        <div class="message" style="margin-top: 5px;">
                                            商户名称：<em style="margin-left: 10px;"><?php echo $valueOrder['arr_seller']['sel_name']?></em>
                                        </div>
                                        <div style="clear: both;"></div>

                                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                                        <div class="message" style="margin-top: 15px;">
                                            <p style="float: left; width: 100%;">
                                                <img src="img/timer.png" width="15">
                                                <em style="margin-left: 10px;"><span>预计:<?php echo date("Y-m-d H:i", $valueOrder['del_time']);?>  前送餐</span></em>
                                            </p>
                                        </div>
                                        <div style="clear: both;"></div>
                                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

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
                                            <p style="float: left; width: 100%;">商户联系电话：<?php echo $valueOrder['arr_seller']['sel_tel']?></p>
                                        </div>
                                        <div style="clear: both;"></div>


                                </dd>
                            <?php endforeach; ?>

                        </dl>
                    </section>
                    <div style="clear: both;"></div>
                </div>


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
<script>

    function message()
    {
        layer.msg('已催单!');

    }

    function to_assess(sel_id, order_id) {
        window.location.href="assess.php?sel_id="+sel_id+"&order_id="+order_id;
    }

</script>
</body>



</html>


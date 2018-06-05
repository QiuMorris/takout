<?php
session_start();

include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';


$mod_food = new MysqliModel('food');
$mod_seller = new MysqliModel('seller');
$mod_assess = new MysqliModel('assess');

$arr_food = $mod_food->where(array('sel_id'=>$_GET['sel_id'], 'food_state'=>1))->select();
$arr_selinfo = $mod_seller->where(array('sel_id'=>$_GET['sel_id']))->selectOne();
$arr_assinfo = $mod_assess->where(array('sel_id'=>$_GET['sel_id']))->select();
//var_dump($arr_assinfo);
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
    <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
    <link href="layui/css/modules/layer/default/layer.css" rel="stylesheet"  />

    <script>
        function tab_change(number) {
            if(number == 1) {
                $('#ele').css('display','block');
                $('#footer').css('display','block');
                $('#shangjia_assess').css('display','none');
                $('#shangjia_detail').css('display','none');
                $("#shangjia_tab li a").removeClass("on");
                $("#tab1").addClass("on");
            }else if(number == 2) {
                $('#ele').css('display','none');
                $('#footer').css('display','none');
                $('#shangjia_assess').css('display','block');
                $('#shangjia_detail').css('display','none');
                $("#shangjia_tab li a").removeClass("on");
                $("#tab2").addClass("on");
            }else if(number == 3) {
                $('#ele').css('display','none');
                $('#footer').css('display','none');
                $('#shangjia_assess').css('display','none');
                $('#shangjia_detail').css('display','block');
                $("#shangjia_tab li a").removeClass("on");
                $("#tab3").addClass("on");
            }
        }
    </script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20"></a>
    <div class="header-tit">
        店铺菜单
    </div>
</header>

<div id="container">
    <div id="main">

        <div class="store-header clearfix">
            <div class="tu">
                <span></span>
                <img src="<?php echo $arr_selinfo['sel_logo']?>" width="80" height="80"/>
            </div>
            <div class="right fl">
                <p><?php echo $arr_selinfo['sel_name']?></p>
                <p>欢迎您的光临</p>
            </div>
            <div class="tit">
                <p><?php echo $arr_selinfo['sel_info']?></p>
            </div>
        </div>
        <!--店铺头部结束-->
        <ul id="shangjia_tab">
            <li>
                <a onclick="tab_change(1)" id="tab1" class="on">菜单</a>
            </li>
            <li>
                <a onclick="tab_change(2)" id="tab2">评价</a>
            </li>
            <li>
                <a onclick="tab_change(3)" id="tab3">详情</a>
            </li>
        </ul>
        <!--头部切换结束-->
        <div id="ele" class="shop_page page-center-box">
            <div class="frame-set-left">
                <ul>
                    <li class="active" rel="all">
                        <a href="javascript:void(0);">全部菜品</a>
                    </li>
                </ul>
            </div>
            <div class="frame-set-right">

                <?php foreach ($arr_food as $k=>$valfood ):?>
                <div class="list-have-pic list-have-pictwo">
                    <div class="eleList_box">
                        <div class="list-box cate_2">
                            <div class="list-img">
                                <img src="<?php echo $valfood['food_jpg']?>">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear"><?php echo $valfood['food_name']?></p>
                                <p class="overflow_clear"><?php echo $valfood['food_sale']?></p>
                                <p class="price fontcl1"><?php echo $valfood['food_price']?></p>

                                <div class="num-input">
                                    <div class="btn jq_jian" val="11.5" did="2" onclick="addcart(<?php echo $valfood['food_id']?>,'del');">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0" id="num<?php echo $valfood['food_id']?>"></div>
                                    <div class="btn active jq_addcart" val="11.5" did="2" onclick="addcart(<?php echo $valfood['food_id']?>,'add');">+</div>
                                </div>
                                <p class="overflow_clear"><?php echo $valfood['food_note']?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach?>

            </div>
        </div>
        <footer class="footer-cart eleFooter-cart" id="footer">
            <div class="cart">
                <a id="cart_1" href="javascript:void(0);">
<!--                    <div class="cart-num" id="num">2</div>-->
                    <img src="/img/myshopcar.png" width="30">
                </a>
            </div>
            <div class="price">￥<span id="total_price">0.00</span>
                <p>(配送费5元)</p>
            </div>
            <div id="cart_2" class="disable">
                <a href="update_order.php" style="color:#FFFFFF;">确认下单</a>
            </div>
        </footer>
    </div>
</div>

<style>
    .order_button a{
        display: block;
        color: #fff;
        background-color: #F19149;
        text-align: center;
    }
</style>

<script>
    function addcart(id,c) {
        $.post("ajax_shopcar.php?act=cart",
            {
                food_id:id,
                oper:c
            },
            function(data,status){
                if(data.code == 200) {
                    $("#num"+id+"").val(data.sum);
                    $("#total_price").html(data.sumPrice);

                    if(data.sumPrice == 0) {
                        $("#cart_2").removeClass("order_button");
                    }else {
                        $("#cart_2").addClass("order_button");
                    }

                }
                else {
                    layer.msg(data.msg);
                    window.location.href = "/login.php";
                }
            },"JSON");
    }
</script>

<!--评价界面内容-->
    <div id="shangjia_assess" class="page-center-box dldetail" style="display: none">
<!--        <div class="pldengji">-->
<!--            <ul>-->
<!--                <li class="cur"><a href="#">好评</a></li>-->
<!--                <li><a href="#">中评</a></li>-->
<!--                <li><a href="#">差评</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <dl class="dealcard">

            <?php foreach ($arr_assinfo as $key=>$valueAssinfo):?>
                <dd class="page-link" style="margin: 5px 5px 5px 5px; ">
                    <div class="dealcard-message box">
                        用户：<?php echo $valueAssinfo['cus_id']?>
                        <span style="float: right">
                            <?php if( $valueAssinfo['assess_type'] == 0) {?>
                                <?php echo "好评"?>
                            <?php }else if( $valueAssinfo['assess_type'] == 1) {?>
                                <?php echo "中评"?>
                            <?php }else if( $valueAssinfo['assess_type'] == 2) {?>
                                <?php echo "差评"?>
                            <?php }?>
                        </span>
                    </div>
                    <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>

                    <div class="dealcard-message box" style="margin-top: 5px;">
                        <span style="color: #0EC0A8">评价内容：<?php echo $valueAssinfo['assess_info']?></span>
                        <div style="border: 0.5px  solid #EFF2F4; margin: 5px 5px;"></div>
                    </div>

                    <div class="dealcard-message box" >
                        日期: <?php echo date("Y-m-d H:i", $valueAssinfo['assess_time']);?>
                    </div>

                </dd>
            <?php endforeach; ?>


<!--            <dd class="page-link">-->
<!--                <a>-->
<!--                    <div class="dealcard-block-left">-->
<!--                        <div class="brand">瑾晨0212<em class="location-right">2016-11-11</em></div>-->
<!--                        <div class="title ">-->
<!--                                            <span class="star">-->
<!--                                                <i class="full"></i>-->
<!--                                                <i class="full"></i>-->
<!--                                                <i class="full"></i>-->
<!--                                                <i class="half"></i>-->
<!--                                                <i></i>-->
<!--                                            </span>-->
<!--                        </div>-->
<!--                        <div class="price">-->
<!--                            <span>配送速度快质量好配送速度快质量好配送速度快质量好配送速度快质量好</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </dd>-->

        </dl>
    </div>

    <div id="shangjia_detail" class="page-center-box dldetail" style="display: none">
        <div class="detailNr">
            <h3>商家信息</h3>
            <div class="nr mb10">
                <p>店铺地址：<?php echo $arr_selinfo['sel_address']?></p>
                <p>店铺联系电话：<?php echo $arr_selinfo['sel_tel']?></p>
                <p>店铺特色：<?php echo $arr_selinfo['sel_info']?></p>
            </div>
        </div>
    </div>

</body>
</html>


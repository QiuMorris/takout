<?php
session_start();

include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';


$mod_food = new MysqliModel('food');
$arr_food = $mod_food->select();
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
        <!--店铺头部开始-->
        <div class="store-header clearfix">
            <div class="tu">
                <span></span>
                <img src="img/food.PNG"/>
            </div>
            <div class="right fl">
                <p>正新鸡排大洋百货店</p>
            </div>
            <div class="tit">
                <span></span>
                <p>欢迎光临！本店新品上市，欢迎品尝！</p>
            </div>
        </div>
        <!--店铺头部结束-->
        <ul id="shangjia_tab">
            <li>
                <a href="delivery-list.php" class="on">菜单</a>
            </li>
            <li>
                <a href="dlplun.php">评价</a>
            </li>
            <li>
                <a href="dldetail.php">详情</a>
            </li>
        </ul>
        <!--头部切换结束-->
        <div id="ele" class="shop_page page-center-box">
            <div class="frame-set-left">
                <ul>
                    <li class="active" rel="all">
                        <a href="javascript:void(0);">全部分类</a>
                    </li>
                    <li rel="cate_1">
                        <a href="javascript:void(0);">饭食类</a>
                    </li>
                    <li rel="cate_2">
                        <a href="javascript:void(0);">自助餐</a>
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
                <p>(30元起送)</p>
            </div>
            <div id="cart_2" class="disable">
                <a href="update_order.php" style="color:#FFFFFF;">确认下单</a>
            </div>
        </footer>
    </div>
</div>

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
                    layer.msg(data.msg);
                }
                else {
                    layer.msg(data.msg)
                }
            },"JSON");
    }
</script>

</body>
</html>


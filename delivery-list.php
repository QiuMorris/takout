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
                <div class="list-have-pic list-have-pictwo">
                    <div class="eleList_box">
                        <div class="list-box cate_2">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">鱼香肉丝</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">11.5元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="11.5" did="2" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="11.5" did="2" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_1">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">毛豆炸酱</p>
                                <p class="overflow_clear">在线支付满20元立减5元</p>
                                <p class="price fontcl1">15元</p>
                                <div class="num-input">
                                    <div class="btn jq_jian" val="15" did="1" onclick="dec(this);">-</div>
                                    <div class="input"><input type="text" class="ordernum" readonly="readonly" value="0"></div>
                                    <div class="btn active jq_addcart" val="15" did="1" onclick="addcart(this);">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-cart eleFooter-cart" id="footer">
            <div class="cart">
                <a id="cart_1" href="javascript:void(0);">
                    <div class="cart-num" id="num">2</div>
                </a>
            </div>
            <div class="price">￥<span id="total_price">0.00</span>
                <p>(30元起送,配送费:￥2)</p>
            </div>
            <div id="cart_2" class="disable">
                <a href="wmai.php" style="color:#FFFFFF;">确认下单</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>


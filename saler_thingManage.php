<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商品管理</title>
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
    <link rel="stylesheet" href="layui/css/modules/layer/default/layer.css">
    <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script src="layui/lay/modules/layer.js"></script>
    <script>
        function showmsg() {
            layer.open({
                title: '删除商品'
                ,content: '确定删除此商品？',

                yes:function(index){
                    layer.close(index);
                }
            });
        }

    </script>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a class="fl fanhui" href="saler_homepage.php"><img src="img/backw.png" width="20" ></a>
    <div class="header-tit">
        菜单管理
    </div>
</header>

<div id="container">
    <div id="main">
        <!--店铺头部开始-->
        <div class="store-header clearfix">
            <div class="tu">
<!--                <span></span>-->
                <img src="img/tou.png"/>
            </div>
            <div class="right fl">
                <p>麦当劳（龙头寺公园店）</p>
                <p class="htel">欢迎回来：18324138828</p>
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
                <a class="on">菜单</a>
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
                                <p class="price fontcl1">11.5元</p>
                                <br/>
                                <div class="num-input">
<!--                                    <input type="button" onclick="window.location.href('thing_setup.php')">-->
                                    <button><a href="thing_setup.php">编辑</a></button>
                                    <button value="下架" onclick="showmsg()">下架</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-box cate_2">
                            <div class="list-img">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="list-content">
                                <p class="overflow_clear">鱼香肉丝</p>
                                <p class="price fontcl1">11.5元</p>
                                <br/>
                                <div class="num-input">
                                    <button><a href="thing_setup.php">编辑</a></button>
                                    <button value="下架" onclick="showmsg()">下架</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


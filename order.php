<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
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
    <script src="js/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="center.php"></a>
    <div class="header-tit">
        团购订单
    </div>
</header>

<div id="container">
    <div id="main">
        <div class="notice">
            <div class="tab-hd tab-hdtwo">
                <ul class="tab-nav">
                    <li>全部</li>
                    <li>待付款</li>
                    <li>待评价</li>
                    <li>退款/售后</li>
                </ul>
            </div>
            <div class="tab-bd">
                <div class="tab-pal">
                    <dl class="list listtwo list-in">
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">未付款</p>
                                <a href="pay.php" class="fr">付款</a>
                            </div>
                        </dd>
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">已取消</p>
                                <a href="tuan-detail.html" class="fr">再次购买</a>
                            </div>
                        </dd>
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">已完成</p>
                                <a href="tuan-detail.html" class="fr">再次购买</a>
                                <a href="assess.php" class="fr">评价</a>
                            </div>
                        </dd>
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">已退款</p>
                                <a href="tuikuan.html" class="fr">查看钱款</a>
                            </div>
                        </dd>

                    </dl>
                </div>
                <div class="tab-pal">
                    <dl class="list listtwo list-in">
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">未付款</p>
                                <a href="torder.html" class="fr">付款</a>
                            </div>
                        </dd>

                    </dl>
                </div>

                <div class="tab-pal">
                    <dl class="list listtwo list-in">
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">已完成</p>
                                <a href="tuan-detail.html" class="fr">再次购买</a>
                                <a href="assess.php" class="fr">评价</a>
                            </div>
                        </dd>

                    </dl>
                </div>
                <div class="tab-pal">
                    <dl class="list listtwo list-in">
                        <dd>
                            <div class="orderbh clearfloat box-s">
                                订单编号20164546151515
                            </div>
                            <a href="#" class="react">
                                <div class="dealcard dealcardtwo clearfloat">
                                    <div class="dealcard-img imgbox">
                                        <img src="img/54b9cae9d6bc4.jpg">
                                    </div>
                                    <div class="dealcard-block-right dealcard-block-righttwo">
                                        <div class="dealcard-brand dealcard-brandtwo single-line">
                                            <span class="poi-name icon-count-3">这里是商品名称这里是商品名称</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">数量：120</span>
                                        </div>
                                        <div class="price pricetwo">
                                            <span class="address">总价：</span>
                                            <span class="strong">¥125</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="order-bottom clearfloat box-s">
                                <p class="fl">已退款</p>
                                <a href="tuikuan.html" class="fr">查看钱款</a>
                            </div>
                        </dd>

                    </dl>
                </div>
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
        <a href="rush.php">
            <div class="icon i-2"><img src="img/recomnd.png" width="25"></div>
            <p>推荐</p>
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
<script src="js/jquery.SuperSlide.2.1.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(".notice").slide({ titCell:".tab-hd li", mainCell:".tab-bd",delayTime:0 });
</script>
</html>


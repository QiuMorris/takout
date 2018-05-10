<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>热门商家推荐</title>
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img href="index.php" src="img/back.png" width="20"></a>
    <div class="header-tit">
        热门商家
    </div>
</header>
<div id="container">
    <div id="main">
        <div class="clearfloat">
            <dl class="list listtwo list-in">
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">烧烤</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">火锅</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">杭帮菜</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">鲁菜</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">粤菜</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">川菜</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
                <dd>
                    <a href="farm-detail.html" class="react">
                        <div class="dealcard dealcardtwo">
                            <div class="dealcard-img imgbox">
                                <img src="img/54b9cae9d6bc4.jpg">
                            </div>
                            <div class="dealcard-block-right dealcard-block-righttwo">
                                <div class="dealcard-brand dealcard-brandtwo single-line">
                                    <span class="poi-name icon-count-3">小红厨土菜馆</span>
                                </div>
                                <div class="rank">
											<span class="stars starstwo fl">
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star"></i>
				                                <i class="text-icon icon-star-gray"></i>
				                                <em class="star-text">4分</em>
				                           </span>
                                </div>
                                <div class="price">
                                    <span class="address">重庆高新区</span>
                                    <span class="line-right address fontcl2">甜点</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </dd>
            </dl>
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
<script src="js/other.js" type="text/javascript" charset="utf-8"></script>
</html>


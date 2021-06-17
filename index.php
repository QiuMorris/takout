<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';


header('Location: /tuan.php');
exit;//判断登录


$mod_seller = new MysqliModel('seller');
$arr_selinfo = $mod_seller->select();
//var_dump($arr_selinfo);
//exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>首页</title>
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
<header class="hasManyCity" id="header">
<!--    <div id="" class="cityBtn">重庆</div>-->
    <h3 style="color: white; line-height: 50px;text-align: center" >欢迎来到食刻外卖</h3>


</header>
<div id="container">
    <div id="main">
        <div id="scroller">
<!--            <section class="banner">-->
<!--                <div class="swiper-container swiper-container1">-->
<!--                    <div class="swiper-wrapper bannerwidth">-->
<!--                        <div class="swiper-slide swiper-slide-duplicate">-->
<!--                            <a href="#">-->
<!--                                <img src="img/55dec2a5c2fa3.png">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="swiper-slide">-->
<!--                            <a href="#">-->
<!--                                <img src="img/55dec2a5c2fa3.png">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="swiper-slide swiper-slide-duplicate">-->
<!--                            <a href="#">-->
<!--                                <img src="img/55dec2a5c2fa3.png">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="swiper-slide">-->
<!--                            <a href="#">-->
<!--                                <img src="img/55dec2a5c2fa3.png">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="swiper-pagination swiper-pagination1">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->

            <section class="slider">
                <div class="swiper-container swiper-container2">
                    <div class="swiper-wrapper tuangouwidth">
                        <div class="swiper-slide swiper-slide-duplicate">
                            <ul class="icon-list">
                                <li class="icon">
                                    <a href="tuan.php">
												<span class="icon-circle">
													<img src="img/a1.png">
												</span>
                                        <span class="icon-desc">美食</span>
                                    </a>
                                </li>
                                <li class="icon">
                                    <a href="tuan.php">
												<span class="icon-circle">
													<img src="img/a2.png">
												</span>
                                        <span class="icon-desc">果蔬生鲜</span>
                                    </a>
                                </li>
                                <li class="icon">
                                    <a href="rush.html">
												<span class="icon-circle">
													<img src="img/a3.png">
												</span>
                                        <span class="icon-desc">下午茶</span>
                                    </a>
                                </li>
                                <li class="icon">
                                    <a href="indiana.html">
												<span class="icon-circle">
													<img src="img/a4.png">
												</span>
                                        <span class="icon-desc">麻辣烫</span>
                                    </a>
                                </li>




                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>



                <!--专享推荐-->
                <div class="sy_title mb10">
                    <span class="left">热门推荐</span>
<!--                    <a href="#" class="fr morethree">更多&gt;&gt;</a>-->
                </div>
                <div class="sy_recmd">
                    <div class="sy_recmd_list_box">
                        <ul>
                            <li class="sy_recmd_list">
                                <div class="box">
                                    <div class="pub_img">
                                        <a href=""><img src="img/KFC.png" width="165" height="120"></a>
                                    </div>
                                    <div class="pub_wz">
                                        <h3 class="overflow_clear"><a href="#">肯德基</a></h3>
                                        <div class="nr_box">
<!--                                            <p class="fl fontcl2">¥25</p>-->
                                            <span class="fl black9">[优惠活动]</span>
<!--                                            <p class="fr price fontcl2"><span class="black9">已售50</span></p>-->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sy_recmd_list">
                                <div class="box">
                                    <div class="pub_img">
                                        <a href="mall-detail.html"><img src="img/thumb_543ba5688cb7b.jpg" width="145" height="145"></a>
                                    </div>
                                    <div class="pub_wz">
                                        <h3 class="overflow_clear"><a href="#">喜来登饭店</a></h3>
                                        <div class="nr_box">
<!--                                            <p class="fl fontcl2">¥25</p>-->
                                            <span class="fl black9">[优惠活动]</span>
<!--                                            <p class="fr price fontcl2"><span class="black9">已售50</span></p>-->
                                        </div>
                                    </div>
                                </div>
                            </li>



                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--专享推荐end-->
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

</body>
<script src="js/other.js" type="text/javascript" charset="utf-8"></script>
</html>

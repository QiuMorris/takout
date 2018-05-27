<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>团购</title>
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20" href="index.php"></a>
    <div class="header-tit">
        所有店铺
    </div>
</header>
<!-- screening -->
<div class="screening">
    <ul>
        <li class="Brand">全部分类</li>
        <li class="Regional">全城</li>
        <li class="Sort">智能排序</li>
    </ul>
</div>
<!-- End screening -->
<!-- Category -->
<div class="Category-eject">
    <ul class="Category-w" id="Categorytw">
        <li onclick="Categorytw(this)">全部品牌</li>
        <li onclick="Categorytw(this)">奥迪</li>
        <li onclick="Categorytw(this)">丰田</li>
        <li onclick="Categorytw(this)">本田</li>
        <li onclick="Categorytw(this)">大众</li>
        <li onclick="Categorytw(this)">别克</li>
        <li onclick="Categorytw(this)">标志</li>
        <li onclick="Categorytw(this)">东风悦达起亚</li>
        <li onclick="Categorytw(this)">东风</li>
        <li onclick="Categorytw(this)">奔驰</li>
        <li onclick="Categorytw(this)">玛莎拉蒂</li>
        <li onclick="Categorytw(this)">保时捷</li>
        <li onclick="Categorytw(this)">广汽传祺</li>
    </ul>
    <ul class="Category-t" id="Categoryt">
        <li onclick="Categoryt(this)">奥迪A6</li>
        <li onclick="Categoryt(this)">奥迪A6L</li>
        <li onclick="Categoryt(this)">奥迪A4</li>
        <li onclick="Categoryt(this)">奥迪A4L</li>
        <li onclick="Categoryt(this)">奥迪A5</li>
        <li onclick="Categoryt(this)">奥迪A8</li>
        <li onclick="Categoryt(this)">奥迪A8L</li>
        <li onclick="Categoryt(this)">奥迪A3</li>
        <li onclick="Categoryt(this)">奥迪Q5</li>
        <li onclick="Categoryt(this)">奥迪Q7</li>
        <li onclick="Categoryt(this)">奥迪TT</li>
        <li onclick="Categoryt(this)">奥迪R8</li>
    </ul>
    <ul class="Category-s" id="Categorys">
        <li onclick="Categorys(this)">发动机(/进排气系统/燃油系统/冷却系统等)</li>
        <li onclick="Categorys(this)">变速箱</li>
        <li onclick="Categorys(this)">离合器</li>
        <li onclick="Categorys(this)">转向</li>
        <li onclick="Categorys(this)">制动</li>
        <li onclick="Categorys(this)">传动/前后桥</li>
        <li onclick="Categorys(this)">悬挂/车架/车厢</li>
        <li onclick="Categorys(this)">轮胎/钢圈/轮毂</li>
        <li onclick="Categorys(this)">暖风/柴暖/空调系统</li>
        <li onclick="Categorys(this)">汽车电器/电子/传感器</li>
        <li onclick="Categorys(this)">汽车电脑/电子控制单元系统</li>
        <li onclick="Categorys(this)">汽车光电/汽车影音/电子防盗系统</li>
        <li onclick="Categorys(this)">驾驶室/装饰件</li>
        <li onclick="Categorys(this)">轴承/密封件/橡胶件/标准件</li>
        <li onclick="Categorys(this)">汽车润滑/油/脂/液/汽车用品</li>
        <li onclick="Categorys(this)">汽保工具/设备工具/维修设备</li>
        <li onclick="Categorys(this)">液压件/齿轮齿件/挂车/工程机专用件</li>
        <li onclick="Categorys(this)">其他</li>
    </ul>
</div>
<!-- End Category -->
<!-- grade -->
<div class="grade-eject">
    <ul class="grade-w" id="gradew">
        <li onclick="grade1(this)">哈尔滨</li>
        <li onclick="grade1(this)">全国</li>
        <li onclick="grade1(this)">北京</li>
        <li onclick="grade1(this)">天津</li>
        <li onclick="grade1(this)">河北</li>
        <li onclick="grade1(this)">山西</li>
        <li onclick="grade1(this)">内蒙古</li>
        <li onclick="grade1(this)">辽宁</li>
        <li onclick="grade1(this)">吉林</li>
        <li onclick="grade1(this)">黑龙江</li>
        <li onclick="grade1(this)">上海</li>
        <li onclick="grade1(this)">江苏</li>
        <li onclick="grade1(this)">山东</li>
        <li onclick="grade1(this)">河南</li>
        <li onclick="grade1(this)">湖北</li>
        <li onclick="grade1(this)">湖南</li>
        <li onclick="grade1(this)">广东</li>
        <li onclick="grade1(this)">广西</li>
        <li onclick="grade1(this)">海南</li>
    </ul>
    <ul class="grade-t" id="gradet">
        <li onclick="gradet(this)">全河北</li>
        <li onclick="gradet(this)">石家庄</li>
        <li onclick="gradet(this)">唐山</li>
        <li onclick="gradet(this)">秦皇岛</li>
        <li onclick="gradet(this)">邢台</li>
        <li onclick="gradet(this)">保定</li>
        <li onclick="gradet(this)">张家口</li>
        <li onclick="gradet(this)">承德</li>
        <li onclick="gradet(this)">沧州</li>
        <li onclick="gradet(this)">廊坊</li>
        <li onclick="gradet(this)">衡水</li>
    </ul>
    <ul class="grade-s" id="grades">
        <li onclick="grades(this)">全秦皇岛</li>
        <li onclick="grades(this)">海港区</li>
        <li onclick="grades(this)">山海关区</li>
        <li onclick="grades(this)">北戴河区</li>
        <li onclick="grades(this)">青龙满族自治区</li>
        <li onclick="grades(this)">昌黎县</li>
        <li onclick="grades(this)">抚宁县</li>
        <li onclick="grades(this)">卢龙县</li>
        <li onclick="grades(this)">其他区</li>
        <li onclick="grades(this)">经济技术开发区</li>
    </ul>
</div>
<!-- End grade -->
<!-- Category -->
<div class="Sort-eject Sort-height">
    <ul class="Sort-Sort" id="Sort-Sort">
        <li onclick="Sorts(this)">智能排序</li>
        <li onclick="Sorts(this)">离我最近</li>
        <li onclick="Sorts(this)">好评优先</li>
        <li onclick="Sorts(this)">最新发布</li>
        <li onclick="Sorts(this)">人气优先</li>
        <li onclick="Sorts(this)">价格最低</li>
        <li onclick="Sorts(this)">价格最高</li>
    </ul>
</div>
<!-- End Category -->
<div id="container">
    <div id="main">
        <div class="guess-like">
            <dl class="list">
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="delivery-list.php" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[观音桥]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">9.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[宿州路]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[宿州路]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[观音桥]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[解放碑]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[解放碑]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd>
                    <dl class="list">
                        <dd>
                            <a href="tuan-detail.html" class="react">
                                <div class="dealcard">
                                    <div class="dealcard-img imgbox">
                                        <span></span>
                                        <img src="img/thumb_543ba5688cb7b.jpg"/>
                                    </div>
                                    <div class="dealcard-block-right">
                                        <div class="dealcard-brand single-line">锅里添香美食涮烤自助餐厅</div>
                                        <div class="title text-block">[解放碑]单人自助中餐</div>
                                        <div class="price">
                                            <span class="strong">49.9</span>
                                            <span class="strong-color">元起</span>
                                            <span class="tag">多优惠+</span>
                                            <span class="line-right">
                                                已售50293
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </dd>
                    </dl>
                </dd>
                <dd class="db">
                    <a class="react " href="#">
                        <div class="moreone">加载更多</div>
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
<script src="js/other.js" type="text/javascript"></script>
</html>


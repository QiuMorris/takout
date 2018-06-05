<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

if(!$_SESSION['user'])
{
    header('Location: /login.php');//判断登录
}

$mod_customer = new MysqliModel('customer');
$cus_exephoto = $mod_customer->where(array('cus_id'=>$_SESSION['user']['cus_id']))->selectOne();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心</title>
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
    <link rel="stylesheet" href="layui/css/layui.css" media="all">

    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/mui.min.js"></script>
    <script src="js/others.js"></script>
    <script type="text/javascript" src="js/hmt.js" ></script>
    <script src="slick/slick.js" type="text/javascript" ></script>
<!--    <link rel="stylesheet" href="css/swiper.min.css">-->
    <script src="layui/layui.js"></script>

    <style>
        .to{width:80px;height:80px;border-radius:80px}
    </style>

    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#select_photo' //绑定元素
                ,url: '/ajax_user.php?act=select_photo' //上传接口
                ,done: function(data){
                    //上传完毕回调
                    if(data.code == 200) {
                        layer.msg(data.msg);
                        //    console.log(data.msg);
                        location.reload();
                    }
                    else {
                        layer.msg(data.msg);
                    }
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });
    </script>

</head>
<body>
<!--header star-->
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20"></a>
    <div class="header-tit">
        会员中心
    </div>
    <a href="setup.html" class="fr shoucang sousuo"><img src="img/more.png" width="20"></a>

</header>
<!--header end-->
<div id="container">
    <div id="main">
        <div class="warp clearfloat">
            <div class="h-top clearfloat box-s">
                <div class="clearfloat fl">
                    <?php if($cus_exephoto['cus_photo']) {?>
                       <img class="to" src="<?php echo $cus_exephoto['cus_photo']?>" id="select_photo" width="20"/>
                    <?php } else {?>
                        <img class="to" src="img/10.png" id="select_photo" width="20"/>
                    <?php }?>
                </div>

                <div class="content clearfloat fl">
                    <p class="hname"><?php echo $_SESSION['user']['cus_name']?> </p>
                    <p class="htel">欢迎回来</p>
<!--                    --><?php //echo $_SESSION['user']['cus_tel']?>
                </div>
            </div>

            <div class="cashlist clearfloat">
                <ul>
                    <li class="box-s" style="display: none">
                        <a href="#">
                            <p class="fl">浏览历史</p>
                            <i class="iconfont icon-jiantou1 fr"></i>
                        </a>
                    </li>

                    <li class="box-s">
                        <a href="order.php">
                            <p class="fl">我的订单</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s">
                        <a href="address.php">
                            <p class="fl">我的地址</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s" style="display: none">
                        <a href="setup.php">
                            <p class="fl">账户设置</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
                    <li class="box-s">
                        <a href="store_in.php">
                            <p class="fl">商家入驻</p>
                            <img src="/img/next.png" width="20" style="margin-left: 250px">
                        </a>
                    </li>
<!--                    <li class="box-s">-->
<!--                        <a href="saler_homepage.php">-->
<!--                            <p class="fl">商家主页</p>-->
<!--                            <img src="/img/next.png" width="20" style="margin-left: 250px">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="box-s">-->
<!--                        <a href="del_setup.php">-->
<!--                            <p class="fl">骑手主页</p>-->
<!--                            <img src="/img/next.png" width="20" style="margin-left: 250px">-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </div>
            <a class="center-btn db ra3" id="login_out">退出登录</a>
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


<script>
    $(document).ready(function(){
        $("#login_out").bind("click",function(){
            // alert(this);
            $.post("ajax_user.php?act=login_out",
                {
                },
                function(data){
                    if(data.code == 200) {
                        window.location.href = "/login.php";
                    }
                    else {
                        layer.msg(data.msg);
                    }
                },"JSON");
        });
    });
</script>

</html>

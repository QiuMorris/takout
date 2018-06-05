<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

if(!$_SESSION['user'])
{
    header('Location: /login.php');
}

$mod_seller = new MysqliModel('seller');
$sel_exephoto = $mod_seller->where(array('sel_id'=>$_SESSION['user']['sel_id']))->selectOne();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>我的店铺</title>
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
    <script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
    <script src="js/mui.min.js"></script>
    <script src="js/others.js"></script>
    <script type="text/javascript" src="js/hmt.js" ></script>
    <script src="slick/slick.js" type="text/javascript" ></script>

    <link rel="stylesheet" href="css/swiper.min.css">
    <script src="js/swiper.jquery.min.js"></script>
    <script src="layui/layui.js"></script>

    <style>
        .to{width:80px;height:80px;border-radius:80px}
    </style>

    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#sel_photo' //绑定元素
                ,url: '/ajax_seller.php?act=upStoreuser' //上传接口
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
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/backw.png" width="20"></a>
    <div class="header-tit">
        我的店铺
    </div>
</header>
<!--header end-->
<div id="container">
    <div id="main">
        <div class="warp clearfloat">
            <div class="h-top clearfloat box-s">
                <div class="clearfloat fl">
                    <?php if($sel_exephoto['sel_photo']) {?>
                        <img class="to" src="<?php echo $sel_exephoto['sel_logo']?>" id="sel_photo" width="20"/>
                    <?php } else {?>
                        <img class="to" src="img/10.png" id="sel_photo" width="20"/>
                    <?php }?>
                </div>
                <div class="content clearfloat fl">
                    <p class="hname"><?php echo $_SESSION['user']['sel_account']?>&nbsp;</p>
                    <p class="hname">欢迎您！</p>

                </div>
            </div>
            <div class="cash clearfloat">
                <div class="shang clearfloat">
                    <ul>
                        <li>
                            <a href="saler_order.php">
                                <img src="img/sorder.png" width="30" height="30"/>
                                <span>外卖订单</span>
                            </a>
                        </li>
                        <li>
                            <a href="saler_thingManage.php">
                                <img src="img/smanage.png" width="30" height="30"/>
                                <span>商品管理</span>
                            </a>
                        </li>
<!--                        <li>-->
<!--                            <a href="store_info.php">-->
<!--                                <img src="img/group3.png" width="30" height="30"/>-->
<!--                                <span>门店信息</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li>
                            <a href="lookassess.php">
                                <img src="img/pingjia.png" width="30" height="30"/>
                                <span>用户评价</span>
                            </a>
                        </li>
                        <li>
                            <a href="saler_wallet.php">
                                <img src="img/wallet.png" width="30" height="30"/>
                                <span>我的钱包</span>
                            </a>
                        </li>
                        <li>
                            <a href="store_in.php">
                                <img src="img/group3.png" width="30" height="30"/>
                                <span>我的店铺</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <a id="sel_logout" class="center-btn db ra3">退出登录</a>
        </div>
    </div>
</div>


</body>

<script>
    $(document).ready(function(){
        $("#sel_logout").bind("click",function(){
            // alert(this);
            $.post("ajax_seller.php?act=sel_logout",
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


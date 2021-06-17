<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';


$mod_sell_photo = new MysqliModel('seller');
$sel_exephoto = $mod_sell_photo->where(array('sel_id'=>$_SESSION['user']['sel_id']))->selectOne();
//var_dump($sel_exephoto);
//exit;
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商家入驻</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/mui.min.css"/>
    <link rel="stylesheet" href="layui/css/layui.css" media="all">
    <link rel="stylesheet" href="css/reset.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script src="layui/layui.js"></script>
    <style>
        .to{width:80px;height:80px;border-radius:100px}
    </style>

    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#upStoreuser' //绑定元素
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

            var uploadInst1 = upload.render({
                elem: '#upStore1' //绑定元素
                ,url: '/ajax_seller.php?act=upStore1' //上传接口
                ,done: function(data){
                    layer.msg(data.msg);

                    location.reload();
                }
                ,error: function(data){
                    layer.msg(data.msg);
                }
            });

            var uploadInst3 = upload.render({
                elem: '#upStore2' //绑定元素
                ,url: '/ajax_seller.php?act=upStore2' //上传接口
                ,done: function(data){
                    layer.msg(data.msg);
                    location.reload();
                }
                ,error: function(data){
                    layer.msg(data.msg);

                }
            });
        });
    </script>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a class="fl fanhui" href="javascript:history.go(-1)"><img src="img/backw.png" width="20" ></a>
    <div class="header-tit">
        商家入驻
    </div>
</header>
<div id="container">
    <div id="main">
        <div class="warp warpthree clearfloat">
            <div class="h-top h-toptwo clearfloat box-s">
                <?php if($sel_exephoto['sel_logo']) {?>
                    <p class="tu"><img class="to" id="upStoreuser" src="<?php echo $sel_exephoto['sel_logo']?>" width="20"/></p>
                <?php } else {?>
                    <p class="tu"><img class="to" id="upStoreuser" src="img/10.png" width="20"/></p>
                <?php }?>
<!--                <img class="to" src="--><?php //echo $sel_exephoto['sel_logo']?><!--" id="upStoreuser"/></p>-->
<!--                <p class="nr">选择头像</p>-->
            </div>
            <div class="apply clearfloat">
                <div class="top clearfloat">
                    <ul>
                        <?php if($sel_exephoto['sel_license']){ ?>
                            <img id="upStore1" src="<?php echo $sel_exephoto['sel_license'] ?>" width="162" height="122" />';
                        <?php }else{?>
                        <li class="fl ra3" id="upStore1">
                            <img src="img/jia.png" width="30">
                            <p>添加营业执照</p>
                        </li>
                        <?php }?>
                        <?php if($sel_exephoto['sel_photo']){ ?>
                            <img id="upStore2" src="<?php echo $sel_exephoto['sel_photo'] ?>" width="162" height="122" />';
                        <?php }else{?>

                        <li class="fr ra3" id="upStore2">
                            <img src="img/jia.png" width="30">
                            <p>添加法人身份证</p>
                        </li>
                        <?php }?>
                    </ul>
                </div>

                <div class="bottom clearfloat">
                    <ul>
                        <li>
                            <div class="box-s clearfloat">
                                <p>商家名称：</p>
                                <input type="text" id="sel_name" value="<?php echo $sel_exephoto['sel_name'] ?>" placeholder="请输入商家名称" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>商家地址：</p>
                                <input type="text" id="sel_address" value="<?php echo $sel_exephoto['sel_address'] ?>" placeholder="请输入商家地址" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>联系电话：</p>
                                <input type="text" id="sel_tel" value="<?php echo $sel_exephoto['sel_tel'] ?>" placeholder="请输入店铺联系电话" />
                            </div>
                        </li>

                        <li>
                            <div class="box-s clearfloat">
                                <p>商家描述：</p>
                                <input type="text" id="sel_info" value="<?php echo $sel_exephoto['sel_name'] ?>" placeholder="请输入商家描述" />
                            </div>
                        </li>
                    </ul>
                </div>

                <a class="center-btn db ra3" id="s_updateStore">提交</a>
            </div>
        </div>
    </div>
</div>
</body>

<script>
    $(document).ready(function(){
        $("#s_updateStore").click(function(){
            var s_name=$("#sel_name").val();
            var s_address=$("#sel_address").val();
            var s_tel=$("#sel_tel").val();
            var s_info=$("#sel_info").val();
            // alert(mob.length);

            if(s_name.length < 1 || s_address.length <1 || s_tel.length <1 || s_info.length <1) {
                layer.msg('对不起，您的店铺信息输入不完全！');
                return ;
            }


            $.post("ajax_seller.php?act=updateStore",
                {
                    sel_name:s_name,
                    sel_address:s_address,
                    sel_tel:s_tel,
                    sel_info:s_info
                },
                function(data,status){
                    if(data.code == 200) {
                        layer.msg('注册成功!');
                        window.location.href = "/saler_homepage.php";
                    }
                    else {
                        layer.msg(data.msg);
                    }
                },"JSON");
        });
    });
</script>
</html>

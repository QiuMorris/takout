<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_sell_photo = new MysqliModel('seller');
$sel_exephoto = $mod_sell_photo->where(array('cus_id'=>$_SESSION['user']['cus_id']))->selectOne();
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
    <script src="js/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script src="layui/layui.js"></script>
    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '' //上传接口
                ,done: function(res){
                    //上传完毕回调
                }
                ,error: function(){
                    //请求异常回调
                }
            });

            var uploadInst1 = upload.render({
                elem: '#test2' //绑定元素
                ,url: '/upload/' //上传接口
                ,done: function(res){
                    //上传完毕回调
                }
                ,error: function(){
                    //请求异常回调
                }
            });

            var uploadInst3 = upload.render({
                elem: '#test3' //绑定元素
                ,url: '/upload/' //上传接口
                ,done: function(res){
                    //上传完毕回调
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });
    </script>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a class="fl fanhui" href="saler_homepage.php"><img src="img/backw.png" width="20" ></a>
    <div class="header-tit">
        我的店铺信息
    </div>
</header>
<div id="container">
    <div id="main">
        <div class="warp warpthree clearfloat">
            <div class="h-top h-toptwo clearfloat box-s">
                <p class="tu"><img src="img/touxiang.png" id="test3"/></p>
                <p class="nr">头像</p>
            </div>
            <div class="apply clearfloat">
                <div class="top clearfloat">
                    <ul>
                        <li class="fl ra3" id="test1">
                            <img src="img/jia.png"  width="30">
                            <p>更新营业执照</p>
                        </li>
                        <li class="fr ra3" id="test2">
                            <img src="img/jia.png" width="30">
                            <p>更新法人身份证</p>
                        </li>
                    </ul>
                </div>
                <div class="bottom clearfloat">
                    <ul>
                        <li>
                            <div class="box-s clearfloat">
                                <p>商家名称：</p>
                                <input type="text" id="" value="" placeholder="" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>商家地址：</p>
                                <input type="text" id="" value="" placeholder="" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>联系电话：</p>
                                <input type="text" id="" value="" placeholder="" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>经验种类：</p>
                                <input type="text" id="" value="" placeholder="" />
                            </div>
                        </li>
                        <li>
                            <div class="box-s clearfloat">
                                <p>商家描述：</p>
                                <input type="text" id="" value="" placeholder="" />
                            </div>
                        </li>
                    </ul>
                </div>

                <a href="#" class="center-btn db ra3">提交修改</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>


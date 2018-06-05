<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_food = new MysqliModel('food');
$sel_foodlist = $mod_food->where(array('food_id'=>$_GET['food_id']))->selectOne();
//var_dump($sel_foodlist);
//exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>菜品信息管理中心</title>
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
    <script src="js/hmt.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="layui/layui.js"></script>
    <script src="js/swiper.min.js" type="text/javascript" ></script>
    <script src="js/fastclick.js"></script>
    <script src="js/mui.min.js"></script>
    <script type="text/javascript" src="js/hmt.js" ></script>
    <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="layui/layui.js"></script>
    <link rel="stylesheet" href="layui/css/layui.css" media="all">

    <script>
        layui.use('upload', function(){
            var upload = layui.upload;

            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '/ajax_seller.php?act=updateThingjpg' //上传接口
                ,done: function(data){
                    //上传完毕回调
                    if(data.code == 200) {
                        layer.msg(data.msg);
                        //    console.log(data.msg);
                        if(data.food_id >0){
                            window.location.href='/thing_add.php?food_id='+data.food_id;
                        }
                        else{
                            location.reload();
                        }
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

    <style>
        .to{width:45px;height:45px;border-radius:80px}
    </style>

</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a class="fl fanhui" href="saler_thingManage.php"><img src="img/backw.png" width="20" ></a>
    <div class="header-tit">
        菜品信息管理中心-添加商品
    </div>
</header>
<div id="container" style="margin-top: 50px">
    <div id="main">
        <div class="plist clearfloat data">
            <ul>
                <li class="clearfloat touxiang">
                    <a href="#">
                        <p class="fl">菜品照片</p>

                        <div class="clearfloat fr">
                            <?php if($sel_foodlist['food_jpg']) {?>
                                <i class="fr"> <img class="to" src="<?php echo $sel_foodlist['food_jpg']?>" id="test1" width="20"/></i>
                            <?php } else {?>
                                <i class="fr"> <img class="to" id="test1" src="img/add.png" width="20"/></i>
                            <?php }?>
                        </div>

                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">菜品名称</p>
                        <input type="text" class="fr shuru" name="food_name" id="food_name" value="<?php echo $sel_foodlist['food_name']?>" placeholder="请填写商品名称不超过20字" />
                        <input type="hidden" name="food_id" id="food_id" value="<?php echo $sel_foodlist['food_id']?>">
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">价格</p>
                        <input type="text" class="fr shuru" name="food_price" id="food_price" value="<?php echo $sel_foodlist['food_price']?>" placeholder="0"/>
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">库存数量</p>
                        <input type="text" class="fr shuru" name="food_num" id="food_num" value="<?php echo $sel_foodlist['food_num']?>" placeholder="0"/>
                    </a>
                </li>

                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">商品备注</p>
                        <input type="text" class="fr shuru" name="food_note" id="food_note" value="<?php echo $sel_foodlist['food_note']?>" placeholder="1"/>
                    </a>
                </li>
            </ul>
        </div>

        <a id="save_food" class="center-btn db ra3">确定提交</a>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#save_food").click(function(){
            // alert('aaa');
            var food_name=$("#food_name").val();
            var food_price=$("#food_price").val();
            var food_num=$("#food_num").val();
            var food_note=$("#food_note").val();
            var food_id=$("#food_id").val();
            // alert(mob.length);

            if(food_name.length < 1 || food_price.length <1 || food_num.length <1) {
                layer.msg('对不起，菜品信息输入不完全！');
                return ;
            }

            $.post("ajax_seller.php?act=save_food",
                {
                    food_name:food_name,
                    food_price:food_price,
                    food_num:food_num,
                    food_note:food_note,
                    food_id:food_id
                },
                function(data){
                    if(data.code == 200) {
                        layer.msg('菜品信息更新成功!');
                        window.location.href = "/saler_thingManage.php";
                    }
                    else {
                        layer.msg(data.msg);
                    }
                },"JSON");
        });
    });
</script>
</body>


</html>


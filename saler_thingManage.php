<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_food = new MysqliModel('food');
$sel_foodlist = $mod_food->where(array('sel_id'=>$_SESSION['user']['sel_id']))->select();
$mod_seller = new MysqliModel('seller');
$sel_exephoto = $mod_seller->where(array('sel_id'=>$_SESSION['user']['sel_id']))->selectOne();
//var_dump($sel_foodlist);
//exit;
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
    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
    <link href="layui/css/modules/layer/default/layer.css" rel="stylesheet"  />

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
        <div class="store-header clearfix">

                <div class="tu clearfloat fl">
                    <?php if($sel_exephoto['sel_logo']) {?>
                        <img class="to" src="<?php echo $sel_exephoto['sel_logo']?>" id="select_photo" width="80"/>
                    <?php } else {?>
                        <img class="to" src="img/10.png" id="select_photo"/>
                    <?php }?>
                </div>

            <div class="right fl">
                <p></p>
                <p class="htel">欢迎回来：<?php echo $_SESSION['user']['sel_account']?>&nbsp;</p>
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
                        <a href="thing_add.php">添加新品</a>
                    </li>

                </ul>
            </div>
            <div class="frame-set-right">
                <div class="list-have-pic list-have-pictwo">
                    <div class="eleList_box">

                        <?php foreach ($sel_foodlist as $key=>$valuefoodList):?>
                            <div class="list-box cate_2">
                                <div class="list-img">
                                    <img src="<?php echo $valuefoodList['food_jpg']?>">
                                </div>
                                <div class="list-content">
                                    <p class="overflow_clear"><?php echo $valuefoodList['food_name']?></p>
                                    <p class="price fontcl1"><?php echo $valuefoodList['food_price']?></p>
                                    <br/>
                                    <div class="num-input">
    <!--                                    <input type="button" onclick="window.location.href('thing_setup.php')">-->
                                        <button><a href="thing_setup.php?food_id=<?php echo $valuefoodList['food_id']?>">编辑</a></button>

                                            <?php if ($valuefoodList['food_state'] == 0) {?>
                                                <button><a onclick="up_foodState(<?php echo $valuefoodList['food_id']?>)">已下架</a></button>
                                            <?php } else { ?>
                                                <button><a onclick="change_foodState(<?php echo $valuefoodList['food_id']?>)">下架</a></button>
                                            <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function change_foodState(food_id)
    {
        $.post("ajax_seller.php?act=change_foodState",
            {
                food_id:food_id
            },
            function(data){
                if(data.code == 200) {
                    layer.msg('菜品下架成功!');
                    // window.location.href = "/saler_thingManage.php";
                    location.reload();
                }
                else {
                    layer.msg(data.msg);
                }
            },"JSON");
    }

    function up_foodState(food_id)
    {
        $.post("ajax_seller.php?act=up_foodState",
            {
                food_id:food_id
            },
            function(data){
                if(data.code == 200) {
                    layer.msg('菜品上架成功!');
                    // window.location.href = "/saler_thingManage.php";
                    location.reload();
                }
                else {
                    layer.msg(data.msg);
                }
            },"JSON");
    }


</script>

</body>

</html>


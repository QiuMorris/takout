<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';

$mod_seller = new MysqliModel('seller');
$reSel=$mod_seller->where(array('sel_id'=>$_GET['sel_id']))->selectOne();


//var_dump($reSel);
//exit;

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>评价订单</title>
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
    <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>


    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
    <link href="layui/css/modules/layer/default/layer.css" rel="stylesheet"  />
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui"><img src="img/back.png" width="20"></a>
    <div class="header-tit">
        服务评价
    </div>
</header>
<div id="main" class="mui-clearfix" style="margin-top: 50px;">
    <div class="assess clearfloat">
        <div class="top clearfloat box-s">
            <div class="tu fl clearfloat">
                <img src="<?php echo $reSel['sel_logo']?>" width="50" height="50"/>
            </div>
            <div class="pinfen fl clearfloat">
                <p class="tit"><?php echo $reSel['sel_name']?></p>
                <p style="margin-top: 20px"><?php echo $reSel['sel_address']?>店</p>
            </div>
        </div>

        <textarea id="content" name="content" rows="4" class="box-s" placeholder="请写下对本次消费的感受吧，对他人帮助很大哦" ></textarea>
        <input type="hidden" name="sel_id" id="sel_id" value="<?php echo $_GET['sel_id']?>">
        <input type="hidden" name="order_id" id="order_id" value="<?php echo $_GET['order_id']?>">
        <div class="bottom clearfloat box-s fl">
            <p class="ztpinfen" style="color: #0EC0A8">整体评分</p>
            <ul>
                <li>
                    派送速度：
                </li>
                <li>
                    <input type="radio" name="assess" value="0" />好评&nbsp;&nbsp;
                    <input type="radio" name="assess" value="1" />中评&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="assess" value="2" />差评
                </li>
            </ul>

        </div>
    </div>
</div>
<a class="address-add fl ra3" id="sub_ass">
    提交
</a>

<script>
    $(document).ready(function(){
        $("#sub_ass").click(function(){
            var val =$("input[name='assess']:checked").val();
            var content =$("#content").val();
            var sel_id =$("#sel_id").val();
            var order_id =$("#order_id").val();

            $.post("ajax_order.php?act=updateAssess",
                {
                    assess_info:content,
                    assess_type:val,
                    sel_id:sel_id,
                    order_id:order_id
                },
                function(data,status){
                    if(data.code == 200) {
                        layer.msg(data.msg);
                        window.location.href = "/order.php";
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


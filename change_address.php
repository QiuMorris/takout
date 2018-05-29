<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';


$mod_address = new MysqliModel('address');
$arr_address=$mod_address->where(array('id'=>$_GET['id']))->selectOne();  //全部
//var_dump($arr_address);
//exit();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>修改收货地址</title>
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
    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
    <link href="layui/css/modules/layer/default/layer.css" rel="stylesheet"  />
</head>
<body>
<header class="hasManyCity hasManyCitytwo" id="header">
    <a href="javascript:history.go(-1)" class="fl fanhui">
        <img src="img/back.png" width="20" href="address.php"></a>
    <div class="header-tit">
        修改收货人信息
    </div>
    <a id="save_add" class="fr baocun">保存</a>
</header>
<div id="container">
    <div id="main" class="mui-clearfix add-address">
        <div class="plist clearfloat data">
            <ul>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">收货人:</p>
                        <input type="text" class="fr shuru" name="cus_name" id="cus_name" value="<?php echo $arr_address['cus_name']?>" placeholder="请输入收货人姓名" />
                        <input type="hidden" class="fr shuru" name="add_id" id="add_id" value="<?php echo $arr_address['id']?>" />
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">联系电话</p>
                        <input type="text" class="fr shuru" name="cus_tel" id="cus_tel" value="<?php echo $arr_address['cus_tel']?>" placeholder="请输入手机号码" />
                    </a>
                </li>
                <li class="clearfloat">
                    <a href="#">
                        <p class="fl">地址</p>
                    </a>
                </li>
            </ul>
        </div>
        <textarea name="cus_address" id="cus_address" rows="4" placeholder="请填写详细地址，不少于5个字" class="textare box-s"><?php echo $arr_address['cus_address']?></textarea>

        <div class="address-btn clearfloat">
            <span class="szwmr fl">设为默认</span>
            <a href="#" class="toggle toggle--on fr"></a>
            <input type="hidden" name="is_default" id="is_default" value="<?php echo $arr_address['is_default']?>" >
            <!--            <?php echo $arr_address['is_default']?>-->
        </div>
    </div>
</div>
</body>
<!--默认按钮-->
<script type="text/javascript">
    $('.toggle').click(function(e){
        var toggle = this;
        e.preventDefault();
        $(toggle).toggleClass('toggle--on').toggleClass('toggle--off').addClass('toggle--moving');


        if(e.currentTarget.className == "toggle fr toggle--on toggle--moving") {
            $("input[name='is_default']").attr("value", 0);
            // console.log($("input[name='is_default']").val()+"bb");
        }else {
            $("input[name='is_default']").attr("value", 1);
            // console.log($("input[name='is_default']").val()+"aa");
        }
        // console.log(e);

        setTimeout(function(){
            $(toggle).removeClass('toggle--moving');
        }, 200)
    });

    $(document).ready(function(){
        $("#save_add").click(function(){
            var add_id=$("#add_id").val();
            var name=$("#cus_name").val();
            var tel=$("#cus_tel").val();
            var address=$("#cus_address").val();


            if(name.length < 1) {
                layer.msg('用户名不正确！');
                return ;
            }

            if(!(/^1[3|4|5|8|7][0-9]\d{4,8}$/.test(tel))){
                layer.msg("不正确的手机号");
                return;

            }

            if(address.length < 4) {
                layer.msg("地址不完整");
                return;
            }

            $.post("ajax_user.php?act=change_address",
                {
                    id:add_id,
                    cus_name:name,
                    cus_tel:tel,
                    cus_address:address
                },
                function(data){
                    if(data.code == 200) {
                        layer.msg('添加成功!');
                        window.location.href = "/address.php";
                    }
                    else {
                        layer.msg(data.msg);
                    }
                },"JSON");
        });
    });

</script>
</html>


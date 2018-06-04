<?php
session_start();
include_once 'comm/MysqliModel.class.php';
include_once 'comm/dbconfig.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="//p0.meituan.net" rel="dns-prefetch">
    <link href="//p1.meituan.net" rel="dns-prefetch">
    <link href="//ms0.meituan.net" rel="dns-prefetch">
    <title>食刻网账号登录</title>
    <meta name="applicable-device" content="mobile">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="layui/lay/modules/layer.js"></script>
    <link href="layui/css/modules/layer/default/layer.css" rel="stylesheet"  />
    <link href="css/eve.a4872f12.css" rel="stylesheet" onload="MT.pageData.eveTime=Date.now()" />
    <link href="css/login-wm.10a0cb5a.css" rel="stylesheet" onload="MT.pageData.eveTime=Date.now()" />

    <style>
        .nav {
            text-align: center;
        }

        .subline {
            margin: .28rem .2rem;
        }

        .subline li {
            display: inline-block;
        }

        .captcha img {
            margin-left: .2rem;
        }

        .captcha .btn {
            margin-top: -.15rem;
            margin-bottom: -.15rem;
            margin-left: .2rem;
        }

        .forget {
            display: none;
        }

        div.nav-wrap-right a {
            width: auto;
        }

        .need-slip-bg {
            background: rgba(0, 0, 0, .7);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 998;
        }

        .need-slip-wrapper {
            position: fixed;
            left: 0.8rem;
            right: 0.8rem;
            top: 0;
            background: rgba(0, 0, 0, 0);
            z-index: 999;
            height: 100%;
        }

        .need-slip {
            height: 100%;
        }
    </style>

    <style>
        @font-face {
            font-family: 'cate_icon';
            src: url(images/img/cate4.woff) format("woff"), url(images/img/cate4.otf);
        }

        @font-face {
            font-family: 'base_icon';
            src: url(images/img/base14.woff) format("woff"), url(images/img/base14.otf);
        }

        .waimai .msg-ft .msg-btn {
            color: #ffd300;
        }
    </style>

</head>

<body id="account-login" class="waimai" data-com="pagecommon" data-page-id="100040" data-iswebview='false'>
<header class="navbar">
    <div class="nav-wrap-left">
        <a class="react back" href="login.php"><img src="/img/back.png" width="20"></a>
    </div>
    <h1 style="margin-left: 80px; margin-top: 16px">
        新&nbsp;用&nbsp;户&nbsp;注&nbsp;册
    </h1>
</header>

<style>
    @media (max-device-height: 480px) {
        .msg-doc {
            bottom: auto;
            top: 20%;
        }
        .msg-doc .msg-bd {
            padding: .2rem;
        }
    }

    .login-icon {
        display: none;
    }

    .regist-tip {
        display: none;
    }

    .unreceived-tip {
        display: none;
    }
</style>

<div id="login">
    <form id="quick-login-form"  autocomplete="off" method="post" style="display:block">
        <dl class="list list-in">
            <dd class="visibale">
                <dl>
                    <dd class="kv-line-r dd-padding" data-com="smsBtn_quick" data-requrl="/account/custom/mobilelogincode2">
                        <img class="login-icon icon-align" src="img/icon_signin_phone@2x.png" />
                        <input type="tel" name="mobile" id="login-mobile" class="input-weak kv-k J-input J-tel J-login-name" placeholder="请输入手机号">
                    </dd>
                    <dd class="kv-line-r dd-padding">
                        <img class="login-icon" src="img/icon_phone_check_code@2x.png" />
                        <input class="input-weak kv-k J_input_sms J-input" name="code" type="password" pattern="[0-9]+" placeholder="请输入新密码" id="password">

                    </dd>
                    <dd class="kv-line-r dd-padding">
                        <img class="login-icon" src="img/icon_phone_check_code@2x.png" />
                        <input class="input-weak kv-k J_input_sms J-input" name="code" type="password" pattern="[0-9]+" placeholder="请再次输入新密码" id="ensurepassword">
                    </dd>

                    <dd class="kv-line-r dd-padding" data-com="smsBtn_quick" data-requrl="/account/custom/mobilelogincode2">
                        <img class="login-icon icon-align" src="img/mine.png" />&nbsp;&nbsp;
                        <div style="margin-top: -5px; ">
                            <select name="usertype" id="usertype" class="change" style="width: 290px; height: 30px; border:0px solid;">
<!--                                <option value="">请选择用户类型</option>-->
                                <option value="0">普通用户</option>
                                <option value="1">商家用户</option>
                                <option value="2">骑手用户</option>
                            </select>
                        </div>
                    </dd>

                </dl>
            </dd>
        </dl>
        <div class="btn-wrapper">
            <button type="button" gaevent="imt/login/quick" class="btn btn-larger btn-block btn-disabled mj_login login-btn J-disabled" id="user_reg">
                立即注册
            </button>
        </div>
    </form>
</div>


<script>
    $(document).ready(function(){
        $("#user_reg").click(function(){
            var mob=$("#login-mobile").val();
            var password=$("#password").val();
            var ensurepassword=$("#ensurepassword").val();
            var usertype=$("#usertype").val();
           // alert(mob.length);

            if(mob.length < 1 || password.length <1 || ensurepassword.length <1) {
                layer.msg('对不起，您的信息输入不完全！');
                return ;
            }

            if(password != ensurepassword) {
                layer.msg('对不起，密码错误！');
            }

            $.post("ajax_user.php?act=add_user",
                {
                    cus_tel:mob,
                    cus_password:password,
                    user_type:usertype
                },
                function(data,status){
                    if(data.code == 200) {
                        layer.msg('注册成功!');
                        window.location.href = "/login.php";
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

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>食刻网账号登录</title>
    <meta name="meituan_check" />
    <meta name="applicable-device" content="mobile">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="//p1.meituan.net/codeman/44f8f3736d61a550dc0fa7bc1a70b6056518.ico" type="image/x-icon" />
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="for" content="meituan.com">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
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

</head>

<body id="account-login" class="waimai" data-com="pagecommon" data-page-id="100040" data-iswebview='false'>
<header class="navbar">
    <div class="nav-wrap-left">
        <a class="react back" href="index.php"><img src="/img/back.png" width="20"></a>
    </div>
    <h1 class="nav-header">
        登&nbsp;录
    </h1>
    <div class="nav-wrap-right">
        <a href="register.php">
            <span class="regist-entry">
                立即注册
            </span>
        </a>
    </div>
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
    <form id="quick-login-form" action="" autocomplete="off" method="post" style="display:block">
        <dl class="list list-in">
            <dd class="visibale">
                <dl>
                    <dd class="kv-line-r dd-padding" data-com="smsBtn_quick" data-requrl="/account/custom/mobilelogincode2">
                        <img class="login-icon icon-align" src="img/icon_signin_phone@2x.png" />
                        <input type="tel" name="mobile" id="login-mobile" class="input-weak kv-k J-input J-tel J-login-name" placeholder="请输入手机号">
                        <div class="to-del J-to-del-mobile J-to-del" style="display: none"></div>
                        <input id="partner-mobile" type="text" name="partner" value="4" style="display:none" />
                    </dd>
                    <ul class="tel-select J-select" style="display: none">
                    </ul>
                    <dd class="kv-line-r dd-padding">
                        <img class="login-icon" src="img/icon_phone_check_code@2x.png" />
                        <input class="input-weak kv-k J_input_sms J-input" name="code" type="password" pattern="[0-9]+" placeholder="请输入密码" id="password">
                        <div class="to-del J-to-del-code J-to-del" style="display: none"></div>
                    </dd>
                    <dd class="kv-line-r dd-padding" data-com="smsBtn_quick" data-requrl="/account/custom/mobilelogincode2">
                        <img class="login-icon icon-align" src="img/mine.png" />&nbsp;&nbsp;

                        <div style="margin-top: -5px; ">
                            <select name="usertype" id="usertype" class="change" style="width: 290px; height: 30px; border:0px solid;">
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
            <button type="button" gaevent="imt/login/quick" class="btn btn-larger btn-block btn-disabled mj_login login-btn J-disabled" id="user_login">登录</button>
        </div>
    </form>
</div>

<!--<ul class="subline">-->
<!--    <li>-->
<!--        <a href="/register.php">立即注册</a>-->
<!--    <li class="pull-right">-->
<!--        <a>找回密码</a>-->
<!--</ul>-->

<footer class="J-wm-footer">
    <div class="explanation"><span>说明:注册/登录说明您已同意《食刻用户协议》</a></span></div>
</footer>


<script>
    $(document).ready(function(){
        $("#user_login").click(function(){
            var mob=$("#login-mobile").val();
            var password=$("#password").val();
            var usertype=$("#usertype").val();

            //alert(mob);
            $.post("ajax_user.php?act=login",
                {
                    cus_tel:mob,
                    cus_password:password,
                    user_type:usertype
                },
                function(data,status){
                    if(data.code == 200) {
                        window.location.href = data.url;
                    }
                    else {
                        alert(data.msg);
                    }
                },"JSON");
        });
    });
</script>
</body>
</html>
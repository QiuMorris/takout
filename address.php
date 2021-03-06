<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';


$mod_address = new MysqliModel('address');
$arr_address=$mod_address->where(array('cus_id'=>$_SESSION['user']['cus_id']))->select();  //全部
//var_dump($arr_address);
//exit;
?>

<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>管理收货地址</title>
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
<!--		<script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
<!--		<script type="text/javascript" src="js/iscroll.js"></script>-->
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<script src="js/hmt.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script src="js/swiper.min.js" type="text/javascript" ></script>
	</head>
	<body>
		<header class="hasManyCity hasManyCitytwo" id="header">
			<a href="center.php" class="fl fanhui"><img src="img/back.png" width="20" ></a>
			<div class="header-tit">
                管理收货地址
			</div>
		</header>
		<div id="container">
		    <div id="main" class="mui-clearfix contaniner">

                <?php foreach ($arr_address as $k=>$valaddress ):?>
                <div class="addlist clearfloat">
		    		<div class="top clearfloat box-s">
		    			<ul>
		    				<li>
		    					<span class="fl"><?php echo $valaddress['cus_name']?></span>
		    					<span class="fr"><?php echo $valaddress['cus_tel']?></span>
		    				</li>
		    				<li>
                                <?php echo $valaddress['cus_address']?>
		    				</li>
		    			</ul>
		    		</div>
		    		<div class="bottom clearfloat box-s">
		    			<section class="shopcar clearfloat">
		    				<div class="list listtwo clearfloat">
								<div class="xuan xuantwo clearfloat fl">
				    				<div class="radio" >
									    <label>
									        <input type="checkbox" name="is_" value="" />
									        <div class="option"></div>
									    </label>
									</div>
				    			</div>

<!--							<span class="mradd fl"><input name="save" id="save" type="checkbox" value="--><?php //echo $valaddress['cus_id'] ?><!--" --><?php //if($valaddress['is_default']==1){?><!--checked--><?php //}?><!-->
							<div class="right fr clearfloat">
                                <a class="fr" onclick="delete_add(<?php echo $valaddress['id'] ?>)">
                                    <img src="img/delete.png" width="23">删除
                                </a>
                                <a href="change_address.php?id=<?php echo $valaddress['id'] ?>" class="fr">
                                    <img src="img/write.png" width="21">编辑
                                </a>
							</div>
							</div>
						</section>
		    		</div>
		    	</div>
                <?php endforeach?>


		    </div>
		    <a href="add_address.php" class="address-add fl">
                添加新地址
	     	</a>
	    </div>
	</body>

    <script>
        function delete_add(id) {
            $.post("ajax_shopcar.php?act=delete_add",
                {
                    id:id,
                },
                function(data,status){
                    if(data.code == 200) {
                        location.reload();
                    }
                    else {
                        layer.msg(data.msg)
                    }
                },"JSON");
        }



        $(document).ready(function(){
            //要执行的js代码段
            var id;

            $("input[name='select_add']").bind("click",function(){
                // alert(this);
                id = this.value;
                $.post("ajax_shopcar.php?act=select_add",
                    {
                        id:id,
                    },
                    function(data){
                        if(data.code == 200) {
                            layer.msg(data.msg);
                        }
                        else {
                            layer.msg(data.msg);
                        }
                    },"JSON");
            });



            //
            // $(:checkbox[id='save']).change(function(){
            //     alert("aaaaaaaaaa");
            //     // id = this.value;
            //     // $.post("ajax_user.php?act=normalAdd",
            //     //     {
            //     //         cus_id:id,
            //     //     },
            //     //     function(data){
            //     //         if(data.code == 200) {
            //     //             layer.msg(data.msg);
            //     //         }
            //     //         else {
            //     //             layer.msg(data.msg);
            //     //         }
            //     //     },"JSON");
            // });

        });

        </script>
</html>

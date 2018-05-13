<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

if ($_GET['act']=='cart') {
    $jsonArr=array ();
    $jsonArr["msg"]="错误";
    $jsonArr["code"]=400;

    if(!$_SESSION['user'])
    {
        $jsonArr["msg"]="用户未登录";
        $jsonArr["code"]=400;
        echo json_encode($jsonArr);
        exit;
    }


    $tag=0;
    foreach ($_SESSION['cartlist'] as $k=>$valfood) {
        if ($valfood['food_id']==$_POST['food_id'] )
        {
            //
                if($_POST['oper']=="add")
                {
                    $_SESSION['cartlist'][$k]['num']=$_SESSION['cartlist'][$k]['num']+1;
                }
                else if($_POST['oper']=="del")
                {
                    $_SESSION['cartlist'][$k]['num']=$_SESSION['cartlist'][$k]['num']-1;
                    if($_SESSION['cartlist'][$k]['num']==0)
                    {
                        unset($_SESSION['cartlist'][$k]);
                    }
                }
                $tag=1;
        }
    }
    //添加到购物车
    if($tag==0)
    {
        $mod_food=new MysqliModel('food');
        $araryfood=$mod_food->where(array('food_id',$_POST['food_id']))->selectOne();
        if($araryfood)
        {
            $_SESSION['cartlist'][]=$araryfood;
        }
    }


        $jsonArr["msg"]="操作成功";
        $jsonArr["code"]=200;


    echo json_encode($jsonArr);
    exit;
}
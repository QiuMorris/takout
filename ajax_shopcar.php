<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

if ($_GET['act']=='cart') {
    $jsonArr=array ();
    $jsonArr["msg"]="错误";
    $jsonArr["code"]=400;
    $sum=0;
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
                    $sum= $_SESSION['cartlist'][$k]['num'];
                }
                else if($_POST['oper']=="del")
                {
                    $_SESSION['cartlist'][$k]['num']=$_SESSION['cartlist'][$k]['num']-1;
                    $sum= $_SESSION['cartlist'][$k]['num'];
                    if($_SESSION['cartlist'][$k]['num']==0)
                    {
                        $sum= 0;
                        $tag=1;
                        unset($_SESSION['cartlist'][$k]);

                    }
                }
                $tag=1;
        }
    }
    //添加到购物车
    if($tag==0)
    {
        if($_POST['oper']=="add"){
            $mod_food=new MysqliModel('food');
            $araryfood=$mod_food->where(array('food_id'=>$_POST['food_id']))->selectOne();
            if($araryfood)
            {
                $araryfood['num']=1;
                $_SESSION['cartlist'][]=$araryfood;
                $sum= $araryfood['num'];
            }


        }

    }


        $jsonArr["msg"]="操作成功";
        $jsonArr["code"]=200;
        $jsonArr["sum"]=$sum;


    echo json_encode($jsonArr);
    exit;
}
<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

/*
 * 0--客户
 * 1--商家
 * 2--骑手
 * */

$mod_order = new MysqliModel('myorder');
$mod_detail_list = new MysqliModel('detail_list');
$mod_payinfo = new MysqliModel('payinfo');
$mod_assess = new MysqliModel('assess');


if($_GET['act'] == 'con_pay') {

    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $data=array();

    $data['cus_id']=$_SESSION['user']['cus_id'];
    $data['order_number']="No123".time();
    $data['order_type']=0;
    $data['order_time']=time();
    $data['order_note']="请尽快送达";
    $data['cus_address']=$_SESSION['address']['cus_address'];
    $data['buy_name']=$_SESSION['address']['cus_name'];
    $data['buy_tel']=$_SESSION['address']['cus_tel'];
    $data['is_pay']=1;
    $data['del_time']=time() + 3600;
    $data['sel_id']=$_SESSION['cartlist'][0]['sel_id'];
    $data['salary']=$_SESSION['cart'];
    $data['is_assess']=0;//默认为未评价

    $re=$mod_order->insert($data);


    //detail_list
    if($re){
        foreach ($_SESSION['cartlist'] as $k=>$v) {
           // $['food_id'] = $_SESSION['carlist'];
            $updata['food_id']=$v['food_id'];
            $updata['food_num']=$v['num'];
            $updata['food_name']=$v['food_name'];
            $updata['food_price']=$v['food_price'];
            $updata['order_id']=$data['order_number'];
            $updata['order_note']="请尽快送达";
            $mod_detail_list->insert($updata);
        }
    }

    // write liushui
    $payinfo['user_type']=0;
    $payinfo['user_id']=$_SESSION['user']['cus_id'];
    $payinfo['order_id']=$data['order_number'];
    $payinfo['order_date']=time();
    $payinfo['order_info']="订单支出";
    $payinfo['order_value']="-".$_SESSION['cart'];
    $re=$mod_payinfo->insert($payinfo);


    $pay_sel['user_type']=1;
    $pay_sel['user_id']=$_SESSION['cartlist'][0]['sel_id'];
    $pay_sel['order_id']=$data['order_number'];
    $pay_sel['order_date']=time();
    $pay_sel['order_info']="订单收入";
    $pay_sel['order_value']="+".($_SESSION['cart']*0.8);
    $re=$mod_payinfo->insert($pay_sel);

//    unset($pay_sel);
    $deli_sel['user_type']=2;
    $deli_sel['user_id']=1;
    $deli_sel['order_id']=$data['order_number'];
    $deli_sel['order_date']=time();
    $deli_sel['order_info']="配送收入";
    $deli_sel['order_value']="+".($_SESSION['cart']*0.2);
    $re=$mod_payinfo->insert($deli_sel);

    unset($_SESSION['cartlist']);
    unset($_SESSION['cart']);
    unset($_SESSION['address']);
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'updateAssess')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['assess_info'] = $_POST['assess_info'];
    $data['assess_type'] = $_POST['assess_type'];
    $data['sel_id'] = $_POST['sel_id'];
    $data['assess_time'] = time();
    $data['cus_id'] = $_SESSION['user']['cus_id'];

    $re = $mod_assess->insert($data);

//    $orderdata['order_number'] = $_POST['order_number'];
    $orderdata['is_assess'] = 1;

    $recus = $mod_order->updateBy($orderdata,'order_id',$_POST['order_id']);

    if ($recus) {
        $jsonArr["msg"] = "评价成功";
        $jsonArr["code"] = 200;
    }

    echo json_encode($jsonArr);
    exit;
}
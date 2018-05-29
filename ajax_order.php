<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

$mod_order = new MysqliModel('myorder');
$mod_detail_list = new MysqliModel('detail_list');


if($_GET['act'] == 'con_pay') {

    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $data=array();
//    $data['cus_id']=$_SESSION['user']['cus_id'];
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

    $re=$mod_order->insert($data);


    //detail_list
    if($re){
        foreach ($_SESSION['cartlist'] as $k=>$v) {
           // $['food_id'] = $_SESSION['carlist'];
            $updata['food_id']=$v['food_id'];
            $updata['food_num']=$v['num'];
            $updata['food_name']=$v['food_name'];
            $updata['food_price']=$v['food_price'];
            $updata['order_id']=$data['order_time'];
            $updata['order_note']="请尽快送达";
            $mod_detail_list->insert($updata);
        }
    }

    unset($_SESSION['cartlist']);
    unset($_SESSION['cart']);
    unset($_SESSION['address']);
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    echo json_encode($jsonArr);
    exit;
}
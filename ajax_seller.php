<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';


$mod_customer = new MysqliModel('customer');
$mod_seller = new MysqliModel('seller');
$mod_food = new MysqliModel('food');
$mod_order = new MysqliModel('myorder');

if($_GET['act'] == 'upStoreuser') {

    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $path=$_SERVER['DOCUMENT_ROOT'];

    if($_FILES['file']['type']=="image/png")
    {
        $e_name=".png";
    }
    else
    {
        $e_name=".jpg";
    }

    $cupath="/upload/".time().$e_name; //存数据库

    $data['sel_logo']=$cupath;
    $re=$mod_seller->updateBy($data,'sel_id', $_SESSION['user']['sel_id']);

    $newpath=$path.$cupath;
    if(copy($_FILES['file']['tmp_name'],$newpath))
    {
        $jsonArr["msg"]="成功";
        $jsonArr["code"]=200;
    }
    else
    {
        $jsonArr["msg"]="失败";
        $jsonArr["code"]=400;
    }

    echo json_encode($jsonArr);
    exit;
}

else if($_GET['act'] == 'upStore1') {
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $path=$_SERVER['DOCUMENT_ROOT'];

    if($_FILES['file']['type']=="image/png")
    {
        $e_name=".png";
    }
    else
    {
        $e_name=".jpg";
    }

    $cupath="/upload/".time().$e_name; //存数据库
    $data['sel_license']=$cupath;
    $re=$mod_seller->updateBy($data,'sel_id', $_SESSION['user']['sel_id']);


    $newpath=$path.$cupath;
    if(copy($_FILES['file']['tmp_name'],$newpath))
    {
        $jsonArr["msg"]="成功";
        $jsonArr["code"]=200;
    }
    else
    {
        $jsonArr["msg"]="失败";
        $jsonArr["code"]=400;
    }

    echo json_encode($jsonArr);
    exit;
}

else if($_GET['act'] == 'upStore2') {
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $path=$_SERVER['DOCUMENT_ROOT'];

    if($_FILES['file']['type']=="image/png")
    {
        $e_name=".png";
    }
    else
    {
        $e_name=".jpg";
    }

    $cupath="/upload/".time().$e_name; //存数据库
    $data['sel_photo']=$cupath;
    $re=$mod_seller->updateBy($data,'sel_id', $_SESSION['user']['sel_id']);

    $newpath=$path.$cupath;
    if(copy($_FILES['file']['tmp_name'],$newpath))
    {
        $jsonArr["msg"]="成功";
        $jsonArr["code"]=200;
    }
    else
    {
        $jsonArr["msg"]="失败";
        $jsonArr["code"]=400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'addStore') {
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['cus_tel'] = $_POST['cus_tel'];
    $data['cus_name'] = $_POST['cus_tel'];


    $recus = $mod_customer->where(array('cus_tel' => $_POST['cus_tel']))->selectOne();
    if ($recus) {
        $jsonArr["msg"] = "用户已注册";
        $jsonArr["code"] = 400;
        echo json_encode($jsonArr);
        exit;

    }
    $data['cus_password'] = md5($_POST['cus_password']);


    $re = $mod_customer->insert($data);
    if ($re) {
        $jsonArr["msg"] = "注册成功";
        $jsonArr["code"] = 200;
    }
}
else if($_GET['act'] == 'updateStore') {

    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    if($mod_seller->where(array('sel_id'=>$_SESSION['user']['sel_id']))->selectOne()) {
        $data['sel_name'] = $_POST['sel_name'];
        $data['sel_tel'] = $_POST['sel_tel'];
        $data['sel_info'] = $_POST['sel_info'];
        $data['sel_address'] = $_POST['sel_address'];

        $recus = $mod_seller->updateBy($data,'sel_id',$_SESSION['user']['sel_id']);
        if ($recus) {
            $jsonArr["msg"] = "更新成功";
            $jsonArr["code"] = 200;
        }
    }
    else {
        $data['sel_name'] = $_POST['sel_name'];
        $data['sel_tel'] = $_POST['sel_tel'];
        $data['sel_info'] = $_POST['sel_info'];
        $data['sel_address'] = $_POST['sel_address'];

        $recus = $mod_seller->insert($data);
        if ($recus) {
            $jsonArr["msg"] = "更新成功";
            $jsonArr["code"] = 200;
        }
    }

    echo json_encode($jsonArr);
    exit;
}

else if($_GET['act'] == 'save_food')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['food_name'] = $_POST['food_name'];
    $data['food_price'] = $_POST['food_price'];
    $data['food_num'] = $_POST['food_num'];
    $data['food_note'] = $_POST['food_note'];


    $refood = $mod_food->updateBy($data,'food_id',$_POST['food_id']);
    if ($refood) {
        $jsonArr["msg"] = "更新成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "更新失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'change_foodState')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['food_state'] = 0;
    $refood = $mod_food->updateBy($data,'food_id',$_POST['food_id']);
    if ($refood) {
        $jsonArr["msg"] = "下架成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "更新失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'up_foodState')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['food_state'] = 1;
    $refood = $mod_food->updateBy($data,'food_id',$_POST['food_id']);
    if ($refood) {
        $jsonArr["msg"] = "上架成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "更新失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'jiedan')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['order_type'] = 1;
    $reorder = $mod_order->updateBy($data,'order_id',$_POST['order_id']);

    if ($reorder) {
        $jsonArr["msg"] = "接单成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "接单失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'del-jiedan')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['order_type'] = 2;
    $redelorder = $mod_order->updateBy($data,'order_id',$_POST['order_id']);

    if ($redelorder) {
        $jsonArr["msg"] = "接单成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "接单失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'del-arrive')
{
    $jsonArr = array();
    $jsonArr["msg"] = "错误";
    $jsonArr["code"] = 400;

    $data['order_type'] = 3;
    $redelorder = $mod_order->updateBy($data,'order_id',$_POST['order_id']);

    if ($redelorder) {
        $jsonArr["msg"] = "配送成功";
        $jsonArr["code"] = 200;
    }
    else {
        $jsonArr["msg"] = "配送失败";
        $jsonArr["code"] = 400;
    }

    echo json_encode($jsonArr);
    exit;
}

else if($_GET['act'] == 'sel_logout') {
    unset($_SESSION['user']);

    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act'] == 'updateThingjpg') {
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;
    $path=$_SERVER['DOCUMENT_ROOT'];

    if($_FILES['file']['type']=="image/png")
    {
        $e_name=".png";
    }
    else
    {
        $e_name=".jpg";
    }

    $cupath="/upload/".time().$e_name; //存数据库

    $data['food_jpg']=$cupath;
    $data['sel_id']=$_SESSION['user']['sel_id'];
    $data['food_state']=1;
    $data['food_num']=100;
    $re=$mod_food->insert($data);

    $newpath=$path.$cupath;
    if(copy($_FILES['file']['tmp_name'],$newpath))
    {
        $jsonArr["msg"]="成功";
        $jsonArr["code"]=200;
        $jsonArr["food_id"]=$re;
    }
    else
    {
        $jsonArr["msg"]="失败";
        $jsonArr["code"]=400;
    }

    echo json_encode($jsonArr);
    exit;
}

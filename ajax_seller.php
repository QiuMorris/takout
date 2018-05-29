<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';


$mod_customer = new MysqliModel('customer');
$mod_seller = new MysqliModel('seller');

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
    $re=$mod_seller->updateBy($data,'cus_id', $_SESSION['user']['cus_id']);

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
    $re=$mod_seller->updateBy($data,'cus_id', $_SESSION['user']['cus_id']);


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
    $re=$mod_seller->updateBy($data,'cus_id', $_SESSION['user']['cus_id']);

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

    if($mod_seller->where(array('cus_id'=>$_SESSION['user']['cus_id']))->selectOne()) {
        $data['sel_name'] = $_POST['sel_name'];
        $data['sel_tel'] = $_POST['sel_tel'];
        $data['sel_info'] = $_POST['sel_info'];
        $data['sel_address'] = $_POST['sel_address'];

        $recus = $mod_seller->updateBy($data,'cus_id',$_SESSION['user']['cus_id']);
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
        $data['cus_id'] = $_SESSION['user']['cus_id'];
        $recus = $mod_seller->insert($data);
        if ($recus) {
            $jsonArr["msg"] = "更新成功";
            $jsonArr["code"] = 200;
        }
    }



    echo json_encode($jsonArr);
    exit;
}
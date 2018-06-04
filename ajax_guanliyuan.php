<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';

$mod_admin = new MysqliModel('account');

if($_GET['act']=='login') {
    $jsonArr=array ();
    $jsonArr["msg"]="d400";
    $jsonArr["code"]=400;


    $data['p_number']=$_POST['p_number'];
    $data['p_password']=md5($_POST['p_password']);

    $recus=$mod_admin->where(array('p_number'=>$_POST['p_number'],'p_password'=>$data['p_password']))->selectOne();

    if($recus )
    {
        $_SESSION['user']=$recus;
        $jsonArr["msg"]="登录成功";
        $jsonArr["code"]=200;
        $jsonArr["url"]="/admin/index.html";

    }
    else{
        $jsonArr["msg"]="登录失败";
        $jsonArr["code"]=400;
    }


    echo json_encode($jsonArr);
    exit;
}
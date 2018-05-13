<?php
session_start();
include_once 'comm/dbconfig.php';
include_once 'comm/MysqliModel.class.php';



$mod_customer = new MysqliModel('customer');


if($_GET['act']=='add_user')
{
    $jsonArr=array ();
    $jsonArr["msg"]="错误";
    $jsonArr["code"]=400;

    $data['cus_tel']=$_POST['cus_tel'];
    $data['cus_name']=$_POST['cus_tel'];


    $recus=$mod_customer->where(array('cus_tel'=>$_POST['cus_tel']))->selectOne();
    if($recus)
    {
        $jsonArr["msg"]="用户已注册";
        $jsonArr["code"]=400;
        echo json_encode($jsonArr);
        exit;

    }
    $data['cus_password']=md5($_POST['cus_password']);


    $re=$mod_customer->insert($data);
    if($re)
    {
        $jsonArr["msg"]="注册成功";
        $jsonArr["code"]=200;
    }

    echo json_encode($jsonArr);
    exit;
}
else if($_GET['act']=='login')
{
    $jsonArr=array ();
    $jsonArr["msg"]="d400";
    $jsonArr["code"]=400;

    $data['cus_tel']=$_POST['cus_tel'];
    $data['cus_password']=md5($_POST['cus_password']);

    $recus=$mod_customer->where(array('cus_tel'=>$_POST['cus_tel'],'cus_password'=>$data['cus_password']))->selectOne();

    if($recus )
    {
        $_SESSION['user']=$recus;
        $jsonArr["msg"]="登录成功";
        $jsonArr["code"]=200;
    }
    else{
        $jsonArr["msg"]="登录失败";
        $jsonArr["code"]=400;
    }

    echo json_encode($jsonArr);

    exit;
}
else if($_GET['act']=='getcode')
{
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;

    $data=rand(10000,999999);
    $jsonArr["data"]=$data+”“;

    echo json_encode($jsonArr);

    exit;
}
else if($_GET['act']=='getuserinfo')
{
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;

    $recus=$mod_customer->where(array('cus_tel'=>$_POST['cus_tel']))->selectOne();
    if($recus)
    {
        $jsonArr["data"]=$recus;
    }

    echo json_encode($jsonArr);

    exit;
}
else if($_GET['act']=='getuseraddress')
{
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;


    echo json_encode($jsonArr);

    exit;
}

else if($_GET['act'] == 'getuseraddresslist')
{
    $jsonArr=array ();
    $jsonArr["msg"]="成功";
    $jsonArr["code"]=200;

    $mod_address = new MysqliModel('address');

    // $recus=$mod_customer->where(array('id'=>$_POST['id']))->selectOne(); //一条
    $recus=$mod_address->where(array('cou_id'=>$_SESSION['user']['cus_id']))->select();  //全部
    // if($recus)
    // {
    //     $jsonArr["data"]=$recus;
    // }

    echo json_encode($jsonArr);
    exit;
}

else if($_GET['act'] == 'add_address') {
    $jsonArr=array ();
    $jsonArr["msg"]="错误";
    $jsonArr["code"]=400;

    $data['cus_id']=$_SESSION['user']['cus_id'];
    $data['cus_tel']=$_POST['cus_tel'];
    $data['cus_name']=$_POST['cus_name'];
    $data['cus_address']=$_POST['cus_address'];
    $data['is_default']=0;

    $mod_address = new MysqliModel('address');
    $re=$mod_address->insert($data);

    if($re)
    {
        $jsonArr["msg"]="添加地址成功";
        $jsonArr["code"]=200;
    }

    echo json_encode($jsonArr);
    exit;
}


else {
    
    $jsonArr=array ();
    $jsonArr["msg"]="400";
    $jsonArr["code"]=400;

    echo json_encode($jsonArr);

    exit;
}




<?php
require_once '../include.php';
session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag'];
if ($verify==$verify1){
    $link=connect();
    $sql="select * from qiangge_admin where username='{$username}' and password='{$password}'";
    $row=checkAdmin($sql,$link);
    if ($row){
        //如果选择了自动登录
        if ($autoFlag){
             setcookie("adminId",$row['id'],time()+7*24*3600);
             setcookie("adminNmae",$row['username'],time()+7*24*3600);
        }
       $_SESSION['adminName']=$row['username'];
       $_SESSION['adminId']=$row['id'];
       header("location:index.php");
    }else {
        alertMes("账号或密码错误，请重新登录", "login.php");
    }
    mysqli_close($link);
}else {
    alertMes("验证码错误", "login.php");
}
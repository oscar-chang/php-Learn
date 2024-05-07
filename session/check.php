<?php 
session_start();
$acc=$_POST['account'];
$pw=$_POST['password'];

if($acc == 'admin' && $pw == '1234'){
    // 正確
    $_SESSION['login'] = $acc;
    header('location:result.php');
}else{
    // 有不正確時
    $_SESSION['error'] = '帳號或密碼錯誤';
    header('location:login.php');
}
?>
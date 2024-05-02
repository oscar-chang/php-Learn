<?php 
$acc=$_POST['account'];
$pw=$_POST['password'];

if($acc == 'admin' && $pw == '1234'){
    // 正確
    header('location:result.php?acc='.$acc);
}else{
    // 有不正確時
    header('location:error.php?acc='.$acc);
}
?>
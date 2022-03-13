<?php
header("Content-Type:text/html; charset=UTF-8");
$userid=$_POST['userid'];
$phone=$_POST['phone'];
$repassid=$_POST['confirm'];
$passid=$_POST['password'];

if(trim($passid) != trim($repassid)){
    echo "<script>alert('两次密码不一样，请重新注册')</script>";
	die;
}
include('conn.php');

$sqli="select username from username where username='$userid'";
$result=mysql_query($sqli,$conn);
if (mysql_num_rows($result)){  

      
    
    echo "<script> alert('您已经注册过,请直接用账号密码登录')</script>";  
   
    die;
} 


$sql = "INSERT INTO username ".
        "(username,password, phones) ".
        "VALUES ".
        "('$userid','$passid','$phone')";//查询这个表
$results=mysql_query($sql,$conn);
if(mysql_fetch_array($result)) {
    echo "<script>alert('注册成功，请登录')</script>";
} else {
    echo "<script>alert('注册失败，请联系管理员')</script>";
}






?>


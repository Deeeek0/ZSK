<?php 
header("Content-Type:text/html; charset=UTF-8");
include('conn.php');
$userid=$_POST['username'];
$passid=$_POST['password'];

#echo $userid;
#echo $passid;



#$sql="select username,password from usernames where username='$userid' and password='$passid' limit 1";
#echo $sql;
$sql="select username,password from username where username='$userid' and password='$passid'";  
$result=mysql_query($sql,$conn);
if (mysql_num_rows($result)){  
    //登录成功  

    header("Location:主页面.html");

    exit;  
} else {  
    echo "<script>alert('账号密码错误')</script>";  
	
}  

?>
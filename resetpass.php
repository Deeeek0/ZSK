
<?php
header("Content-Type:text/html; charset=UTF-8");
$userid=$_POST['username'];
$phone=$_POST['phone'];

$repassid=$_POST['repassword'];
$passid=$_POST['password'];





if(trim($passid) != trim($repassid)){
    echo "<script>alert('两次密码不一样，请重新注册')</script>";
	die;
}


include('conn.php')

$sql="select username,phones from username where username='$userid' and phones='$phone'"; 
$result=mysql_query($sql,$conn);
if (mysql_num_rows($result)){  
      

	$sqli = "UPDATE usernames SET password='$passid' where username='$userid' ";
	$results=mysql_query($sqli,$conn);
	if(mysql_fetch_array($results))  {

		echo "<script>alert('更改密码成功，请重新登录')</script>";
	} else {
	
		echo "<script>alert('更改密码失败，请联系管理员')</script>";
	}

   
   
    
} else {  

	
    echo "<script>alert('验证失败')</script>";	
	die;
}  


?>

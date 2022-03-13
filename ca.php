
<?php
header("Content-Type:text/html; charset=UTF-8");
include('conn.php');
$team = $_POST[ 'team' ];
$people=$_POST['people'];
$time=$_POST['time'];
$place=$_POST['place'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$date=$_POST['date'];



$sql = "INSERT INTO yuyue".
		"(name, phone,team,people,date,time,place)".
		"VALUES".
		"('$name', '$phone','$team','$people','$date','$time','$place')";//查询这个表

//判断是否成功
if (mysql_query($sql,$conn)) {
    echo "<script>alert('预约成功，请留意教练电话')</script>";
} else {
    echo "<script>alert('预约失败，重新预约')</script>";
}



 ?>

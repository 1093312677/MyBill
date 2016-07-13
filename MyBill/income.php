<?php
	header('content-type:text/html;charset=utf-8');
	$username = $_REQUEST['username'];
	$username1 = $username."income";

	$name = $_REQUEST['name'];
	$date1 = $_REQUEST['date1'];
	$money = $_REQUEST['money'];
	$usage = $_REQUEST['usage'];
	$remark = $_REQUEST['remark'];
	


	// 时间的转换

	$year = date('Y',strtotime($date1));
	$month = date('m',strtotime($date1));
	$day = date('d',strtotime($date1));

	include("databases.php");
	$sql = "create table IF NOT EXISTS $username1 (name varchar(20),year varchar(6),month varchar(4),day varchar(4),money varchar(20),usagee varchar(20),remark varchar(520),id int primary key auto_increment)ENGINE = InnoDB DEFAULT CHARSET ='utf8'"; 
	$conn = new ConnectMysql();
	$result = $conn->Connect($sql);//执行语句


	$sql2 = "insert into $username1 values ('$name','$year','$month','$day','$money','$usage','$remark',0)";
	$result = $conn->Connect($sql2);//执行语句
	
?>
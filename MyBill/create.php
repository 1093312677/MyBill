<?php
	header('content-type:text/html;charset=utf-8');
	$username = $_REQUEST['username'];
	echo $username;
	include("databases.php");
	$sql = "create table IF NOT EXISTS $username (project varchar(20),year varchar(6),month varchar(4),day varchar(4),money varchar(20),usagee varchar(20),remark varchar(520),classify varchar(10),id int primary key auto_increment)"; 
	$conn = new ConnectMysql();
	$result = $conn->Connect($sql);//执行语句

	
	
?>
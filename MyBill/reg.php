<?php
	header('content-type:text/html;charset=utf-8');
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	
	include("databases.php");
	$sql = "create table IF NOT EXISTS $username ( username varchar(20) primary key,password varchar(30),email varchar(20),id int primary key auto_increment)"; 
	$conn = new ConnectMysql();
	$result = $conn->Connect($sql);//执行语句
	print_r($sql);
	$sql2 = "insert into $username values ('$username','$password','$email',0)";
	$result = $conn->Connect($sql2);//执行语句
	
?>
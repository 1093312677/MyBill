<?php
class ConnectMysql
	{
		var $sever_name="localhost";
		var $mysql_username = "root";
		var $mysql_password = "root";
		var $mysql_database = "person";

		// var $sever_name="118.193.195.16";
		// var $mysql_username = "a0826194802";
		// var $mysql_password = "wn15181647378";
		// var $mysql_database = "a0826194802";
		function Connect($sql)
		{
			$mysqli = new mysqli($this->sever_name,$this->mysql_username,$this->mysql_password,$this->mysql_database);
			if($mysqli->connect_error)
			{
				die("connect error:".$mysqli->connect_error);
			}
			$mysqli->set_charset='utf8';
			$result = $mysqli->query($sql);
			return $result;
		}

		function CloseMysql()
		{
			$this->mysqli->close();
		}
	}


?>
	<?php
		header('content-type:text/html;charset=utf-8');
		$username = $_REQUEST['username'];
		$timeYear = $_REQUEST["timeYear"];
		$timeMonth = $_GET["timeMonth"];
		
		if($timeMonth<10)
		{
			$timeMonth = '0'.$timeMonth;
		}

		include("databases.php");
		$conn = new ConnectMysql();
		$sql = "select*from $username where year='$timeYear' AND month='$timeMonth'";
		$result = $conn->Connect($sql);//执行语句
		

		echo '<table border=0px cellspacing="0" cellpadding="0">';
	//	echo "<tr align='center'><td>Time</td><td>Project</td><td>Money</td><td>usage</td><td>Remark</td><td>Classify</td></tr>";
		while($row = $result->fetch_array())
		{
			echo '<tr style="background:white">';
			echo '<td style="width:20%">'."<h3>";
				echo $row['year']."/";
			
				echo $row['month']."/";
			
				echo $row['day'];
			echo '</td></h3>';
		echo '</tr>';

			echo '<tr >';

			echo '<td style="background:white" style="width:20%">';
				echo $row['project'];
			echo '</td>';
			
			echo '<td style="background:white" style="width:20%">';
				echo "-".$row['money'];
			echo '</td>';

			echo '<td style="background:white" style="width:20%">';
				echo $row['usagee'];
			echo '</td>';

			echo '<td style="background:white" style="width:20%">';
				echo $row['remark'];
			echo '</td>';

			echo '<td style="background:white" style="width:20%">';
				echo $row['classify'];
			echo '</td>';

		echo '</tr>';
	}
	echo '</table>';

	?>
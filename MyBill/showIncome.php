	<?php
		header('content-type:text/html;charset=utf-8');
		$username = $_REQUEST['username'];
		$username = $username."income";
		include("databases.php");
		$conn = new ConnectMysql();
		$sql = "select*from $username";// where year='$timeYear' AND month='$timeMonth'";
		$result = $conn->Connect($sql);//鎵ц璇彞
		

		echo '<table border=0px cellspacing="0" cellpadding="0">';
		//echo "<tr align='center'><td>Name</td><td>Time</td><td>Money</td><td>usage</td><td>Remark</td></tr>";
		while($row = $result->fetch_array())
		{
			
			echo '<tr >';

				echo '<td align="center" style="width:20%"><h3>';
					echo $row['year']."/";
				
					echo $row['month']."/";
				
					echo $row['day'];
				echo '</h3></td>';

			echo '</tr >';
				echo '<tr>';

				echo '<td style="background:white" style="width:20%" class="name">';
					echo $row['name'];
				echo '</td>';	
				echo '<td style="background:white" style="width:20%" class="money" align="left">';
					echo "+".$row['money'];
				echo '</td>';

				echo '<td  style="background:white" style="width:20%">';
					echo $row['usagee'];
				echo '</td>';

				echo '<td  style="background:white" style="width:20%" align="right">';
					echo $row['remark'];
				echo '</td>';


			echo '</tr>';
		}
		echo '</table>';

	?>
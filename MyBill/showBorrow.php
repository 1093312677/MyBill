	<?php
		header('content-type:text/html;charset=utf-8');
		$username = $_REQUEST['username'];
		$username = $username."borrow";
		include("databases.php");
		$conn = new ConnectMysql();
		$sql = "select*from $username";// where year='$timeYear' AND month='$timeMonth'";
		$result = $conn->Connect($sql);//鎵ц璇彞
		

		echo '<table border=0px cellspacing="0" cellpadding="0">';
	//	echo "<tr align='center'><td>Name</td><td>Time</td><td>Money</td><td>usage</td><td>Remark</td><td>deadline</td></tr>";
		while($row = $result->fetch_array())
		{
			echo '<tr ><h2>';


				echo '<td  class="time">';
					echo $row['year']."/";
				
					echo $row['month']."/";
				
					echo $row['day'];
				echo '</td>';
			echo '</tr ></h2>';
			echo '<tr >';
			
				echo '<td style="background:white" class="name">';
					echo $row['name'];
				echo '</td>';

				
				
				echo '<td style="background:white" style="width:15%" class="money">';
					echo $row['money'];
				echo '</td>';

				echo '<td  style="background:white" class="uuagee">';
					echo $row['usagee'];
				echo '</td>';

				echo '<td  style="background:white" class="remark">';
					echo $row['remark'];
				echo '</td>';

				echo '<td align="right" style="background:white" class="deadline">';
					echo $row['deadline'];
				echo '</td>';

			echo '</tr>';
		}
		echo '</table>';

	?>
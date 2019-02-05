<?php
	//echo "I am view for User Details";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Sr. NO</th>
			<th>Username</th>
			<th>Company</th>
		</tr>
		<?php
			foreach ($userArray as $key => $value) {

				echo "<tr>
				<td>".$value['id']."</td>
				<td>".$value['username']."</td>
				<td>".$value['company']."</td>
				</tr>";


			}

		?>
		
	
	</table>

</body>
</html>




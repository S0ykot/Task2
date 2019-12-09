<?php
session_start();
error_reporting(0);
require_once '../db/functions.php';

?>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>
	<h1>Employee Details</h1>
<table border="1" width="50%">
	<form method="POST">
		<tr>
			<th>Name</th>
			<th>UserName</th>
			<th>Contact No</th>
			<th>Password</th>
			<th>Action</th>
		</tr>

		<?php

		$result = emp_details();
		while ($row= mysqli_fetch_assoc($result)) {
			echo "
				<tr>
					<td>".$row['name']."</td>
					<td>".$row['uname']."</td>
					<td>".$row['contactNo']."</td>
					<td>".$row['pass']."</td>
					<td><a href='#'>Edit</a> &nbsp <a href='#'>Del</a></td>
				</tr>

			";
		}

		?>
	</form>
</table>
<a href="home.php">Back</a><br>
<a href="">Logout</a>
</body>
</html>
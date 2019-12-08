<?php

require_once '../db/functions.php';

if ($_POST['search']) {
	$value = $_POST['search'];

	if (empty($value)) {
		
	}
	else
	{
		$data = search_emp($value);
		while ($row = mysqli_fetch_assoc($data)) {
			echo "
			<table border='1'>
			<tr>
			<th>Name</th>
			<th>UserName</th>
			<th>Contact No</th>
			<th>Password</th>
			<th>Action</th>
		</tr>

		<tr>
					<td>".$row['name']."</td>
					<td>".$row['uname']."</td>
					<td>".$row['contactNo']."</td>
					<td>".$row['password']."</td>
					<td><a href='#'>Edit</a> &nbsp <a href='#'>Del</a></td>
				</tr>
				</table>
			";
		}
	}
}

?>
<?php

require_once '../db/functions.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$cno = $_POST['cno'];
	$uname = $_POST['uname'];

	$re = add_emp($name,$uname,$pass,$cno);

	if ($re) {
		echo "Added";
	}
	else
	{
		echo "Failed";
	}
}

?>
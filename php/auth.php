<?php

session_start();
require_once '../db/functions.php';

if (isset($_POST['submit'])) {
	$uname = $_POST['username'];
	$pass = $_POST['pass'];



	if (empty($uname) || empty($pass)) {
		header('Location:../view/login.php');
	}
		else
		{
			echo "<script>alert(".$uname."&".$pass.")</script>";
			$result = auth_check($uname,$pass);

			if ($result) {
				header('Location: ../view/home.php');
			}
			else
			{
				header('Location: ../view/login.php');
			}

		}
	}

?>
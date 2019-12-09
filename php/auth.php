<?php
error_reporting(0);
session_start();
require_once '../db/functions.php';

if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$flag = FALSE;

	if (empty($uname) || empty($pass)) {
		header('Location:../view/login.php');
	}
		else
		{
			$data = auth_check($uname,$pass);

			while ($row = mysqli_fetch_assoc($data)) {
				if ($row['uname']==$uname AND $row['pass']==$pass) {
					$_SESSION['ID']=$row['id'];
					$_SESSION['uname']= $row['uname'];
					$_SESSION['type']= $row['dept.dept_name'];
					$flag = TRUE;
				}

				else
				{
					$flag = FALSE;
				}
			}

			if ($flag) {
				header('Location:../view/home.php');
			}
			else
			{
				header('Location:../view/login.php');
			}

		}
	}

?>
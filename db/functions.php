<?php
error_reporting(0);
session_start();
require_once 'db.php';


function auth_check($username,$password)
{
	$conn = getConnection();
	$query = "SELECT * from users,dept where uname='{$username}' AND pass='{$password}' AND users.dept_no=dept.dept_no";
	$data = mysqli_query($conn,$query);
	return $data;
}


function emp_details()
{
	$conn = getConnection();
	$query = "SELECT * from users WHERE dept_no=2";
	$data = mysqli_query($conn,$query);
	return $data;

}

function add_emp($name,$uname,$password, $cont)
{
	$conn = getConnection();
	$query = "INSERT INTO users values ('','{$name}','{$uname}','{$password}','{$cont}',2)";
	$result = mysqli_query($conn,$query);

	if ($result) {
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function search_emp($value)
{
	$conn = getConnection();
	$query = "SELECT * from users where uname like '%{$value}%'";
	$data  = mysqli_query($conn,$query);
	return $data;
}

?>
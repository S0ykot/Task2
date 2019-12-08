<?php
session_start();
require_once 'db.php';


function auth_check($username,$password)
{
	$conn = getConnection();
	$query = "SELECT * from users,dept where uname='{$username}' AND password='{$password}' AND users.dept_no=dept.dept_no";
	$data = mysqli_query($conn,$query);
	$row= mysqli_fetch_assoc($data);
	
	if ($row['uname']==$username AND $row['password']==$password) {
		$_SESSION['ID'] = $row['id'];
		$_SESSION['name'] = $row['uname'];
		$_SESSION['type']=$row['dept.dept_name'];
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}


function emp_details()
{
	$conn = getConnection();
	$query = "SELECT * from users";
	$data = mysqli_query($conn,$query);
	return $data;

}

function add_emp($name,$uname,$password, $cont)
{
	$conn = getConnection();
	$query = "INSERT INTO users where values ('','{$name}','{$uname}','{$password}','{$cont}',2)";
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
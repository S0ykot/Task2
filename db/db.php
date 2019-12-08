<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'task2');
		return $conn;
	}
?>
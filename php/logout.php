<?php
session_start();
$d = session_destroy();
if ($d) {
	header('location:../index.php');
}
?>
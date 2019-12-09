<?php
session_start();

if ($_SESSION['uname'] AND $_SESSION['type']=='admin') {

?>


<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Welcome </h1>
<a href="e_details.php">(*)Empolyee Details</a><br>
<a href="e_add.php">(*)Add Emplyoee</a><br>
<a href="e_search.php">(*) Search Empolyee</a><br>
<a href="../php/logout.php">(*)Logout</a><br>
</body>
</html>


<?php

}
elseif ($_SESSION['uname'] AND $_SESSION['type']=='employee') {

	?>

	<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Welcome </h1>
<a href="e_details.php">(*)Empolyee Details</a><br>
<a href="e_add.php">(*)Add Emplyoee</a><br>
<a href="e_search.php">(*) Search Empolyee</a><br>
<a href="../php/logout.php">(*)Logout</a><br>
</body>
</html>



<?php


}else
{
	header('Locaiton:login.php');
}

?>
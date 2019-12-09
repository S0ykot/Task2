<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<fieldset>
	<legend>Login</legend>
	<form method="POST" action="../php/auth.php">
		Username: <input type="text" name="uname" id="uname"><br><br>
		Password: <input type="password" name="pass" id="pass"><br><br>
		<input type="submit" name="submit" onclick="login_V()"><input type="reset" name="reset">
		<a href="#">Back</a>
	</form>
</fieldset>
</body>
</html>
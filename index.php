<?php
include ('register.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>

	<form method="post" action="register.php">
		<label>name</label>
		<input type="text" name="name">

		<label>email address</label>
		<input type="email" name="email">


		<label>password</label>
		<input type="password" name="password">

		<label>confirm password</label>
		<input type="password" name="confirm">

		<label>first name</label>
		<input type="text" name="first name">

		<label>last name</label>
		<input type="text" name="last name">

		<input type="submit" name="submit" value="submit">
		

		

		




	</form>

</body>
</html>
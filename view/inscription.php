
<html>
<head>	<title>In</title>
</head>
<body>
	<h1>Inscription</h1>
    <form method="POST" action="verification.php">
	<label for="id">ID:</label>
	<input type="text" id="id" name="id" required><br><br>
    	<label for="first_name">First:</label>
	<input type="text" id="first_name" name="first_name" required><br><br>
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required><br><br>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="date_of_birth">Date of Birth:</label>
		<input type="date" id="date_of_birth" name="date_of_birth" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>
</body>
</html>
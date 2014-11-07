<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to TwitchAutoHost!</title>
	</head>
	<body>
		<h1>TwitchAutoHost</h1>
		<p>
			TwitchAutoHost is a simple set of PHP scripts that allow users to host their stream on your own channel, provided that they provide a password that you can set.
		</p>
		<p>
			This is a sample implementation of the form that the end-user will enter the details into in order to host their content on your channel:
		</p>
		<form action="host.php" method="post">
			Your channel name: <input type="text" name="channelname" />
			<br />
			Password: <input type="password" name="userpassword" />
			<br />
			<input type="submit" />
		</form>
	</body>
</html>
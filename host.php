<!DOCTYPE html>
<html>
	<head>
		<title>TwitchAutoHost</title>
	</head>
	<body>
		<?php
			include "config.php";

			function sendCommand ($server, $cmd) { 
				@fwrite($server['SOCKET'], $cmd, strlen($cmd)); // Sends the command to the server  
			} 

			$user_password = $_POST['userpassword'];
			$user_channelname = $_POST['channelname'];

			if ($user_password == $master_password) {
				// Password was correct, connect to IRC and post the hosting message
				if ($user_channelname == "") {
					echo "You need to enter a channel name!";
					echo "<br />";
					echo "<a href='index.php'>Go back and try again</a>";
				} else {
					$server = array(); // Array to store the IRC server details
					$server['SOCKET'] = @fsockopen($irc_server, $irc_port, $errno, $errstr, 2);
					if ($server['SOCKET']) {
						sendCommand($server, "PASS $irc_password\n\r");
						sendCommand($server, "NICK $irc_nickname\n\r");
						sendCommand($server, "JOIN #$irc_nickname\n\r");
						sendCommand($server, "PRIVMSG #$irc_nickname :.unhost\n\r");
						sendCommand($server, "PRIVMSG #$irc_nickname :.host $user_channelname\n\r");
						@fclose($server['SOCKET']);
						echo "<p>";
						echo "Awesome! The channel $user_channelname is now being hosted at <a href='http://twitch.tv/$irc_nickname'>twitch.tv/$irc_nickname</a>";
						echo "</p>";
						echo "<p>";
						echo "When you're done, click the button to unhost from twitch.tv/$irc_nickname.";
						echo "</p>";
						echo "<form action='unhost.php' method='post'>";
						echo "<input type='submit' value='Unhost' />";
						echo "</form>";
					}
				}
			} else {
				// Password was not correct, so we should let the user know
				echo "Incorrect password.";
				echo "<br />";
				echo "<a href='index.php'>Go back and try again</a>";
			}
		?>
	</body>
</html>
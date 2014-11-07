<?php
	include "config.php";

	function sendCommand ($server, $cmd) { 
    @fwrite($server['SOCKET'], $cmd, strlen($cmd)); // Sends the command to the server  
	} 

	$server = array(); // Array to store the IRC server details
	$server['SOCKET'] = @fsockopen($irc_server, $irc_port, $errno, $errstr, 2);
	if ($server['SOCKET']) {
		sendCommand($server, "PASS $irc_password\n\r");
		sendCommand($server, "NICK $irc_nickname\n\r");
		sendCommand($server, "JOIN #$irc_nickname\n\r");
		sendCommand($server, "PRIVMSG #$irc_nickname :.unhost\n\r");
		header("location:index.php");
	}
?>
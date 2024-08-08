<!DOCTYPE html>
<html>

<head>
<title>/other</title>
</head>
<!--  BODY BODY BODY BODY BODY BODY -->
<body>
<?php
	// This index file has a multi-purpose.  It's supposed to automatically index all of it's subfolders.
	// This is a challenge.

	echo "<center><h1><b>/other ~</b></h1></center>";
	// While I'm here I got a crazy fucking awesome idea.  Create virtual machines on my computer, one a docker with tripwire, another a honeypot or a slave, then network them together.
	// Also a SQL server.
	// Merge firewall on battlecruiser to those VMs running on another computer, as DMZ, use other NICs.  Use fuzzy for a gateway IDS and maybe even IPS.  Forward all the routes to my IP and web gw and host dock.battlecruiser.co from here.
	// Use version control with a Laravel app and have my private database at home.
	// SECURE IT.

	// VMs, docker, dock, IDSs, fuzzy, laravel
	
	// ToDo:
		// Change from nginx to Apache2 on localhost.
		// Create VM for docker.
		// Network it to the web.
		// Host dock.battlecruiser.co from a Laravel app here.
		// Create an SQL VM, network it, secure it.
?>
<div class="">
	<center>
		<p>
			Battlecruiser.co and the dock are entirely <b>void</b> of a database.<br>
			So KMA u wanna hack my systemz.  Enjoy the images throughout here :D
		</p>
		<hr>
	</center>
</div>
<?php 
	$ip = $_SERVER['REMOTE_ADDR'];
	return $ip;
?>

</body>
</html>
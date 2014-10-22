<?php
	$link = mysql_connect('127.0.0.1','root','123');
	if (!$link){
		die('Could not connect:' . mysql_error());
	}
	echo "Database connected successfully\n";
	mysql_close($link);
?>
